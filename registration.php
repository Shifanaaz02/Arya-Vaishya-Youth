<?php
session_start();
require 'vendor/autoload.php';
use Aws\S3\S3Client;
// Instantiate an Amazon S3 client.
$s3Client = new S3Client([
'version' => 'latest',
'region'  => 'ap-south-1',
'credentials' => [
'key'    => 'AKIAUVRXTLOJPR44J7ZE',
'secret' => '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'
]
]);

include_once 'db.php';

if(isset($_POST['Register']))
{
$AVID = mt_rand(1000, 9999);
setcookie("AVID", $AVID);
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 7; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
$password = randomPassword();
setcookie("AVPass", $password);

$full_name = $_POST['name'];
// setcookie("name", $full_name);
$phone_number = $_POST['mobile'];
$email = $_POST['email'];
// setcookie("email", $email);
$date_of_birth = $_POST['DOB'];
$Designation = $_POST['Designation'];
$Address = $_POST['Address'];
$Gotra_1 = $_POST['Gotra_1'];
$Gotra_2 = $_POST['Gotra_2'];
$fam_member = $_POST['family'];
$Blood_grp = $_POST['Blood_grp'];
// $photo = $_POST['photo'];
$active_doner = $_POST['active_doner'];


// //Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Check if file was uploaded without errors
if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
$filename = basename($_FILES["photo"]["name"]);
$filetype = $_FILES["photo"]["type"];
$filesize = $_FILES["photo"]["size"];
// Validate file extension
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
// Validate file size - 10MB maximum
$maxsize = 10 * 1024 * 1024;
if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
// Validate type of the file
if(in_array($filetype, $allowed)){


if(move_uploaded_file($_FILES["photo"]["tmp_name"], "form-images/" . $filename)){
$bucket = 'bucket-forms-php';
$file_Path = __DIR__ . '/form-images/'. $filename;
$key = basename($file_Path);
// // $pathInS3 = 'https://s3.ap-south-1.amazonaws.com/' . $bucket . '/' . $key;


try {
$result = $s3Client->putObject([
'Bucket' => $bucket,
'Key'    => 'registration/'.$key,
'Body'   => fopen($file_Path, 'r'),
'ACL'    => 'public-read', // make file 'public'
]);
// echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
} catch (Aws\S3\Exception\S3Exception $e) {
echo "There was an error uploading the file.\n";
echo $e->getMessage();
}


// $run=$conn->query("INSERT INTO register VALUES ('$AVID','$password','$full_name','$phone_number','$email','$date_of_birth','$Designation','$Gotra_1','$Gotra_2','$fam_member','".$result->get('ObjectURL')."','$active_doner');");
$run=$conn->query("INSERT INTO `register` (`AVID`, `password`, `name`, `mobile`, `email`, `DOB`, `Designation`,`Address`, `Gotra_1`, `Gotra_2`, `family`, `photo`,`Blood_grp`, `active_doner`) VALUES ('$AVID','$password','$full_name','$phone_number','$email','$date_of_birth','$Designation','$Address','$Gotra_1','$Gotra_2','$fam_member','".$result->get('ObjectURL')."','$Blood_grp','$active_doner')");

    
// $run = mysqli_query($conn, $query);
if($run){
    echo "<script> alert('Check your email and login!')
    </script>";
    
    include_once 'sendEmail.php';
}

else{
    echo "failed";
    echo "ERROR: $run <br> $conn->error";
}
}else{
    echo "File is not uploaded";
    }
    } else{
    echo "Error: There was a problem uploading your file. Please try again."; 
    }
 } else{
    echo "Error: " . $_FILES["photo"]["error"];
    }
}
}
?>


       
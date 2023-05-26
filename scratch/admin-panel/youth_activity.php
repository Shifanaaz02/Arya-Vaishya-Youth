<?php

require '..\vendor/autoload.php';
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

include_once '..\db.php';


if(isset($_POST['submit']))
{

$event_name = $_POST['name'];
$time = $_POST['time'];
$date = $_POST['date'];
$description = $_POST['description'];
// $photo = $_POST['photo'];


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


if(move_uploaded_file($_FILES["photo"]["tmp_name"], "youth_activity_img/" . $filename)){
$bucket = 'bucket-forms-php';
$file_Path = __DIR__ . '/youth_activity_img/'. $filename;
$key = basename($file_Path);
// // $pathInS3 = 'https://s3.ap-south-1.amazonaws.com/' . $bucket . '/' . $key;


try {
$result = $s3Client->putObject([
'Bucket' => $bucket,
'Key'    => 'youth_activity/'.$key,
'Body'   => fopen($file_Path, 'r'),
'ACL'    => 'public-read', // make file 'public'
]);
// echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
} catch (Aws\S3\Exception\S3Exception $e) {
echo "There was an error uploading the file.\n";
echo $e->getMessage();
}


$run=$conn->query("INSERT INTO youth_activity VALUES ( '','$event_name','$time','$date','$description','".$result->get('ObjectURL')."')");


    
// $run = mysqli_query($conn, $query);
if($run){
    echo "<script> alert('Submitted  Successfully...!')
       </script>";
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
 // Close the database connection
 $conn->close();

}
?>
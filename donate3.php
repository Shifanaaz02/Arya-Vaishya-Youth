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
    if (isset($_SESSION['AVID'])) {
        $AVID = $_SESSION['AVID'];
        $name = implode($_SESSION['name']);
        if(isset($_POST['Amount_Qty2'])){
        $Description2 = $_POST['Description2'];
        $Amount_Qty2 = $_POST['Amount_Qty2'];
        $phone2 = $_POST['phone2'];
        $donated_to2 = $_POST['donated_to2'];
        if($donated_to2 === "person"){
            $donated_to_name2 = $_POST['donated_to_name2'];
            $donated_to2 = $donated_to_name2; 
        }
        $sql = "INSERT INTO `donation` (`D_name`, `D_type`, `Description`, `phone`, `photo`, `AVID`, `Amount_Qty`, `donated_to`, `Remaining`, `status`, `date`) VALUES ('$name', 'Money', '$Description2', '$phone2', 'NULL', '$AVID', '$Amount_Qty2', '$donated_to2', 'Something', 'Pending', current_timestamp());";
        if ($conn->query($sql) == true) {
            echo "Successfully inserted";
            echo "<script> alert('Submitted  Successfully...!')
              </script>";
        }
        else {
            echo "ERROR: $sql <br> $conn->error";
        }
        }
        // $D_type = $_POST['D_type'];
        if($_POST['D_type'] !="NULL"){
            $Description = $_POST['Description'];
            $D_type = $_POST['D_type'];
            // $photo = $_POST['photo'];
            $Amount_Qty = $_POST['Amount_Qty'];
            $phone = $_POST['phone'];
            $donated_to = $_POST['donated_to'];
        // }
        
        
        //Check if the form was submitted
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
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
        'Key'    => 'donation/'.$key,
        'Body'   => fopen($file_Path, 'r'),
        'ACL'    => 'public-read', // make file 'public'
        ]);
        // echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
        } catch (Aws\S3\Exception\S3Exception $e) {
        echo "There was an error uploading the file.\n";
        echo $e->getMessage();
        }
        
        if($donated_to === "person"){
            $donated_to_name = $_POST['donated_to_name'];
            $donated_to = $donated_to_name; 
        }

        $sql = "INSERT INTO `donation` (`D_name`, `D_type`, `Description`, `phone`, `photo`, `AVID`, `Amount_Qty`, `donated_to`, `Remaining`, `status`, `date`) VALUES ('$name', '$D_type', '$Description', '$phone', '". $result->get('ObjectURL')."', '$AVID', '$Amount_Qty', '$donated_to', 'Something', 'Pending', current_timestamp());";

        //Execute the query
        if ($conn->query($sql) == true) {
            echo "Successfully inserted";
            echo "<script> alert('Submitted  Successfully...!')
              </script>";
        } else {
            echo "ERROR: $sql <br> $conn->error";
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
    else{
        echo "<script> alert('Do Login first...!')
        </script>";
    }
  // Close the database connection
    $conn->close();
?>

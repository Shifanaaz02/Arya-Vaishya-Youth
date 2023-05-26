<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arya_vaishya_youth";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Could not connect to the database due to the following error -->".mysqli_connect_error());
}


if(isset($_POST['submit'])){
$things = $_POST['things'];
$description = $_POST['description'];
// $photo = $_POST["photo"];

$query="INSERT INTO donation VALUES ( null,'$things','$description')";

$run = mysqli_query($conn, $query);
if($run){
    echo "<script> alert('Submitted  Successfully...!')
    </script>";
}
else{
    echo "failed";
}
}
?>


       
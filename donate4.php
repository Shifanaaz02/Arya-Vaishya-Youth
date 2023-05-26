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


if(isset($_POST['sumbit'])){
$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$blood = $_POST['blood'];


$query="INSERT INTO add_doner VALUES ( null,'$name','$mobile','$blood','$address')";

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
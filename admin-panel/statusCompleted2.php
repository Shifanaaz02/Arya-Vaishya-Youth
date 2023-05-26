<?php
include_once "../db.php";
    $id = $_GET['Support_id'];
    $sql = "update support set Response = 'Completed' where Support_id = '$id'";
    if(mysqli_query($conn,$sql))
    {
        echo "<script> alert('Status Updated to Completed')
            </script>";
            header("refresh:1;url= index.php");
    }
?>
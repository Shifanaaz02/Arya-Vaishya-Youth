<?php
include_once "../db.php";
    $id = $_GET['D_ID'];
    $sql = "update donation set status = 'Pending' where D_ID = '$id'";
    if(mysqli_query($conn,$sql))
    {
        echo "<script> alert('Status Updated to Pending')
            </script>";
            header("refresh:1;url= index.php");
    }
?>
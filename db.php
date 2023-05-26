<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname = "arya_vaishya_youth";
    // $servername="us-cdbr-east-05.cleardb.net";
    // $username="bf558e7de70f9b";
    // $password="3cdc64ea";
    // $dbname = "heroku_0cbdc580a81f254";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_connect_error());
        }
?>

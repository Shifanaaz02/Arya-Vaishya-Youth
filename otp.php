<?php
  session_start();
  include_once "db.php";
  if(isset($_POST['register'])){
    $in_otp = $_POST['inotp'];
   
    
    if($in_otp == $_COOKIE['otp']){
      echo "Success!";
      $_SESSION['mobile'] = $_COOKIE['mobile'];
      header("refresh:1; url = registration.html");

    }else{
      echo "Otp didn't matched!";
      header("refresh:2; url= index.php");
    }
  }else{
    echo "something went wrong!";
    header("refresh:2; url = index.php");
  }
?>
<?php
include_once "db.php";
$AVID3 = mysqli_real_escape_string($conn, $_POST['AVID3']);
$password3 = mysqli_real_escape_string($conn, $_POST['password3']);
$password4 = mysqli_real_escape_string($conn, $_POST['password4']);
$sql3 = mysqli_query($conn, "SELECT * FROM register WHERE AVID = '{$AVID3}'");
if ((mysqli_num_rows($sql3)) > 0) {
    if ($password3 == $password4) {
        mysqli_query($conn, "UPDATE register SET `password`='{$password3}' WHERE AVID='{$AVID3}'");
        echo "<script> alert('Password changed... Do Login')
                </script>";
        header("refresh:1;url= index.php");
    } else {
        echo "<script> alert('Password did not match')
                </script>";
        header("refresh:1;url= index.php");
    }
} else {
    echo "<script> alert('This AVID does not exist... Do register again')
            </script>";
    header("refresh:1;url= index.php");
}
?>
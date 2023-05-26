<?php
use PHPMailer\PHPMailer\PHPMailer;

    // $name = $_POST['name'];
    // $email = $_POST['email'];
    $subject = "Arya Vaishya Youth Login and Password";
    $body = "Hey ".$full_name."..<br>Your AVID : ".$AVID."<br>Your Password : ".$password;
    // $body = "Hey ".$full_name."..<br>Your AVID :".$AVID."<br>Your Password :".$password;

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "aryavaishyayouth1@gmail.com";
    $mail->Password = 'Arya123@';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom("aryavaishyayouth1@gmail.com", "Arya Vaishya Youth");
    $mail->addAddress("$email");
    $mail->Subject = ("$subject");
    $mail->msgHTML($body);
    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
        header("refresh:1; url = index.php");
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
?>
      
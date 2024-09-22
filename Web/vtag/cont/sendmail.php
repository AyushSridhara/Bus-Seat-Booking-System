
<?php
require "../../email/PHPMailer/mail.php";



$first  = $_GET['first'];
$email  = $_GET['email'];
$phone  = $_GET['phone'];
$subject  = $_GET['subject'];
$msg  = $_GET['msg'];






//$subject = "hi sub";

//sendMail($subject, $body, $to,$file );

sendqr($first , $email , $phone , $msg );
header('location :../../contact.php?done');




function sendqr($first , $email , $phone , $msg){


    $to = "ayushsridhara@gmail.com";
   // $file = __DIR__.$img;

    $body ="name :".$first."<br> email : ".$email."<br>phone :".$phone."<br>".$msg;

    $subject = "contact me";

    $file = 0;
    
    sendMail($subject, $body, $to ,$file );
    
    //echo $to;
}
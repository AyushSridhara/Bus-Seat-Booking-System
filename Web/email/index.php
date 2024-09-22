<?php
require "PHPMailer/mail.php";

$subject = "hi sub";
$body ="hi";
$file ="my.png";
/*
$body = "<h1>hi</h1><br><br>
 <img src="img.jpg">;*/ // email with background img
$to = "ayushsridhara@gmail.com";
$file = __DIR__."/my.png";

sendMail($subject, $body, $to,$file );


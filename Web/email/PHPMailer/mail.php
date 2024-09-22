<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once __DIR__.'/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//sendMail($subject, $body, $to)
//sendMail($subject, $body, $to, $file)
function sendMail($subject, $body, $to, $file){
    


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

        //Server settings
        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        $mail->isSMTP();                                        // Set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = "canva952@gmail.com";                 // SMTP username
        $mail->Password = "gsyh ckfr fvsg hcuo";                           // SMTP password
        $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mailuname = "canva952@gmail.com";
        $fromName = "book bus";
        $mail->setFrom($mailuname, $fromName); 

    $mail->addAddress($to);     // Add a recipient    // Name is optional
   
    






    if($file != 0){
           //Attachments
           $mail->addAttachment($file, 'ayush');  
          //Add attachments
    }

 
   














    //Content
    $mail->isHTML(true);     // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $body;


        if ($mail->send()){
           return 1;
       }else  {
           return 0;;
       }

    

}
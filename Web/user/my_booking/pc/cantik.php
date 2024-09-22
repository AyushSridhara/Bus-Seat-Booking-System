<?php
require_once '../../../main/theam/dbconn.php';
require "../../../email/PHPMailer/mail.php";

$tid = $_POST['tid'];
$usid = $_POST['usid'];




$sqlconuid = "SELECT * FROM user WHERE id = '$usid' ";

$uicresult = $conn->query($sqlconuid) ;
$crow = $uicresult->fetch_assoc() ;

//$ID = $crow["ID"];

if ($uicresult->num_rows >0) {

    $email = $crow["email"];
    //echo $email;
}










$sqli = "DELETE FROM book WHERE bid='$tid'";


if($conn->query($sqli) === TRUE){
    sendqr($email);
    echo"done";
    header('location:../../my_booking.php?deldon=1'); 
}else{
//echo $conn->error;
}








function sendqr($email){


  $to = $email;
 // $file = __DIR__.$img;
  $body = "We regret to inform you that your bus ticket has been cancelled as per your request.";
  $subject = "Bus Ticket Cancellation Confirmation";

  $file = 0;
  
  sendMail($subject, $body, $to,$file );
  

}
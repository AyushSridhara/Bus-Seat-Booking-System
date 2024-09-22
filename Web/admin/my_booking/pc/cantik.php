<?php
require_once '../../../main/theam/dbconn.php';
require "../../../email/PHPMailer/mail.php";

$tid = $_POST['tid'];

//echo $tid;
//$Seet_id = "$Seets_id";

//$sqli = "INSERT INTO book (usid,seid , date, time,busid) 
//VALUES ('$uid', '$Seets_id', '$Date', '$Time', '$bus_id')" ;


$sqlconuid = "SELECT * FROM book WHERE bid = '$tid' ";

$uicresult = $conn->query($sqlconuid) ;
$crow = $uicresult->fetch_assoc() ;

//$ID = $crow["ID"];

if ($uicresult->num_rows >0) {

    $usid = $crow["usid"];
    //echo $email;
}






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
   // echo"done";
  header('location:../../booking.php?deldon=1'); 
}else{
//echo $conn->error;
}
















function sendqr($email){


  $to = $email;
 // $file = __DIR__.$img;
  $body = "We are writing to inform you that your bus ticket has been canceled by our administrative team.";
  $subject = "Bus Ticket Cancellation by Admin";

  $file = 0;
  
  sendMail($subject, $body, $to,$file );
  

}
<?php

require_once '../../main/theam/dbconn.php';
require "../../email/PHPMailer/mail.php";

$bus_id = $_POST['tid'];
$usid = $_POST['usid'];


//echo $usid;


/*
* get user email
*/

$sqlconuid = "SELECT * FROM user WHERE id = '$usid' ";

$uicresult = $conn->query($sqlconuid) ;
$crow = $uicresult->fetch_assoc() ;

//$ID = $crow["ID"];

if ($uicresult->num_rows >0) {

    $email = $crow["email"];
    echo $email;
}





$get_set = 1;







$query = "UPDATE book SET get_set='$get_set'
WHERE bid = '$bus_id'";

if( $GLOBALS['conn'] -> query( $query))
{
    sendqr($email);
    header('location:../index.php?bookdone');    
}else{
 
}
















function sendqr($email){


    $to = $email;
   // $file = __DIR__.$img;
    $body = "We are writing to confirm that your bus ticket has been successfully utilized for your recent journey.";
    $subject = "Your Ticket Utilized";

    $file = 0;
    
    sendMail($subject, $body, $to,$file );
    

}
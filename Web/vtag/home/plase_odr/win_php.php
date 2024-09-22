<?php
require_once('../../../msg/lib/send_sms_impl.php');
require_once('../../../include/DBconnection.php'); 





/*
*count sms
*/



$sqlcon = "SELECT * FROM count WHERE field_name = 'sms_count'";
$cresult = mysqli_query($conn, $sqlcon) ;
$crow = mysqli_fetch_assoc($cresult) ;
$sms = $crow["counter"];

//-----------------------







if(isset($_GET['firstname']) ){
    

    $name  = $_GET['firstname'];
    $email  = $_GET['email'];
    $phone  = $_GET['Number'];
    $Type  = $_GET['Type'];
    
   

    oder_vtag($name ,$email ,$phone ,$Type);

    $smsn = $sms + 1;
    sav_con_sms($smsn);

    $msg = $name . ' | ' . $email . ' | ' . $phone .' | ' .$Type;
    send_sms_via_dialog($msg , $smsn);


    header('location : ../../../index.php?oder=done');

}else{

}







/*
* oder function
*/



function oder_vtag($name , $email , $phone ,$Type){

    $sql = "INSERT INTO oder(name,email,phone,Type) VALUES('$name' , '$email','$phone'  ,'$Type')";

    

    if ($GLOBALS['conn']-> query($sql) === TRUE ){
        return 1;
        
    }else{
        return 0;

    }

}



//save new cont
function sav_con_sms($smsn){

    $cupsql = " UPDATE count SET counter=$smsn WHERE field_name = 'sms_count'";

    if($GLOBALS['conn']-> query($cupsql) === TRUE){
        return 1;

    }else{
      //  echo $GLOBALS['conn']->error;
        return 0;

    }


}




/*
*send msg
*/
function send_sms_via_dialog($msg , $tsdid){

    $sendSmsImpl = new SendSMSImpl();
    $tokenBody = new TokenBody();
   
    $tokenBody->setUsername('Son2022');
    $tokenBody->setPassword('Son@2021');
   
    $sendTextBody = new SendTextBody();
   
    $token = $sendSmsImpl->getToken($tokenBody)->getToken();
   
   
   
   
   
   $sendTextBody = new SendTextBody();
   $sendTextBody->setSourceAddress("SL Ayu");
   $sendTextBody->setMsisdn($sendSmsImpl->setMsisdns(array("703205732")));
   $sendTextBody->setTransactionId($tsdid);
   $sendTextBody->setMessage($msg);
   
   $transactionBody = new TransactionBody();
   $transactionBody->setTransactionId($tsdid);
   
   
   $response = $sendSmsImpl->sendText($sendTextBody, $sendSmsImpl->getToken($tokenBody)->getToken())->getData()->getUserId();
  }
  
<?php
require 'lib/send_sms_impl.php';

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


$sms = "hi"; // yana masg eka
$tsdid = "147"; //meka wens wenna ona
send_sms_via_dialog($sms , $tsdid);






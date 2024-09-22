<?php
require_once '../../../main/theam/dbconn.php';


$Time = $_POST['time'];
$Date = $_POST['date'];
//$Seets_id = $_POST['Seet'];
$uid = $_POST['uid'];
$from = $_POST['From'];
$to = $_POST['to'];
$price = $_POST['price'];
$type = $_POST['type'];



//echo $uid;





//echo $uid;
//$Seet_id = "$Seets_id";

$sqli = "INSERT INTO bus (b_from,b_to, date, time,type,price,adid) 
VALUES ('$from', '$to', '$Date', '$Time', '$type', '$price', '$uid')" ;

if($conn->query($sqli) === TRUE){
    echo"done";
header('location:../../bus.php?done=1'); 
}else{
//echo $conn->error;
}

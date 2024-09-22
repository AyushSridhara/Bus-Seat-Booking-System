<?php
require_once '../../../main/theam/dbconn.php';


$Time = $_POST['time'];
$Date = $_POST['date'];
//$Seets_id = $_POST['Seet'];
$bid = $_POST['uid'];
$from = $_POST['From'];
$to = $_POST['to'];
$price = $_POST['price'];
$type = $_POST['type'];


$query = "UPDATE bus SET b_from='$from', 
b_to ='$to',
date ='$Date',
time ='$Time',
type ='$type',
price ='$price'

WHERE id = '$bid'";


// $GLOBALS['conn'] -> query( $result);

if( $GLOBALS['conn'] -> query( $query))
{

//echo 'Data Updated';
header('location:../../bus.php?update');    

}else{
echo 'Data Not Updated';

}
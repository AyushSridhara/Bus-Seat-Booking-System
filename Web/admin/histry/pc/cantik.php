<?php
require_once '../../../main/theam/dbconn.php';

$tid = $_POST['tid'];

//echo $tid;
//$Seet_id = "$Seets_id";

//$sqli = "INSERT INTO book (usid,seid , date, time,busid) 
//VALUES ('$uid', '$Seets_id', '$Date', '$Time', '$bus_id')" ;

$sqli = "DELETE FROM book WHERE bid='$tid'";


if($conn->query($sqli) === TRUE){
   // echo"done";
 header('location:../../histry.php?deldon=1'); 
}else{
//echo $conn->error;
}
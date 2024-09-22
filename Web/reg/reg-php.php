<?php
require_once '../main/theam/dbconn.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
//$Seets_id = $_POST['Seet'];
$num = $_POST['num'];
$type = $_POST['type'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$pass = sha1($pass);
/*
echo $fname;
echo $lname;
echo $num;
echo $type;
echo $email;
echo $pass;
*/

if(isset($_POST['fname'])){


if($type == "Add-Bus"){
    $typ = 1;
}else{
    $typ = 0;
}

//echo $typ;



//echo $uid;
//$Seet_id = "$Seets_id";



$sqli = "INSERT INTO user (firstname,lastname, number, email,pass,type) 
VALUES ('$fname', '$lname', '$num', '$email', '$pass', '$typ')" ;

if($conn->query($sqli) === TRUE){
    echo"done";


    if($typ == 1){
        header('Location: ../admin');
    }else{
        header('Location: ../user');
    }

//header('location:../../bus.php?done=1'); 
}else{
//echo $conn->error;
}
}else{
    header('Location: ../registation.php');
}
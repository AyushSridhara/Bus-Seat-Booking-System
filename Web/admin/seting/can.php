<?php

require_once '../../main/theam/dbconn.php';

$stid = $_POST['stid'];

$opass = $_POST['opass'];


$npass = $_POST['npass'];
$ncpass = $_POST['ncpass'];


//echo $stid;



$sqlcon = "SELECT pass FROM user WHERE id = '$stid' ";

$cresult = $conn->query($sqlcon) ;
$crow = $cresult->fetch_assoc() ;

//$ID = $crow["ID"];

if ($cresult->num_rows >0) {

    $pass = $crow["pass"];
    
}


//echo $pass;
$opass = sha1($opass);

if($pass == $opass){


    $ncpass = sha1($ncpass);   
    $query = "UPDATE user SET pass='$ncpass'
    WHERE id = '$stid'";
    
    
    // $GLOBALS['conn'] -> query( $result);
    
echo $query;

    if( $GLOBALS['conn'] -> query( $query))
    {
    
    //echo 'Data Updated';
          header('location:../seting.php?done');  
    
    }else{
        header('location:../seting.php?wrong'); 
    }

}else{
    header('location:../seting.php?wrong'); 

}
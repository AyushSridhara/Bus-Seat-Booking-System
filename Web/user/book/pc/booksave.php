<?php
require_once '../../../main/theam/dbconn.php';
require_once '../../../main/qr/phpqrcode/qrlib.php';
require "../../../email/PHPMailer/mail.php";


$bus_id = $_POST['buid'];
$Time = $_POST['Time'];
$Date = $_POST['Date'];
$Seets_id = $_POST['Seet'];
$uid = $_POST['uid'];
$from = $_POST['from'];
$to = $_POST['to'];
$price = $_POST['price'];
$type = $_POST['type'];


/*
*get bus id
*/
$sqlcon = "SELECT * FROM bus WHERE id = '$bus_id' ";

$cresult = $conn->query($sqlcon) ;
$crow = $cresult->fetch_assoc() ;

//$ID = $crow["ID"];

if ($cresult->num_rows >0) {

    $adid = $crow["adid"];

}



/*
* get user email
*/

$sqlconuid = "SELECT * FROM user WHERE id = '$uid' ";

$uicresult = $conn->query($sqlconuid) ;
$crow = $uicresult->fetch_assoc() ;

//$ID = $crow["ID"];

if ($uicresult->num_rows >0) {

    $email = $crow["email"];
    //echo $email;
}



/*
*get book id
*/

$sqlconb = "SELECT * FROM count WHERE id = '2' ";

$cresultb = $conn->query($sqlconb) ;
$crow = $cresultb->fetch_assoc() ;

//$ID = $crow["ID"];

if ($cresultb->num_rows >0) {

    $bookid = $crow["counter"];
echo $bookid;
}




//echo $uid;
//$Seet_id = "$Seets_id";

$sqli = "INSERT INTO book (usid,seid , date, time,busid,b_from,b_to,price,type, buusid) 
VALUES ('$uid', '$Seets_id', '$Date', '$Time', '$bus_id', '$from', '$to', '$price','$type','$adid ')" ;

if($conn->query($sqli) === TRUE){
    echo"done";
    update_count_bookid($bookid);
    create_qr($bookid);
    sendqr($bookid ,$email ,$Time ,$Date ,$Seets_id);
    header('location:../../book.php?done=1'); 
}else{
//echo $conn->error;
}





function update_count_bookid($bookid){
    $bookid = $bookid+ 1;
    //echo $bookid;
    $query = "UPDATE count SET counter='$bookid'
    WHERE field_name = 'bus_book_id'";

    if( $GLOBALS['conn'] -> query( $query))
    {
    //echo 'Data Updated';
    //header('location:../../bus.php?update');    
    }else{
   // echo 'Data Not Updated';  
    }
}




function create_qr($bookid){
    $bookid = $bookid + 1;
    $qr_drr = '../../../qrimg/';
    $qr_img = $qr_drr.$bookid.'.png';
    $qr_data = $bookid; //put your data here
    QRcode :: png($qr_data, $qr_img, 'H', 6, 6);
    //echo '<img src="'.$qr_img.'">';
    //print_r($uid);
}







function sendqr($bookid , $email ,$Time , $Date ,$Seets_id){
    $bookid = $bookid + 1 ;
    //$body ="name :".$first."<br> email : ".$email."<br>phone :".$phone."<br>".$msg;
    $img ="../../../qrimg/".$bookid.".png";
    //echo $img;
   // $file = "../../../qrimg/sri.png";
   $file = $img;
    /*
    $body = "<h1>hi</h1><br><br>
     <img src="img.jpg">;*/ // email with background img

    $to = $email;
   // $file = __DIR__.$img;
    $body = "<h3>Booking Hub</h3><br><h4>Your Ticket Details <br><br>Time -".$Time."<br> Date -".$Date."<br>Seat Number- ".$Seets_id."<br><br>Thank You!";
    $subject = "Your Ticket";

    sendMail($subject, $body, $to ,$file);


}
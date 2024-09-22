<?php
//print_r($_POST);
require_once '../../../main/theam/dbconn.php';
require_once '../../../main/qr/phpqrcode/qrlib.php';


$bid =  isset($_POST['buid']) ? $_POST['buid'] : null;
$uid =  isset($_POST['uid']) ? $_POST['uid'] : null;
$date =  isset($_POST['date']) ? $_POST['date'] : null;

/*
$qr_drr = 'img/';
$qr_img = $qr_drr.time().'.png';
$qr_data = 'My QR'; //put your data here
QRcode :: png($qr_data, $qr_img, 'H', 6, 6);
//echo '<img src="'.$qr_img.'">';

//print_r($uid);
*/
?>





<!--<h3 class = "tik_head">Your Ticket</h3> -->
 <h3 class="aline">Your Ticket</h3> <?php
 //print_r($bid); ?>
 
 <img src="../qrimg/<?php print_r($bid); ?>.png" alt="your ticket" width="500" height="500">

 <br><br> 
 <button type="submit" class="btn btn-primary btn-primary btn-block bgcgern" data-dismiss="modal"> OK</span></button>

<style>
.tik_head{
    text-align:center;
    margin-top:-22px;
    padding-bottom:50px;
}

.aline{
    text-align:center;
}


</style>
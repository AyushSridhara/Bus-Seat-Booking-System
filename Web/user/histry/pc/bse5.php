<?php
//print_r($_POST);
require_once '../../../main/theam/dbconn.php';

$bid =  isset($_POST['buid']) ? $_POST['buid'] : null;
$uid =  isset($_POST['uid']) ? $_POST['uid'] : null;
$date =  isset($_POST['date']) ? $_POST['date'] : null;


//print_r($uid);

?>
<!--<h3 class = "tik_head">Your Ticket</h3> -->
<h3 class="aline">Your Ticket</h3> <?php
 //print_r($bid); ?>
 
 <img src="../qrimg/<?php print_r($bid); ?>.png" alt="your ticket" width="500" height="500">

 <h5 class="aline cole">Expired</h5>
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
.cole{
    color:red;
}
</style>
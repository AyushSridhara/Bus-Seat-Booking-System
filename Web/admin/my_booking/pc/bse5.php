<?php
//print_r($_POST);
require_once '../../../main/theam/dbconn.php';

$bid =  isset($_POST['buid']) ? $_POST['buid'] : null;
$uid =  isset($_POST['uid']) ? $_POST['uid'] : null;
$date =  isset($_POST['date']) ? $_POST['date'] : null;


//print_r($uid);

?>
<h3 class = "tik_head">Your Ticket</h3>
 <?php
 print_r($bid);

 ?>
 

<style>
.tik_head{
    text-align:center;
    margin-top:-22px;
    padding-bottom:50px;
}


</style>
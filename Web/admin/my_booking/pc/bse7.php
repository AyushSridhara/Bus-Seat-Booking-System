<?php
require_once '../../../main/theam/dbconn.php';

$buid = $_POST['buid'];  //busid
$uid = $_POST['uid'];   //userid

//echo $buid;
//echo$uid;

?>

<h3 class = "tik_head">Are you sure to cancel Ticket?</h3>
  

<form action="my_booking/pc/cantik.php" method="post" class ="margintop">
  <input type="text" id="tid" name="tid" value="<?php  echo $buid  ?>" class ="hide"><br><br>
  <input type="submit" value="Yes" class="btn btn-danger btn-primary btn-block">
</form> 
<br>

<button type="submit" class="btn btn-danger btn-primary btn-block bgcgern" data-dismiss="modal"> No</span></button>

<style>
.tik_head{
    text-align:center;
    margin-top:-22px;
    padding-bottom:50px;
}
.hide{
    display: none;
}
.margintop{
    margin-top:-70px; 
}

</style>




<style>

.buid{
  display: none;
}

.padding{
    margin-top:0px;
    
}  

.padding2{
    margin-top:-5px;
    
}  
.colwef{
    color:black;
}
.bgcgern{
    background-color:#0097B2;
}

.bgcgern{
    background-color:#0097B2;
}
.bgcgern:hover{
    background-color:#03B2D1;
}

</style>

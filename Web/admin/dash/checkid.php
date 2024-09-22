<br><br>
<?php
require_once '../../main/theam/dbconn.php';

$bid = $_POST['result'];  //grcode
$uid = $_POST['uid'];   //userid

//echo $buid;
//echo$UID;


$sqlconuid = "SELECT * FROM book WHERE bid = '$bid' ";

$uicresult = $conn->query($sqlconuid) ;
$crow = $uicresult->fetch_assoc() ;

//$ID = $crow["ID"];

if ($uicresult->num_rows >0) {

    $bus_uid = $crow["buusid"];
    $dates = $crow["date"];
    $se_id = $crow["seid"];
    $b_from = $crow["b_from"];
    $b_to = $crow["b_to"];
    $time = $crow["time"];   
    $get_set = $crow["get_set"];
    $pesen_id = $crow["usid"];   
    //echo $bus_uid;
}else{
    $bus_uid = 0;
}

$today = date("Y-m-d");

$today = " ".$today." ";

//print_r($today);
//print_r($dates);


if( $bus_uid != 0)
    if( $uid == $bus_uid ){
        if( $get_set == 0){
            if( $dates == $today){
                //echo "done"; 
?>

<div class="form-group padding">
    <label for="exampleInputEmail1">From</label>
    <input type="text" class="form-control colwef" id="Date" name = "Date" aria-describedby="emailHelp" value="<?php  echo $b_from ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">To</label>
    <input type="text" class="form-control colwef" id="Time" name = "Time" aria-describedby="emailHelp" value="<?php  echo $b_to ?> "readonly>
  </div>

  <div class="form-group padding">
    <label for="exampleInputEmail1">Seet ID </label>
    <input type="text" class="form-control colwef" id="Date" name = "Date" aria-describedby="emailHelp" value="<?php  echo $se_id ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Time</label>
    <input type="text" class="form-control colwef" id="Time" name = "Time" aria-describedby="emailHelp" value="<?php  echo $time ?> "readonly>
  </div>


<br>
<form action="dash/se_b_up.php" method="post" class ="margintop">
  <input type="text" id="tid" name="tid" value="<?php  echo $bid  ?>" class ="hide"><br><br>
  <input type="text" id="usid" name="usid" value="<?php  echo $pesen_id  ?>" class ="hide"><br><br>
  <input type="submit" value="Done" class="btn btn-success btn-primary btn-block"> 
</form> 
<br>
<?php
            }else{
                echo "<h3 class = 'tik_head red'>Date Error</h3>";
            } 
        }else{
            echo "<h3 class = 'tik_head red'>Used Ticket </h3>";
        }
    }else{
        echo "<h3 class = 'tik_head red'>Not This Bus</h3>";
    }
else{
    echo "<h3 class = 'tik_head red'>Qr Error</h3>";
}



?>












<!--
<h3 class = "tik_head">Are you shower to Remove bus?</h3>


<form action="#" method="post" class ="margintop">
  <input type="text" id="tid" name="tid" value="<?php  echo $buid  ?>" class ="hide"><br><br>
  <input type="submit" value="Yes" class="btn btn-danger btn-primary btn-block">
</form> 
<br>

-->

<button type="submit" class="btn btn-danger btn-primary btn-block bgcgern" data-dismiss="modal"  onclick=(closebtn())> Cancel</span></button>








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

.red{
    color:red;
}


.displyd{
    font-size:20px;
   
}
















</style>




<style>
.remov{
  display:none;
}





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

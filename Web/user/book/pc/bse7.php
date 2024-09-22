<?php
require_once '../../../main/theam/dbconn.php';

$sheid = $_POST['sheid']; //sheet
$buid = $_POST['buid'];  //busid
$UID = $_POST['UID'];   //userid
$bokdate = $_POST['bokdate']; //datebook


//print_r($sheid); 
//print_r($buid);
//print_r($UID);
//print_r($bokdate);



    
    
    //echo $user_name; 

    $sqlcon = "SELECT * FROM bus WHERE id = '$buid' ";

    $cresult = $conn->query($sqlcon) ;
    $crow = $cresult->fetch_assoc() ;

    //$ID = $crow["ID"];

    if ($cresult->num_rows >0) {

        $time = $crow["time"];
        $from = $crow["b_from"];
        $to = $crow["b_to"];
        $type = $crow["type"];
        $price = $crow["price"];

    }

//echo $time;




?>






 <!--
<form action="/action_page.php" class ="dis-form">
  <label for="Date" class ="dis-form-lab">Date :</label>
  <input type="text" class ="dis-form-inp" id="Date" name="Date" value="<?php  echo $bokdate  ?>" readonly><br>
  
  <label for="Time" class ="dis-form-lab">Time :</label>
  <input type="text" class ="dis-form-inp" id="Time" name="Time" value="<?php  echo $time  ?>" readonly> <br>

  <label for="From" class ="dis-form-lab">From :</label>
  <input type="text" class ="dis-form-inp" id="From" name="From" value="<?php  echo $from  ?>" readonly> <br>
 
  <label for="To" class ="dis-form-lab">To :</label>
  <input type="text" class ="dis-form-inp" id="To" name="To" value="<?php  echo $to  ?>" readonly> <br>

  <label for="Type" class ="dis-form-lab">Type :</label>
  <input type="text" class ="dis-form-inp" id="Type" name="Type" value="<?php  echo $type  ?>" readonly> <br>

  <label for="To" class ="dis-form-lab padinto">To :</label>
  <input type="text" class ="dis-form-inp" id="To" name="To" value="<?php  echo $to  ?>" readonly> <br>

  <label for="Price" class ="dis-form-lab">Price :</label>
  <input type="text" class ="dis-form-inp" id="Price" name="Price" value="<?php  echo $price  ?>" readonly> <br>

  <input type="submit" value="Submit">
</form>

<br>
-->


<form action="book/pc/booksave.php" method="POST">
  <div class="form-group padding">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" class="form-control colwef" id="Date" name = "Date" aria-describedby="emailHelp" value="<?php  echo $bokdate ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Time</label>
    <input type="text" class="form-control colwef" id="Time" name = "Time" aria-describedby="emailHelp" value="<?php  echo $time ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">From</label>
    <input type="text" class="form-control colwef" id="from" name = "from"  aria-describedby="emailHelp" value="<?php  echo $from ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">To</label>
    <input type="text" class="form-control colwef" id="To" name = "To" aria-describedby="emailHelp" value="<?php  echo $to ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control colwef" id="price" name="price" aria-describedby="emailHelp" value="<?php  echo $price ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Type</label>
    <input type="text" class="form-control colwef" id="type" name="type" aria-describedby="emailHelp" value="<?php  echo $type ?> "readonly>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Seet ID</label>
    <input type="text" class="form-control colwef" id="Seet" name = "Seet" aria-describedby="emailHelp" value="<?php  echo $sheid ?> "readonly>
  </div>

  <input type="text" class ="buid" id="buid" name="buid" value="<?php  echo $buid  ?>" readonly>
  <input type="text" class ="buid" id="uid" name="uid" value="<?php  echo $UID  ?>" readonly>
  <input type="text" class ="buid" id="from" name="from" value="<?php  echo $from  ?>" readonly>
  <input type="text" class ="buid" id="to" name="to" value="<?php  echo $to  ?>" readonly>


  <button type="submit" onclick="document.getElementById('conbtnd').style.display = 'none'" id ="conbtnd" class="btn btn-primary btn-block">Comform</button>
</form>


<br>


<style>

.buid{
  display: none;
}

.padding{
    margin-top:-30px;
    
}  

.padding2{
    margin-top:-10px;
    
}  
.colwef{
    color:black;
}


</style>

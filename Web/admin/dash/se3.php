
<?php

$today = date("Y-m-d");
$today = " ".$today." ";




$todybok = 0;
$sql = "SELECT * FROM book WHERE date = '$today' and buusid = '$UID'  ";

$result = $conn->query($sql);

if($result->num_rows >0){

  while ($row = $result->fetch_assoc()) {
          
      $todybok++ ;

  }  
  
}else {

}






 $countp = 0;
  $sql = "SELECT * FROM book WHERE buusid = '$UID' ";

  $result = $conn->query($sql);

if($result->num_rows >0){

    while ($row = $result->fetch_assoc()) {
            
        $countp++ ;

    }  
    
}else {

}



$routs = 0;
  $sql = "SELECT * FROM bus WHERE adid = '$UID' ";

  $result = $conn->query($sql);

if($result->num_rows >0){

    while ($row = $result->fetch_assoc()) {
            
        $routs++ ;

    }  
    
}else {

}


?>












<section class = "secnds2">

    <div class="pro-c2 ">
    <br>  
    
        <div class="pro-b2">
        <!-- <i class='bx bx-code-block'></i>-->
        <h3 class="b bgs2"><?php echo $todybok; ?></h3>
         <p class="bgs sfos2">Today Booking</p>
         <!--<a href="#" class="pbtn">See Projects</a> -->
        </div>

<br>
        <div class="pro-b2">
       <!--  <i class='bx bx-code-block'></i>-->
         <h3 class="b bgs2"><?php echo $countp; ?></h3>
         <p class="bgs sfos2">Total Booking</p>
        <!-- <a href="#" class="pbtn">See Projects</a> -->
        </div>
 
<br>
        <div class="pro-b2">
       <!--  <i class='bx bx-code-block'></i>-->
         <h3 class="b bgs2"><?php echo $routs; ?></h3>
         <p class="bgs sfos2">Total Routes</p>
        <!-- <a href="#" class="pbtn">See Projects</a> -->
        </div>
<br>

     </div>




</section>















<style>


.secnds2{
    padding-top:20px;
    margin-left:320px;
    padding-bottom:20px;
    color:white;
    text-align:center;
    background-color:white;
    background-image: url("img/conbck1.png");
 }

 .sehtext1{
    color:red;
 }

.sehed{
    font-size:40px;
    text-align:center;
    font-weight: bold;
    padding-bottom:50px;
}


.pro-c2 .pro-b2{
    background-color:#1E272E;
    /* header ekn uata gann eka
    position: relative;*/

}

.bgs2{
    background-color:transparent;
    font-size:40px;
    
}


.sfos2{
    font-size:20px;
}



.pro-c2 { 
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    
}

.pro-c2 .pro-b2{
    flex: 1 1 30rem;
    padding: 2rem 2rem 2rem;
    border-radius: 2rem;
    text-align: center;
    border: .2rem rosybrown;
    color: white;
    font-size: 20px;
}
@media (max-width:1150px){
    .secnds2{
        margin-left:280px;
    }

}

/*
@media (max-width:866px){

.secnds2{
        margin-left:10px;
}




.secnds2{
    background-image: url("img/conbck.png");
 }


.secnds{
    
 }


.pro-c2 { 
    display: inline-block;
   /* padding-left:20px;*/
   /* 
}

.pro-b2 { 
    
    
}
}
*/

@media (max-width:866px){


.secnds2{
    margin-left:10px;
    margin-bottom:50px;
    padding-top:10px;
}

.secnds{
    
 }


.pro-c2 { 
    display:block;
   padding-left:45px;
    
}

.pro-b2 { 
    width:90%;
    
}





}



</style>
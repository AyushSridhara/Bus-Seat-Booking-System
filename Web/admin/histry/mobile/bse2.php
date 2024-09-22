<div class="mobilehd">

<br><br><br><br>


<!--

<div class ="boxdisp">
    <div class="foncolse">From -</div> <div class="datancolse"> Anuradhapuraya  </div>
    <div class="foncolse">To - </div> <div class="datancolse">Anuradhapuraya </div>
    <div class="foncolse">Date - </div> <div class="datancolse">2021-01-33  </div>
    <div class="foncolse">Time -</div> <div class="datancolse"> 22.88 PM</div>
    <div class="foncolse">Root - </div> <div class="datancolse">normal </div>  
    <div class="foncolse">Price - </div> <div class="datancolse"> 1222.00</div>
    
     <button type="submit" class="btn btn-primary btn-sm bokmobibt" > Book </button>    
</div>
<br>

<div class ="boxdisp">
    <div class="foncolse">From -</div> <div class="datancolse"> Anuradhapuraya  </div>
    <div class="foncolse">To - </div> <div class="datancolse">Anuradhapuraya </div>
    <div class="foncolse">Date - </div> <div class="datancolse">2021-01-33  </div>
    <div class="foncolse">Time -</div> <div class="datancolse"> 22.88 PM</div>
    <div class="foncolse">Root - </div> <div class="datancolse">normal </div>  
    <div class="foncolse">Price - </div> <div class="datancolse"> 1222.00</div>
    
     <button type="submit" class="btn btn-primary btn-sm bokmobibt" > Book </button>    
</div>
<br>
-->








<?php
//brokers


if (isset($_POST['root'])  ||  isset($_POST['date'])  ||  isset($_POST['mfrom'])  ||  isset($_POST['mto'])  ) {
  

  //echo "Please enter all of the values!";

  $b_from = $_POST['mfrom'];
  $to = $_POST['mto'];
  $date = $_POST['date'];
  $root = $_POST['root'];
  
  $todeaget = date("Y-m-d") ;
/*
  echo  $b_from;
  echo  $to;
  echo  $date;
  echo  $root;*/



/*
*from check
*/

  if($b_from == "All"){
      $fromwge = "";
  }else{
      $fromwge = "and date < ' $todeaget' and b_from = '$b_from'";    
  }

/*
* to check
*/   

  if($to == "All"){
      $tosqlpcsc = "";
  }else{
          $tosqlpcsc = "and b_to = '$to'";
  }


/*
* date check
*/   

if($date == ""){
  $datesqlpcsc = "WHERE date < ' $todeaget' and buusid = '$UID'";
}else{
      $datesqlpcsc = "WHERE date = ' $date' or date = 'daily' and buusid = '$UID' ";
}



/*
* root check
*/   

if($root == "all"){
  $rootsqlpcsc = "";
}else{
      $rootsqlpcsc = "and type = '$root'";
}






  $sql = "SELECT * FROM book $datesqlpcsc $fromwge $tosqlpcsc  $rootsqlpcsc";
 //echo $sql;




}else{
  $todeaget = date("Y-m-d") ;

  $sql = "SELECT * FROM book WHERE date < ' $todeaget' and buusid = '$UID'";


}

























$countp = 0;



 

  $result = $conn->query($sql);

if($result->num_rows >0){
        while ($row = $result->fetch_assoc()) {
            
                $countp++ ;


                
                echo '<div class ="boxdisp">';
                    echo '<div class="foncolse">From -</div> <div class="datancolse">' . $row["b_from"] . '</div>';
                    echo '<div class="foncolse">To - </div> <div class="datancolse">'. $row["b_to"] .'</div>';
                    if($row["date"] == 'Daily'){
                     
                      echo '<div class="foncolse">Date - </div> <div class="datancolse" style="color:red;">'. $row["date"] . '</div>';
                    }else{
                      echo '<div class="foncolse">Date - </div> <div class="datancolse">'. $row["date"] . '</div>';
                    }
                    
                    echo '<div class="foncolse">Time -</div> <div class="datancolse">'. $row["time"] . ' </div>';
                    echo '<div class="foncolse">Root - </div> <div class="datancolse">'. $row["type"] . '</div> '; 
                    echo '<div class="foncolse">Price - </div> <div class="datancolse">Rs.' . $row["price"] . '</div>';
                    
                 // echo '  <button type="submit" class="btn btn-primary btn-sm bokmobibt" > Book </button> ';
                  echo "<button  class='btn btn-primary btn-sm bokmobibt backred' data-toggle='modal' data-target='#myModal'  onclick=(remove(this.id))   id = '".$row["bid"]."'>Delete</button>" ;
                //  echo "<button  class='btn btn-primary btn-sm bokmobibt' data-toggle='modal' data-target='#myModal'  onclick=(editproduct(this.id))   id = '".$row["bid"]."'>View</button>" ;
                  echo '</div>';

                echo '<br>';
                
             /*
                <!--<button onclick=(editproduct(this.id))  class='btn btn-primary btn-sm btn-sme ' data-toggle='modal' data-target='#editprocuct' id = ''>Book</button>
                <a class='btn btn-primary btn-sm' href=''>Edit</a>  --> */
                
                
                    
               
                
            


           
            
           
        }  echo '<br> <br><br>';
        }else {
           // echo '<div class="alert alert-secondary">';
            echo '<strong>'.ucfirst('no recound').'!<strong>';
          //  echo '</div>';

        }


        ;?>























</div>




<style>

.boxdisp{
  background-color: #91B6FF;
  width: 90%;
  border-radius:15px;
  border: 1px solid black;
  padding: 10px;
  margin: 20px;
  font-size:20px;
  font-family: "Noto Sans", sans-serif;
  
}
.bokmobibt{
    float: right;
    padding-right:30px;
    padding-left:30px;
    background-color:#47A44B;
    
}


.foncolse{
    color:black;
    float: left;
}
.datancolse{
    margin-left:80px;
    font-family: "Lucida Console", "Courier New", monospace;
    
}
.backred{
  background-color:#D14D4D;
}

</style>
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

//echo "hi";













$countp = 0;


echo '<div class ="boxdisp2">';
 

  $result = $conn->query($sql);

if($result->num_rows >0){
        while ($row = $result->fetch_assoc()) {
            
                $countp++ ;

               
                
                echo '<div class ="boxdisp1">';
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
                  echo "<a href='user/book.php' ><button  class='btn btn-primary btn-sm bokmobibt'>Book</button></a>" ;
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

echo '</div>';
        ?>






















</div>




<style>
.boxdisp2{
   display:none;
}


.boxdisp1{
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
    background-color:green;
    border: 2px solid black;
}


.foncolse{
    color:black;
    float: left;
}
.datancolse{
    margin-left:80px;
    font-family: "Lucida Console", "Courier New", monospace;
    
}


@media screen and (max-width: 1000px) {

.boxdisp2{
  display:block;
}

}

</style>
<?php
  Print($UID); 



  $sqlcon = "SELECT * FROM user WHERE id = '$UID' ";

  $cresult = $conn->query($sqlcon) ;
  $crow = $cresult->fetch_assoc() ;

  //$ID = $crow["ID"];

  if ($cresult->num_rows >0) {

      $fname = $crow["firstname"];
      $lname = $crow["lastname"];
      $email = $crow["email"];
      $num = $crow["number"];
      

  }

?>





<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<br><br>


<div class="sealc" >
    

    <form action="vtag/cont/sendmail.php" class="withfm7">
                    
                          
                          <div class="w3-row w3-section">
                            
                              <div class="w3-rest">
                                
                                <label for="disabledTextInput" class="colorhgt">Email :</label>
                                <input class="w3-input w3-border" name="first" type="text" placeholder="Email" value="<?php echo $email ?>" required readonly>
                              </div>
                          </div>


                          <div class="w3-row w3-section fwith">
                            
                              <div class="w3-rest">
                              <label for="disabledTextInput" class="colorhgt">First Name :</label>
                                <input class="w3-input w3-border" name="fname" type="text" placeholder="First Name" value="<?php echo $fname ?>" required  readonly>
                              </div>
                          </div>



                          <div class="w3-row w3-section">
                            
                            <div class="w3-rest">
                            <label for="disabledTextInput" class="colorhgt">Last Name :</label>
                              <input class="w3-input w3-border" name="lname" type="text" placeholder="Last Name :" value="<?php echo $lname ?>" required readonly>
                            </div>
                        </div>

                        <div class="w3-row w3-section">
                            
                            <div class="w3-rest">
                            <label for="disabledTextInput" class="colorhgt">Number :</label>
                              <input class="w3-input w3-border clasp" name="phone" type="text" placeholder="Phone" value="<?php echo $num ?>" required readonly>
                            </div>
                        </div>

                      <!--    <button class="w3-button w3-block w3-section w3-ripple w3-padding colorbt">Edit</button> -->

  </form>

</div>






<style>
.colorhgt{
  color:gray;
}



.colorbt{
  background-color:#50B0FF;
  color:white;
}

.withfm7{
  width: 100%;
 
  
}

.sealc{
  width: 75%;
  padding-left:40%;
}



@media (max-width:750px){
.sealc{
  width: 90%;
  padding-left:2%;
}

}


</style>

































<style>
.with{
  width: 100%;
}



</style>
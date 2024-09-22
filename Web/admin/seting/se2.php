<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<br><br><br><br>


<div class="sealc die7" >
    

    <form action="seting/can.php" method="post" class="withfm7">
                    
    <h2 class="w3-center color">Change Password</h2>
                          <div class="w3-row w3-section">
                            
                              <div class="w3-rest">
                                
                              <!--  <label for="disabledTextInput">Old Passwoard :</label> -->
                                <input class="w3-input w3-border" name="opass" type="password" placeholder="Old Passwoard " required>
                              </div>
                          </div>
                          <?php
if(isset($_GET['wrong'])){
    
    $done = $_GET['wrong'];
echo  '<div class="field epchrb" ><p class="passche">Incorrect Passwoard</P></div>';
}
?>



                          <div class="w3-row w3-section fwith">
                            
                              <div class="w3-rest">
                             <!-- <label for="disabledTextInput">New Passwoard :</label> -->
                                <input class="w3-input w3-border" name="npass" type="password" id = "pass" placeholder="New Passwoard"required >
                              </div>
                          </div>



                          <div class="w3-row w3-section">
                            
                            <div class="w3-rest">
                            <!--<label for="disabledTextInput">New Passwoard Conform :</label>-->
                              <input class="w3-input w3-border" name="ncpass" type="password" id ="cpass" placeholder="New Passwoard Confirm" required>
                            </div>
                        </div>
                                      <div class="field epchrb d-none" id = "pass11">
                                      <p class="passche">Password did not match</P>
                              </div>

                              <input class="w3-input w3-border disnon" name="stid" type="password"  value="<?php echo $UID ?>" placeholder="New Passwoard Confirm" required>

                          <button class="w3-button w3-block w3-section w3-ripple w3-padding colorbt" id ="singnupbtn">Change Password</button>

  </form>

</div>




<style>
.sidebar .setd {
    color:#92CAF6;
}
.passche{
  color:red;
}

.disnon{
  display:none;
}

.die7{
    margin-top:-90px;
}

.color{
  color:black;
  font-family: Verdana;
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

.with{
  width: 100%;
}


@media (max-width:750px){
.sealc{
  width: 90%;
  padding-left:2%;
}

}




</style>












<script> 

$(document).ready(function(){


  $("#cpass").keyup(function(){
        //alert("yes");
        const cpass = $("#cpass").val();
        const pass = $("#pass").val();
        //console.log(pass);
        //alert(pass);

        if(cpass != pass){
            $("#pass11").removeClass("d-none");
            $('#singnupbtn').attr("disabled", "disabled");
        }else{
            $("#pass11").addClass("d-none");
            $("#singnupbtn").removeAttr('disabled');
        }

/*
              if(Number(data) == 1){
               //console.log(data);
               // alert("yes");
                $("#emailh").removeClass("d-none");
                $("#singupbtn").attr("disabled","disabled");
              }else{
                //alert("yes");
                //console.log(data);
                $("#emailh").addClass("d-none");
                $("#singupbtn").removeAttr('disabled');
              }

   */     
    });










  });

</script>

<br><br>
<br><br>

<br><br>




    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100 paddmyad">
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
           <div class="featured-image mb-3">
            <img src="reg/1.png" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;"> Experience the difference with our expert designers.</small>
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Hello,WelCome </h2>
                     <p>We are happy to have you.</p>
                </div>
                <form action="reg/reg-php.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" name="fname" id="fname" placeholder="First Name" required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" name="lname" id="lname" placeholder="Last Name" required>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control form-control-lg bg-light fs-6" name="num" id="num" placeholder="Phone Number" required>
                </div>
                <div class="input-group mb-3">
                    <select type="text" class="form-control form-control-lg bg-light fs-6" name="type" id="type" required>
                            <option value=""></option>
                            <option value="For-Book">For Book</option>
                            <option value="Add-Bus">Add Bus</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control form-control-lg bg-light fs-6" name="email" id="email" placeholder="Email address" required>
                     
                </div>

                <div class="field epchrb d-none" id = "emailh">
                        <p class="passche">Email is exist </P>
                </div>


                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" name="pass" id="pass" placeholder="Password" required>
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" name="cpass" id="cpass" placeholder="Confirm Password" required>
                </div>
                <div class="field epchrb d-none" id = "pass11">
                        <p class="passche">Password did not match</P>
                </div>
               <!-- <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                    </div>
                    <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                    </div> 
                </div>-->
                <div class="input-group mb-3"><br>
                    <button class="btn btn-lg btn-primary w-100 fs-6" id ="singnupbtn">Register</button>
                </div></form> 
            <!--    <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                </div> -->
                <div class="row">
                    <small>Do You have account? <a href="login1.php" >Login</a></small>
                </div>
          </div>
       </div> 
      </div>
    </div>







<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
body{
    font-family: 'Poppins', sans-serif;
    background: #ececec;
}


.passche{
    color:red;
}
/*------------ Login container ------------*/
.box-area{
    width: 930px;
}
/*------------ Right box ------------*/
.right-box{
    padding: 40px 30px 40px 40px;
}
/*------------ Custom Placeholder ------------*/
::placeholder{
    font-size: 16px;
}
.rounded-4{
    border-radius: 20px;
}
.rounded-5{
    border-radius: 30px;
}
/*------------ For small screens------------*/
@media only screen and (max-width: 768px){
     .box-area{
        margin: 0 10px;
     }
     .left-box{
        height: 100px;
        overflow: hidden;
     }
     .right-box{
        padding: 20px;
        
     }
/*
     .paddmyad{
        margin-left:-100px;
     }

*/

}
</style>







<script> 

$(document).ready(function(){

    //email cpmform
    //alert("yes");

    $("#email").keyup(function(){
        //alert("yes");
        const email = $("#email").val();
        //console.log(email);

        $.post("reg/regsem.php",
        {
          email : email

        },
        function(data, status){
         console.log(status);
          if(status == 'success'){

              if(Number(data) == 1){
               //console.log(data);
               // alert("yes");
                $("#emailh").removeClass("d-none");
                $("#singnupbtn").attr("disabled","disabled");
              }else{
                //alert("yes");
                //console.log(data);
                $("#emailh").addClass("d-none");
                $("#singnupbtn").removeAttr('disabled');
              }

          }else{
            $("#emailh").addClass("d-none");
            $("#singnupbtn").removeAttr('disabled');
          }
        });
    });











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
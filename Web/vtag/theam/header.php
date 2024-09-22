
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="vtag/img/icn.png" type="vtag/img/icon type">
    <title>Booking-Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/946cd76a4d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--animaction--->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    

    <!-- Latest compiled and minified CSS -->

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">


<header>
  <nav>
    <div class="navbar text-center">
      
       
     <div class="logo1"><a class="logo" href="index.php"><text class="first" ><img src="vtag/img/logo.png" alt="Logo"></a></div>
      <div class="nav-links">
        

        <ul class="links">
          <li><a href="index.php" class="home">HOME</a></li>
          <li><a href="about.php" class="about">ABOUT</a>
          <!-- <i class="fa fa-caret-down arrow htmlcss-arrow"></i>
           
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Software Development</a></li>
              <li><a href="#">Solutions</a></li>
            </ul>  

          </li> -->
          <li><a href="time.php" class="btime">BUS TIME</a></li>
          <li><a href="contact.php" class="conte">CONTACT </a></li>
          <li><a href="login1.php"><i class="fa-solid fa-user"></i> LOGIN</a></li>
        </ul>      
     </div>
     <i class="fa-solid fa-bars" id="close"  ></i>
     <i class="fa-solid fa-xmark" id="close1"></i>
    </div>
  </nav>
 
</header>











<script>
$(document).ready(function(){
    $("#close").click(function(){
        $(this).hide();
        $("#close1").show();
    });
});

$(document).ready(function(){
    $("#close1").click(function(){
        $(this).hide();
        $("#close").show();
    });
});


// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .fa-bars");
let menuCloseBtn = document.querySelector(" .fa-xmark");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
/*
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}

let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}
*/


</script>







<style>



header{
    width: 100%;
    position: fixed;
    z-index: 3;
}

/*....google font  link....*/
@import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap');


*{
    margin: 0px;
    box-sizing: border-box;
    padding: 0;
    
}



.logo1{  
    font-family: 'Source Sans Pro', sans-serif;
   
    padding: 10px;
    padding-left:10% ;
}

.logo{
    color: aliceblue;
    text-decoration: none;
    font-size: 35px;   
}

.logo img {
  width: 120px;
}



.fa-xmark,
.fa-bars{
    display:none ;
   }

 .fa-xmark:hover,
 .fa-bars:hover{
    color: black ;
    }


/* boder yata iara */
nav{
    background-color:white;
    box-shadow:  0 1.5px 10px #1346DE;

}

nav .navbar{
    height: 100%;
    max-width:5px%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px;

}


nav .navbar .nav-links{
    height: 100%;
    }

nav .navbar .nav-links .links{
    display: flex;
}

nav .navbar .nav-links .links li {
    list-style: none;
    position: relative;
    display: flex;
    align-items: center;
    list-style: none;
    padding: 0 25px;
}

nav .navbar .nav-links .links li a{
    height: 100%;
    text-decoration: none;
    white-space: nowrap;
    color: black;
    font-size: 20px;
    font-family: sans-serif;
    padding-top: 15px;
    transform: all 0.3s ease;

    
}
/*header eke pata mouse eka lagata genichcama*/

nav .navbar .nav-links .links li a:hover{
    color: blue;
  /*  .active, .btn:hover {
  background-color: #666;
  color: white;
  color: #F90315;
}*/
}




nav .navbar .nav-links .links li .arrow{
    
    height: 100%;
    width: 22px;
    text-align: center;
    color: white;
    line-height: 50px;
    transform: all 0.3s ease;
}

.navbar .nav-links .links li:hover .htmlcss-arrow{
    transform: rotate(180deg);
}

.navbar .nav-links .links .sub-menu{
    position: absolute;
    top: 40px;
    left: 10px;
    background: black;
    height: 145px;
    border-radius: 0 0 4px 4px;
    box-shadow:  0 1px 1px rgba(0, 0 , 0, 2);
    display: none;
}

.navbar .nav-links .links .sub-menu li{
    padding: 0 22px;
}

.navbar .nav-links .links .sub-menu li a {
    font-size: 18px;
    font-family: sans-serif;
    font: 500;
}

.navbar .nav-links .links li:hover .htmlCss-sub-menu {
    display: block;
}






/*mobile res ponsive*/

@media (max-width:1030px) {

    .logo img {
         width: 100px;
    }

    .logo{
        font-size: 26px;
    }

    nav .navbar{
        max-width: 100%;
        padding: 0 10px;
    
        
    }

    nav .navbar .nav-links .links li a{
        font-size: 20px;
    }

    nav .navbar .nav-links{
        display: block;
        position: fixed;
        background: white;
        top:58px;
        left:-100%;
        max-width: 270px;
        width: 100%;
        transition: all 0.5s ease;
        font-size: 60px;
        box-shadow: 2px 5px black;

    }

   nav .navbar .nav-links .links{
        display: block;
        margin-top: 10px;
        margin-left: 10px;
        
   }

   .fa-bars{
    display: flex;
    font-size: 30px;
    color: black;
   }

   .fa-xmark{
    
    font-size: 30px;
    color: black;
   }

   nav .navbar .nav-links .links li{
    display: block;
    border-bottom: none;
    
   }

   .navbar .nav-links .links .sub-menu{
    position: relative;
    background-color: none;
    top :8px;
    left: 0;
    box-shadow: none;
}
.navbar .nav-links .links .sub-menu li{
    border-bottom: none;
    font-size: 30px;

}
/*--Drop Down Box-----*/

.navbar .nav-links .links .sub-menu li a{
    font-size: 20px;
    
}
.fa-caret-down:before {
    font-size: 30px;
}




}




</style>
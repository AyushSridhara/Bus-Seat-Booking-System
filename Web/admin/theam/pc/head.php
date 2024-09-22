
<?php /*
    session_start();
    if(!isset($_SESSION['UID'])){
      header('location: ../index.php');
    } 
    */
    ?>

<!--
<!DOCTYPE html>
    <html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ayu Creation</title>
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
         
        <script src="https://kit.fontawesome.com/f00a31d467.js" crossorigin="anonymous"></script>
        
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <title>ayu</title>
    </head>
    <body>



    ===-->








<section class="headerss nonepc">

  <div class="welcome">
    <i class="fa-solid fa-user pro" style="color:black;"></i>
    Welcome <?php echo  $_SESSION['uname']?> !
  </div>

  <div class="logut">
    <a href="logout.php"   class="abm"> LOGOUT <i class="fa-solid fa-right-from-bracket" style="font-size:20px;color:black;"></i> </a>
  <div>

</section>



<style>


.headerss {
   
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #557BED;
    overflow-x: hidden;
    padding-top: 10px;
    padding-bottom: 10px;
    
}

.logut{
  text-align: right;
  font-size:20px;
  color:#112942;
  font-family: Consolas;
  
}
.welcome{
  margin-left:400px;
  text-align: right;
  font-size:20px;
  color:#112942;
  font-family: Consola;
  float: left;
  font-weight: bold;
}


.abm{
  color:black; 
  padding-right: 30px;
  text-decoration: none;
  font-size: 20px;
  font-family: arial ,"Helvetica Neue",Helvetica, sans-serif ;
  padding-left: 30px;
}


.abm:hover{
  color:#454F5B; 
  padding-right: 33px;
}



.abm i {
  padding-left: 5px;
}



@media screen and (max-width: 1000px) {

  .welcome{
     margin-left:300px;
  }

}














</style>
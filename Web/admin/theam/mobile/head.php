<?php 
    session_start();
    if(!isset($_SESSION['UID'])){
      header('location: ../index.php');
    } else{
      if($_SESSION['type'] == 1){
        $UID = $_SESSION['UID'];
      }else{
        header('location: ../index.php');
      }
      

    }
    ?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <title>Booking Hub</title>
        <!-- Latest compiled and minified CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
         <!-- icon -->
        <script src="https://kit.fontawesome.com/f00a31d467.js" crossorigin="anonymous"></script>
        
        <!-- boostretrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="icon"  href="../vtag/img/icn.png" type="vtag/img/icon type">
        <title>ayu</title>
    </head>
    <body>

        <header class="header mobilehead" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo"> <i class="fa-solid fa-user" style="color:black;"></i> Welcome <?php echo  $_SESSION['uname']?> !</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link mdash">
                                <i class="fa-solid fa-gauge nav__icon "></i>
                                <span class="nav__name mdash">Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="bus.php" class="nav__link bookdm">
                                <i class="fa-solid fa-bus nav__icon"></i>
                                <span class="nav__name bookdm">bus</span>
                            </a>
                        </li>

                        

                        <li class="nav__item">
                            <a href="booking.php" class="nav__link booikmd">
                                <i class="fa-solid fa-bookmark nav__icon"></i></i>
                                <span class="nav__name booikmd">Booking</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="histry.php" class="nav__link hismd">
                                <i class="fa-solid fa-clock-rotate-left nav__icon"></i>
                                <span class="nav__name hismd">History</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="seting.php" class="nav__link setmd">
                                <i class="fa-solid fa-gear nav__icon"></i>
                                <span class="nav__name setmd">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <a href="logout.php" class="bacfonco" > LOGOUT <i class="fa-solid fa-right-from-bracket " style="font-size:20px;color:black;"></i> </a>
            </nav>
        </header>




        
<style>


/*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");

/*=============== VARIABLES CSS ===============*/
:root {
  --header-height: 3rem;

  /*========== Colors ==========*/
  --hue: 174;
  --sat: 63%;
  --first-color: #485BFE;
  --first-color-alt: hsl(var(--hue), var(--sat), 36%);
  --title-color: hsl(var(--hue), 12%, 15%);
  --text-color: hsl(var(--hue), 8%, 35%);
  --body-color: hsl(var(--hue), 100%, 99%);
  --container-color: #FFF;

  /*========== Font and typography ==========*/
  --body-font: 'Open Sans', sans-serif;
  --h1-font-size: 1.5rem;
  --normal-font-size: .938rem;
  --tiny-font-size: .625rem;

  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

@media screen and (min-width: 968px) {
  :root {
    --h1-font-size: 2.25rem;
    --normal-font-size: 1rem;
  }
}

/*=============== BASE ===============*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

html {
  scroll-behavior: smooth;
}



ul {
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*=============== REUSABLE CSS CLASSES ===============*/
.section {
  padding: 4.5rem 0 2rem;
}

.section__title {
  font-size: var(--h1-font-size);
  color: var(--title-color);
  text-align: center;
  margin-bottom: 1.5rem;
}

.section__height {
  height: 100vh;
}

/*=============== LAYOUT ===============*/
.container {
  max-width: 968px;
  margin-left: 1rem;
  margin-right: 3rem;
}

/*=============== HEADER ===============*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--container-color);
  z-index: var(--z-fixed);
  transition: .4s;
}

/*=============== NAV ===============*/
.nav {
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav__img {
  width: 32px;
  border-radius: 50%;
}

.nav__logo {
  color: var(--title-color);
  font-weight: 600;
}






















@media screen and (max-width: 867px) {
  .nav__menu {
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: var(--container-color);
    box-shadow: 0 -1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
    width: 100%;
    height: 4rem;
    padding: 0 0rem;
    display: grid;
    align-content: center;
    border-radius: 1.25rem 1.25rem 0 0;
    transition: .4s;
  }
}

.nav__list, 
.nav__link {
  display: flex;
}

.nav__link {
  flex-direction: column;
  align-items: center;
  row-gap: 4px;
  color: var(--title-color);
  font-weight: 600;
}

.nav__list {
  justify-content: space-around;
}

.nav__name {
  font-size: var(--tiny-font-size);
  /* display: none;*/ /* Minimalist design, hidden labels */
}

.nav__icon {
  font-size: 1.5rem;
}

/*Active link*/
.active-link {
  position: relative;
  color: var(--first-color);
  transition: .3s;
}

/* Minimalist design, active link */
/* .active-link::before{
  content: '';
  position: absolute;
  bottom: -.5rem;
  width: 4px;
  height: 4px;
  background-color: var(--first-color);
  border-radius: 50%;
} */

/* Change background header */
.scroll-header {
  box-shadow: 0 1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
}

/*=============== MEDIA QUERIES ===============*/
/* For small devices */
/* Remove if you choose, the minimalist design */
@media screen and (max-width: 320px) {
  .nav__name {
    display: none;
  }
}

/* For medium devices */
@media screen and (min-width: 576px) {
  .nav__list {
    justify-content: center;
    column-gap: 3rem;
  }
}

























@media screen and (min-width: 867px) {
  body {
    margin: 0;
  }
  .section {
    padding: 7rem 0 2rem;
  }
  .nav {
    height: calc(var(--header-height) + 1.5rem); /* 4.5rem */
  }
  .nav__img {
    display: none;
  }
  .nav__icon {
    display: none;
  }
  .nav__name {
    font-size: var(--normal-font-size);
    /* display: block; */ /* Minimalist design, visible labels */
  }
  .nav__link:hover {
    color: var(--first-color);
  }

  /* First design, remove if you choose the minimalist design */
  .active-link::before {
    content: '';
    position: absolute;
    bottom: -.75rem;
    width: 4px;
    height: 4px;
    background-color: var(--first-color);
    border-radius: 50%;
  }

  /* Minimalist design */
  /* .active-link::before{
      bottom: -.75rem;
  } */
}

/* For large devices */
@media screen and (min-width: 1024px) {
  .container {
    margin-left: auto;
    margin-right: auto;
    background-color:red;
  }
}

.header {
    background-color:#80C5F3;
}


.bacfonco{
  color:black;
  margin-right:-30px;
}


.mdash{
  color:black;
}

</style>













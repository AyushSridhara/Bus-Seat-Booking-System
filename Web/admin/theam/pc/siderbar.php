

<div class="sidebarhead nonepc">
  <a href="#"></i>Code Mind Solution</a>
</div>

<div class="sidebar nonepc">

   
 
  <a href="index.php" class="paddingtop dash"><i class="fa-solid fa-gauge icco dash"></i> Dashboard</a>
  <a href="bus.php" class ="bookd"><i class="fa-solid fa-bus icco bookd"></i> Bus</a>
  <a href="booking.php" class ="mybookd"><i class="fa-solid fa-bookmark icco mybookd"></i></i> Booking</a>
  <a href="histry.php"  class ="hsid"><i class="fa-solid fa-clock-rotate-left icco hsid"></i> History </a>

   <!--
  <a href="#contact"><i class="fa-solid fa-arrows-down-to-line"></i> Return Orders</a>
  <a href="#contact"><i class="fa-solid fa-boxes-stacked"></i> Received Orders</a>
  <a href="../stock_page/st1"><i class="fa-solid fa-table-columns"></i> Stocks</a>
  <a href="#contact"><i class="fa-solid fa-chart-simple"></i> Report</a>
  -->

  <a href="seting.php" class ="setd"><i class="fa-solid fa-gear icco setd"></i> Settings</a>
  <!-- <a href="#contact"><i class="fa-solid fa-address-card"></i> Contact Us</a> -->
   
</div>


<style>

.sidebarhead {
  height: 50px;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0649A2;
  overflow-x: hidden;
  padding-top: 16px;
}


.sidebarhead a {
  font-family: sans-serif;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  color: #FFFFFF;
  display: block;
}

.icco{
    color:#B2B2B2;
}

.sidebar {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 52px;
  left: 0;
  background-color: #272D34;
  overflow-x: hidden;
  padding-top: 16px;
}
.paddingtop{
  margin-top:30px;
}

.sidebar a {
  padding: 40px 20px 10px 35px;
  text-decoration: none;
  font-size: 25px;
  color: #BFBFBF;
  display: block;
}

.sidebar a i {
  padding-right:  10px;
  font-size: 30px;
}


.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}



@media screen and (max-width: 1150px) {

.sidebar {
    width: 250px;
}

.sidebarhead {
  width: 250px;
}




}












</style>
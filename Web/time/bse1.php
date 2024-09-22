
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
      $fromwge = "and date > '$todeaget' and b_from = '$b_from'";    
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
  $datesqlpcsc = "WHERE date > '$todeaget'";
}else{
      $datesqlpcsc = "WHERE date = '$date' or date = 'daily' ";
}



/*
* root check
*/   

if($root == "all"){
  $rootsqlpcsc = "";
}else{
      $rootsqlpcsc = "and type = '$root'";
}






  $sql = "SELECT * FROM bus $datesqlpcsc $fromwge $tosqlpcsc  $rootsqlpcsc";
 //echo $sql;




}else{

  $sql = "SELECT * FROM bus ";


}


?>






















<div class="mobilehd filtem ">

<div class="bgcol">

    <div class="leftget ">
        <i class="fa-solid fa-ticket nav__icon" style="font-size:15px;color:black;"> BOOK NOW</i>
    </div>


    <div class="alingfil ">
        <a href="#"   class="filter" onclick="openNav()"> <i class="fa-solid fa-filter" style="font-size:15px;color:black;"> Filter </i> </a>
    </div>



</div>











<div id="mySidenav" class="sidenav">

<div class="msen">
<h5 class ="sealter">Search Filter</h5>
</div>




<form action="time.php" method="post" class="mform">

 

        <label for="uname" class="padiscr" ><b>From -</b></label> <br>
        <select id="mfrom" name ="mfrom"  class="moselbox " fromgetsrmo()>
        <!-- Dropdown List Option -->
        </select>






        <br><label for="uname" class="padiscr" ><b>To -</b></label><br>
        <select id="mto" name= "mto" class="moselbox "  >
        <!-- Dropdown List Option -->
        </select>











<br><label for="uname" class="padiscr"><b>Date -</b></label><br>
<input type="date" placeholder="date" name="date" class="moselbox  "><br>


        <label for="uname"  class="padiscr"><b>Root -</b></label><br>
        <select name="root" id="root" class="moselbox "  ><br>
            
            <option value="all">All</option>
            <option value="Normal">Normal</option>
            <option value="Highway ">Highway </option>
        </select>


        <div class ="msen">
        <button type="submit" class="btn btn-primary btn-sm btnse"  onclick="closeNav()" >Clear All</button> 
            <button type="submit" class="btn btn-primary btn-sm btnse" > Apply</button>
        </div>
    </form>
    <div class ="alinsen">
   <!-- <a href ="time.php"><button type="submit" class="btn btn-primary btn-sm btnse btnsemy"  onclick="closeNav()" ><h6>Clear All<h6></button> </a>-->
</div>


<!--
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>

-->
</div>



</div>





<script type="text/javascript">


			$(document).ready(function() {
				var city = [ "All","Ampara","Anuradhapura","Badulla","Balangoda","Batticaloa","Chavakachcheri","Chilaw",
                                    "Colombo","Dambulla", "Eravur", "Galle","Hambantota","Jaffna","Kalmunai", "Kandy", "Kattankudy",
                                    "Kilinochchi", "Kinniya", "Kurunegala", "Mannar", "Matale", "Matara", "Mullaitivu", "Negombo", "Point Pedro",
                                    "Polonnaruwa", "Puttalam", "Ratnapura", "Trincomalee",  "Valvettithurai", "Vavuniya", "Wattala", "Ambalangoda", "Beruwala",
                                    "Hikkaduwa", "Nuwara Eliya", "Weligama", "Kegalle","Kalutara", "Moratuwa", "Panadura", "Ja-Ela", "Gampola",
                                    "Horana", "Nawalapitiya", "Tangalle","Anamaduwa", "Kurunegala", "Dambulla", "Kalpitiya", "Chilaw","Kattankudy",];
				$("#mfrom" ).select2({
				  data: city
				});
                
                $("#mto").select2({
				  data: city
				});

			});


</script>













<style>




.filtem{
  display:none;
}

.padiscr{
    margin-left:-90px;
    padding-top:10px;
}

.mform{
    margin-top:15px;
    text-align:center;
}
.msen{
    text-align:center;
}

.moselbox{
        width:170px;
}


.filtem{
    margin-top:6px;
    width: 100%;
    background-color:white; 
    position: fixed;
}


.bgcol{
    margin-top:50px;
    background-color:#E8F9FA;   
    padding-top:5px;
    padding-bottom:5px;
}

.leftget{
    float: left;
    margin-left:50px;
}


.alingfil{
    text-align:right;
    margin-right:50px;
    
}


</style>














<style>
/*
body {
  font-family: "Lato", sans-serif;
}*/

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 0;
  top: 0;
  right: 0;
  background-color: #E8F9FA ;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;


  box-shadow: -5px 0px #D6D6D6;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/*
.sidenav a:hover {
  color: #f1f1f1;
}*/

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


@media screen and (max-width: 630px) {

.filtem{
    display:block;
}

}




@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<!--
side menu
-->


<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
</script>


<!--
drop down
-->


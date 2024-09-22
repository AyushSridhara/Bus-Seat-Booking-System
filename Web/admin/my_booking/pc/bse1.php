<!-- <br><br><br><br><br> -->

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>



<div class="search disn" >
    <form id="sercformpcbo" class="seform" >


            <label for="uname" ><b>From -</b></label>
            <select id="frompc"  name ="from"; class="selbox toppe"  onchange="fromgetsrpc()" >
            <!-- Dropdown List Option -->
            </select>

            <label for="uname" class="tisepad toppe"><b>To -</b></label>
            <select id="tofompc" name= "to" class="selbox toppe" onchange="togetsrpc()"  >
            <!-- Dropdown List Option -->
            </select>

            <label for="uname" class="tisepad toppe downmo2" ><b>Date -</b></label>
            <input type="date" placeholder="date" name="searchpcdat" id="pacdatev"   onchange="dategetsrpc()">
     

                    <label for="uname" class="tisepad toppe downmo" ><b>Route -</b></label>
                    <select name="root" id="rootpcs" class="selbox toppe"  onchange="rootgetsrpc()"  >
                        <option value="All">All</option>
                        <option value="normal">Normal</option>
                        <option value="highway ">Highway </option>
                    </select>
          
    
      <!--      <select name="to" id="to" class="selectpicker">
            <input type="text" id="tocity" list="cities" name="tocity" placeholder="Type to search...">
            <datalist id="cities">
                <option value="Ampara">
                <option value="Anuradhapura">
                <option value="Badulla">
                <option value="Batticaloa">
                <option value="Colombo">
                <option value="Galle">
                <option value="Gampaha">
                <option value="Hambantota">
                <option value="Jaffna">
                <option value="Kalutara">
                <option value="Kandy">
                <option value="Kegalle">
                <option value="Kilinochchi">
                <option value="Kurunegala">
                <option value="Mannar">
                <option value="Matale">
                <option value="Matara">
                <option value="Mullaitivu">
                <option value="Negombo">
                <option value="Nuwara Eliya">
                <option value="Polonnaruwa">
                <option value="Puttalam">
                <option value="Ratnapura">
                <option value="Trincomalee">
                <option value="Vavuniya"> -->
                <!-- Add more cities as needed 
            </datalist>
                            
            </select>
          


            
            
                     <button type="submit" class="btn btn-primary btn-sm btnse" > <i class="fa-solid fa-magnifying-glass seico"></i> Search</button>
       -->

    </form>




</div>








<script type="text/javascript">






/*
*drop down citys
*/
			$(document).ready(function() {
				var city = [  "All","Ampara","Anuradhapura","Badulla","Balangoda","Batticaloa","Chavakachcheri","Chilaw",
                                    "Colombo","Dambulla", "Eravur", "Galle","Hambantota","Jaffna","Kalmunai", "Kandy", "Kattankudy",
                                    "Kilinochchi", "Kinniya", "Kurunegala", "Mannar", "Matale", "Matara", "Mullaitivu", "Negombo", "Point Pedro",
                                    "Polonnaruwa", "Puttalam", "Ratnapura", "Trincomalee",  "Valvettithurai", "Vavuniya", "Wattala", "Ambalangoda", "Beruwala",
                                    "Hikkaduwa", "Nuwara Eliya", "Weligama", "Kegalle","Kalutara", "Moratuwa", "Panadura", "Ja-Ela", "Gampola",
                                    "Horana", "Nawalapitiya", "Tangalle","Anamaduwa", "Kurunegala", "Dambulla", "Kalpitiya", "Chilaw","Kattankudy",];
				$("#frompc" ).select2({
				  data: city
				});
                
                $("#tofompc").select2({
				  data: city
				});

			});



/*
*search opction
*/
/*

$(document).ready(function(){
    $("#sercformpcbo").keyup(function(){
        alert("Hello! I am an alert box!!");
        event.preventDefault();
        
        var xmid = $("#frompc").val()   
         
          $.post("st2.php",
          {
              xmid : xmid
          },
          function(result){
            $("#kycsearchresult").html(result);
            $("#te").hide();
          });
    });
});
*/





    function fromgetsrpc() {
        var from = document.getElementById("frompc").value;
        var to = document.forms["sercformpcbo"]["tofompc"].value;
        var date = document.forms["sercformpcbo"]["pacdatev"].value;
        var root = document.forms["sercformpcbo"]["rootpcs"].value;
        var uid = "<?php Print($UID); ?>";
        //alert(y);
        //alert(x);
        $.post("my_booking/pc/bse3.php",
          {
            
              from : from ,
              to : to,
              date : date,
              root : root,
              uid : uid
          },
          function(result){
            $("#kycsearchresult").html(result);
            $("#te").hide();
          });
    };



    function togetsrpc() {
        var to = document.getElementById("tofompc").value;
        var from= document.forms["sercformpcbo"]["frompc"].value;
        var date = document.forms["sercformpcbo"]["pacdatev"].value;
        var root = document.forms["sercformpcbo"]["rootpcs"].value;
        var uid = "<?php Print($UID); ?>";
        //alert(y);
        //alert(x);
        $.post("my_booking/pc/bse3.php",
          {
            
              from : from ,
              to : to,
              date : date,
              root : root,
              uid : uid
          },
          function(result){
            $("#kycsearchresult").html(result);
            $("#te").hide();
          });
    };






    function dategetsrpc() {
        var date = document.getElementById("pacdatev").value;
        var to = document.forms["sercformpcbo"]["tofompc"].value;
        var from = document.forms["sercformpcbo"]["frompc"].value;
        var root = document.forms["sercformpcbo"]["rootpcs"].value;
        var uid = "<?php Print($UID); ?>";
        //alert(y);
        //alert(x);
        $.post("my_booking/pc/bse3.php",
          {
            
              from : from ,
              to : to,
              date : date,
              root : root,
              uid : uid
          },
          function(result){
            $("#kycsearchresult").html(result);
            $("#te").hide();
          });
    };





    function rootgetsrpc() {
        var root = document.getElementById("rootpcs").value;
        var to = document.forms["sercformpcbo"]["tofompc"].value;
        var date = document.forms["sercformpcbo"]["pacdatev"].value;
        var from = document.forms["sercformpcbo"]["frompc"].value;
        var uid = "<?php Print($UID); ?>";
        //alert(y);
        //alert(x);
        $.post("my_booking/pc/bse3.php",
          {
            
              from : from ,
              to : to,
              date : date,
              root : root,
              uid : uid
          },
          function(result){
            $("#kycsearchresult").html(result);
            $("#te").hide();
          });
    };












</script>







<style>



    .search{
        margin-left:300px;
        margin-top:100px;
    }
    .selbox{
        width:170px;
        margin-right:30px;
    }
    .seico{
        color:white;
    }
    .tisepad{
        padding-left:50px;
        
    }

    .seform{
        text-align: center;
        font-size:120%;
    }
    .btnse{
        padding-left:20px;
        padding-right:20px;
        text-align: center;
        font-size:102%;
        border-radius: 12px;
    }



.cenboksig{
    text-align:center;
    background-color:blue;
    padding-top:2px;
    padding-bottom:2px;
    color:white;
}








@media screen and (max-width: 1430px) {

    .btnse{
        margin-top:30px;
    }
    .btnd{
        float: none;
    }

}




@media screen and (max-width: 1400px) {

.tisepad{
    padding-top:30px;
}
.downmo{
    padding-left:10px;
}

.selbox{
        width:120px;
        margin-right:20px;
 }

 .seform{
        text-align: center;
        font-size:120%;
}
    .tisepad{
        padding-left:20px;
        
    }

}





@media screen and (max-width: 1150px) {

.seform{
    margin-left:-50px;
    font-size:110%;
}

}
.btnse{
        padding-left:20px;
        padding-right:20px;
        text-align: center;
        font-size:102%;
        border-radius: 12px;
 }


@media screen and (max-width: 1065px) {

.downmo{
    margin-left:140px;
}
.search{
        
        margin-top:80px;
    }
}









@media screen and (max-width: 867px) {

.search{
    margin-left:40px;
    margin-top:30px;
}
.downmo{
    margin-left:0px;
}



}


@media screen and (max-width: 803px) {

.downmo{
    margin-left:200px;
}



}


</style>

<?php
if(isset($_GET['deldon'])){
    
    $done = $_GET['deldon'];
    
?>



<script>

setTimeout(function() { alert("Cansle Booking Done"); }, 500);
</script>

<?php
}


?>



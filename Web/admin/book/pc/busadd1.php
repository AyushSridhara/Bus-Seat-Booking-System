<?php
//print_r($_POST);
require_once '../../../main/theam/dbconn.php';

//$bid =  isset($_POST['buid']) ? $_POST['buid'] : null;
$uid =  isset($_POST['uid']) ? $_POST['uid'] : null;
//$date =  isset($_POST['date']) ? $_POST['date'] : null;

//echo $uid;

?>



<form action="book/pc/bussave.php" method="POST">
  <div class="form-group padding">
    <label for="exampleInputEmail1">From</label><br>
    <select type="text" class="toppemy" id="frlogompc" name = "From" aria-describedby="emailHelp" required> </select>
  </div>
  
  <div class="form-group padding2">
    <label for="exampleInputEmail1">To</label><br>
    <select id="tologfompc" name= "to" class="toppemy" required >
            <!-- Dropdown List Option -->
            </select>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" class="form-control colwef" id="date" name = "date"  aria-describedby="emailHelp" required>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Time</label>
    <input type="time" class="form-control colwef" id="time" name = "time" aria-describedby="emailHelp" required>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control colwef" id="price" name="price" aria-describedby="emailHelp " required>
  </div>

  <div class="form-group padding2">
    <label for="exampleInputEmail1">Type</label>
    <select class="form-control"  name="type" required>
        <option> </option>
        <option value="Normal">Normal</option>
        <option value="Highway">Highway</option>
    </select>
  </div>


  <input type="text" class ="buid" id="uid" name="uid" value="<?php  echo $uid  ?>" readonly>


  <button type="submit" class="btn btn-primary btn-block">Comform</button>
</form>
<br>


<style>

.toppemy{
    width:220px;
}

.buid{
  display: none;
}

.padding{
    margin-top:-20px;
    
}  

.padding2{
    margin-top:-10px;
    
}  
.colwef{
    color:black;
}


</style>


<script type="text/javascript">






/*
*drop down citys
*/
			$(document).ready(function() {
				var city = [  "","Ampara","Anuradhapura","Badulla","Balangoda","Batticaloa","Chavakachcheri","Chilaw",
                                    "Colombo","Dambulla", "Eravur", "Galle","Hambantota","Jaffna","Kalmunai", "Kandy", "Kattankudy",
                                    "Kilinochchi", "Kinniya", "Kurunegala", "Mannar", "Matale", "Matara", "Mullaitivu", "Negombo", "Point Pedro",
                                    "Polonnaruwa", "Puttalam", "Ratnapura", "Trincomalee",  "Valvettithurai", "Vavuniya", "Wattala", "Ambalangoda", "Beruwala",
                                    "Hikkaduwa", "Nuwara Eliya", "Weligama", "Kegalle","Kalutara", "Moratuwa", "Panadura", "Ja-Ela", "Gampola",
                                    "Horana", "Nawalapitiya", "Tangalle","Anamaduwa", "Kurunegala", "Dambulla", "Kalpitiya", "Chilaw","Kattankudy",];
				$("#frlogompc" ).select2({
				  data: city
				});
                
                $("#tologfompc").select2({
				  data: city
				});

			});

</script>
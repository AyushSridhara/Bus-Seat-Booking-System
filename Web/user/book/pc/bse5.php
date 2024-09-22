<?php
//print_r($_POST);
require_once '../../../main/theam/dbconn.php';

$bid =  isset($_POST['buid']) ? $_POST['buid'] : null;
$uid =  isset($_POST['uid']) ? $_POST['uid'] : null;
$date =  isset($_POST['date']) ? $_POST['date'] : null;

//print_r($bid);
//print_r($uid);

$sql = "SELECT * FROM bus WHERE id = '$bid' ";
$result = $conn->query($sql);
if($result->num_rows >0){
    while ($row = $result->fetch_assoc()) {
                                                                   
    } 
}



/*
*book checjking
*/
//$date ="2024-03-15";

//function bookcheck($busid ,$date){
function bookcheck($busid ){
    //echo "yes";
    
    //$busid ="5";
    $sql ="SELECT seid FROM book WHERE busid ='$busid' ";
    $result = $GLOBALS['conn']->query($sql);
    //echo $GLOBALS['conn']->error;
    $bokchkinary = array();
    if($result->num_rows >0){
        
        while($row = $result->fetch_assoc()){
            //echo "yeeeeee";
            array_push($bokchkinary,$row['seid']);
            //echo $row['seid'];
        }
        //print_r ($bokchkinary);
        return $bokchkinary;
    }else{
        return $bokchkinary;
    }
}

if(isset($bid)){
    //echo "yes";

    $bokindate = bookcheck($bid);
   // echo "yes";
}else{
    $bokindate = array();
}
//print_r($bokindate);

?>






<div class="alingcenter ">
    
<form id="dategetbook">
                    
<label for="sedate" class="  " ><b>Date -</b></label>
                    <?php 
                    

                                $sql = "SELECT * FROM bus WHERE id = '$bid' ";
                                $countp = 0;                            
                                $result = $conn->query($sql);
                                
                                $sqlcon = "SELECT * FROM bus WHERE id = '$bid' ";

                                $cresult = $conn->query($sqlcon) ;
                                $crow = $cresult->fetch_assoc() ;                                     
                    
                    
                                $datechedail = $crow["date"];
                                

                                

                                if($result->num_rows >0){

                                   

                                        if($datechedail != "Daily"){
                                            echo '<select name="root" id="pacdailybookdatedatev" class="selbox toppe" >';
                                            while ($row = $result->fetch_assoc()) {
                                                echo ' <option value=" '. $row["date"] .'">'. $row["date"] .'</option>  ';
                                                    
                                                
                                            } 
                                            echo '</select>';
                                        }else{
                                            ?>

                                           
                                            <?php
                                            echo'<input type="date" placeholder="date" name="searchpcdat" id="pacdailybookdatedatev" onchange="datechange(this.value)"  >';
                                        }
                                    }
                        ?>

                                </form>                                  


</div>


    








<br>

<table class = "bookta">




    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("01" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "01" >
            

            <img class="
            <?php if( !in_array("01" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "she0">
            <img class="
            <?php if( in_array("02" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "02" >
            

            <img class="
            <?php if( !in_array("02" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "imgnone"> </td>


        <td class = "she0">
            <img class="
            <?php if( in_array("03" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "03" >
            

            <img class="
            <?php if( !in_array("03" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("04" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "04" >
            

            <img class="
            <?php if( !in_array("04" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>

    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("05" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "05" >
            

            <img class="
            <?php if( !in_array("05" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "she0">
            <img class="
            <?php if( in_array("06" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "06" >
            

            <img class="
            <?php if( !in_array("06" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "imgnone"> </td>


        <td class = "she0">
            <img class="
            <?php if( in_array("07" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "07" >
            

            <img class="
            <?php if( !in_array("07" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("08" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "08" >
            

            <img class="
            <?php if( !in_array("08" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>










    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("09" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "09" >
            

            <img class="
            <?php if( !in_array("09" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "she0">
            <img class="
            <?php if( in_array("10" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "10" >
            

            <img class="
            <?php if( !in_array("10" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "imgnone"> </td>


        <td class = "she0">
            <img class="
            <?php if( in_array("11" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "11" >
            

            <img class="
            <?php if( !in_array("11" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("12" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "12" >
            

            <img class="
            <?php if( !in_array("12" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>










    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("13" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "13" >
            

            <img class="
            <?php if( !in_array("13" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "she0">
            <img class="
            <?php if( in_array("14" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "14" >
            

            <img class="
            <?php if( !in_array("14" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "imgnone"> </td>


        <td class = "she0">
            <img class="
            <?php if( in_array("15" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "15" >
            

            <img class="
            <?php if( !in_array("15" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("16" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "16" >
            

            <img class="
            <?php if( !in_array("16" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>









    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("17" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "17" >
            

            <img class="
            <?php if( !in_array("17" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "she0">
            <img class="
            <?php if( in_array("18" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "18" >
            

            <img class="
            <?php if( !in_array("18" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "imgnone"> </td>


        <td class = "she0">
            <img class="
            <?php if( in_array("19" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "19" >
            

            <img class="
            <?php if( !in_array("19" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("20" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "20" >
            

            <img class="
            <?php if( !in_array("20" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    

    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("21" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "21" >
            

            <img class="
            <?php if( !in_array("21" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "SE22">
            <img class="
            <?php if( in_array("22" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "22" >
            

            <img class="
            <?php if( !in_array("22" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "imgnone"> </td>


        <td class = "she0">
            <img class="
            <?php if( in_array("23" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "23" >
            

            <img class="
            <?php if( !in_array("23" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("24" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "24" >
            

            <img class="
            <?php if( !in_array("24" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>

















    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("25" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "25" >
            

            <img class="
            <?php if( !in_array("25" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "she0">
            <img class="
            <?php if( in_array("26" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "26" >
            

            <img class="
            <?php if( !in_array("26" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "imgnone"> </td>


        <td class = "she0">
            <img class="
            <?php if( in_array("27" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "27" >
            

            <img class="
            <?php if( !in_array("27" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("28" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "28" >
            

            <img class="
            <?php if( !in_array("28" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>



    <tr>
        <td class = "she0">
            <img class="
            <?php if( in_array("29" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "29" >
            

            <img class="
            <?php if( !in_array("29" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>



        <td class = "she0">
            <img class="
            <?php if( in_array("30" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "30" >
            

            <img class="
            <?php if( !in_array("30" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


        
        

        <td class = "she0">
            <img class="
            <?php if( in_array("31" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "31" >
            

            <img class="
            <?php if( !in_array("31" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("32" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "32" >
            

            <img class="
            <?php if( !in_array("32" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>





        <td class = "she0">
            <img class="
            <?php if( in_array("33" , $bokindate) ){
                        echo "hide";
                    }
                    ?>
            " src='img/s2.png'  class ="frame-btn-ser" data-toggle='modal'  data-target='#bookmodal' onclick=(boksehtid(this.id)) id = "33" >
            

            <img class="
            <?php if( !in_array("33" , $bokindate) ){
                        echo "hide"; 
                    }
                    ?> " src='img/boked.png'>
        </td>


    </tr>


</table>



<style>



.hide{
    display: none;
}



.alingcenter{
    text-align:center;
}




.bookta{
margin-left: auto;
  margin-right: auto;
}

.bookta,
.bookta th,
.bookta td {
  border: 1px solid white;
  border-collapse: collapse;;
}

.bookta td{
    width: 60px;
    height: 60px;
    text-align:center;
    
    background-size: 100% 100%;
}

.bookta .imgnone{
    background-image: none;
}


.bookta .nobook{
    background-image: url('img/s2.png');
}

.bookta .bookedl{
    background-image: url('img/boked.png');
}

</style>





<script type="text/javascript">

function boksehtid(id){
         //alert (id);  
         
        var buid = "<?php Print($bid); ?>";
        var uid = "<?php Print($uid); ?>";
        var date = document.forms["dategetbook"]["pacdailybookdatedatev"].value;

        if(date !=""){
           // console.log("yes");
            $.post("book/pc/bse7.php",
            {
                sheid : id ,
                buid : buid,
                bokdate : date,
                UID:uid  

            },
            function(result,success){
            if(success == "success"){
                if(result != ""){
                    $("#bookmodal").show();
                    $("#shuvrbook").html(result);
                }else{
                    $("#bookmodlehide").hide();
                }
            }else{
                
            }
                $("#bookmodlehide").html(result);
             //alert (result); 
            });
            
        }else{
            //alert ("Select Date");
            //console.log("no");
           //$("#bookmodal").none();
        }

        
}


/*************** */


function datechange(date){
         //alert (date);  
    
        var buid = "<?php Print($bid); ?>";
        var uid = "<?php Print($uid); ?>";
       // var date = document.forms["dategetbook"]["pacdailybookdatedatev"].value;
       console.log(buid);
       console.log(uid);

            //console.log("yes");
            $.post("book/pc/bse5.php",
            {
                date :date,
                buid : buid,
                uid:uid  

            },
            function(result,success){
                console.log(result);
            if(success == "success"){
                if(result != ""){
                
                    $("#chekmod").html(result);
                }else{
                    $("#bookmodlehide").hide();
                }
            }else{
                
            }
                $("#bookmodlehide").html(result);
             //alert (result); 
            });
            

        
}














</script>


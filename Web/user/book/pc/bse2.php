<div class = "left disn">





<?php
//brokers



$countp = 0;

  $todeaget = date("Y-m-d") ;

  $sql = "SELECT * FROM bus WHERE date >= '$todeaget'";

  $result = $conn->query($sql);

if($result->num_rows >0){
            //usd ads view table

            echo '<div class = "table-wrapper">';
            echo '<table class="table table-striped table-hover" id = "kycsearchresult">';
            echo '<thead class=" fw-bold hcol ">';
            echo '<tr>';
            
            echo '<th style="width:5%; background-color:#9EB4F6;"  >'. ucfirst('#').'</th>';          
            echo '<th style="width:10% ; background-color:#9EB4F6;">'. ucfirst('FROM').'</th>';
            echo '<th style="width:10% ; background-color:#9EB4F6;">'. ucfirst('TO').'</th>';
            echo '<th style="width:10% ; background-color:#9EB4F6;">'. ucfirst('DATE').'</th>';
            echo '<th style="width:10% ; background-color:#9EB4F6;">'. ucfirst('TIME').'</th>';
            echo '<th style="width:10%; background-color:#9EB4F6;">'. ucfirst('type').'</th>';            
            echo '<th style="width:10%; background-color:#9EB4F6;">'. ucfirst('price').'</th>';
            echo '<th style="width:10% ; background-color:#9EB4F6;">'. ucfirst('Action').'</th>';
            
            echo '</thead>';
            echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            
                $countp++ ;
                echo '<tr>';

                echo '<td>'. $countp .'</td>';
                echo '<td>'. $row["b_from"] .'</td>';
                echo '<td>'. $row["b_to"] .'</td>';
                if($row["date"] == 'Daily'){
                    echo '<td style="background-color:#B2FFA2;"><p >'. $row["date"] .'</p></td>';
                }else{
                    echo '<td>'. $row["date"] .'</td>';
                }                
                echo '<td>'. $row["time"] .'</td>';
                echo '<td>'. $row["type"] .'</td>';
                echo '<td>'. $row["price"] .'</td>';
                echo "<td>

                


                <button  class='btn btn-primary btn-sm btn-sme ' data-toggle='modal' data-target='#myModal'  onclick=(editproduct(this.id))   id = '".$row["id"]."'>Book</button>
                <!-- <a  class='btn btn-primary btn-sm btn-sme' href='book.php?id=$row[id]'>Book</a>
                <a class='btn btn-primary btn-sm' href=''>Edit</a>  -->
                
                
                    
                </td>";
                
            


            echo '</tr>';
            
           
        }  echo '</tbody>';
            echo '</table>';
            echo '</div>';
        }else {
            echo '<div class="alert alert-secondary">';
            echo '<strong>'.ucfirst('no recound').'!<strong>';
            echo '</div>';

        }


        ;?>






    </div>













 














<style>


.schr{
    margin-left:85%;
}



.left{
     padding-left:350px;
     padding-right:20px;
     margin-top:60px;
}


.sttab{
    width: 99.5%;
}



table, th, td {
  border: 1px solid;
}

td {
    font-family: Arial, Helvetica, sans-serif;
    font-size:16px;
}

th {

  text-align: center;
  font-family: "Lucida Console", "Courier New", monospace;
  font-size:19px;
 
  
}

.hcol{
    background-color: #9EB4F6;
    position: sticky;
    top:0px;
}



.table-wrapper{
    max-height: 480px;
    overflow-y: scroll;
}

.btn-sme{
    width: 80px;
    
}

.btn-sme:hover{
    width: 75px;
    
}


















@media screen and (max-width: 1000px) {

.left{
     padding-left:290px;
     padding-right:20px;
}


td {
    font-size:15px;
}

th {
  font-size:18px;
  
}

}



@media screen and (max-width: 867px) {

.left{
     padding-left:20px;
     padding-right:20px;
     margin-top:20px;
}


td {
    font-size:13px;
}

th {
  font-size:17px;
  
}





}




</style>



<script type="text/javascript">
function editproduct(id){
         //alert (id);  
         var uid = "<?php Print($UID); ?>";
         
         //alert (uid); 

         $.post("book/pc/bse5.php",
         {
            buid : id,
             uid : uid                         

         },
         function(result){
           $("#chekmod").html(result);
           //alert (result); 
         });
}


</script>



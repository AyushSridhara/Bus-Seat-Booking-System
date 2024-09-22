
<?php


if ($_SERVER["REQUEST_METHOD"] == 'POST'){

    require_once '../../../main/theam/dbconn.php';



    $b_from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $root = $_POST['root'];
    $uid = $_POST['uid'];
    
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
        $fromwge = "and date > ' $todeaget' and b_from = '$b_from'";    
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
    $datesqlpcsc = "WHERE date > ' $todeaget' and usid = '$uid'";
}else{
        $datesqlpcsc = "WHERE date = ' $date' or date = 'daily' and usid = '$uid' ";
}



/*
* root check
*/ 


if($root == "All"){
    $rootsqlpcsc = "";
}else{
        $rootsqlpcsc = "and type = '$root'";
}




    

    $countp = 0;



    $sql = "SELECT * FROM book $datesqlpcsc $fromwge $tosqlpcsc  $rootsqlpcsc";

   // echo $sql;

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
              echo '<th style="width:10%; background-color:#9EB4F6;">'. ucfirst('Type').'</th>';            
              echo '<th style="width:10%; background-color:#9EB4F6;">'. ucfirst('price').'</th>';
              echo '<th style="width:15% ; background-color:#9EB4F6;">'. ucfirst('Action').'</th>';
              
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
  
                  
  
                  <button  class='btn btn-success btn-sm btn-sme ' data-toggle='modal' data-target='#myModal'  onclick=(editproduct(this.id))   id = '".$row["bid"]."'>Ticket</button>
                  <button  class='btn btn-danger btn-sm btn-sme' data-toggle='modal' data-target='#myModal'  onclick=(remove(this.id))   id=$row[bid]'>Cancel</button>
                  <!--<a class='btn btn-primary btn-sm' href=''>Edit</a>  -->
                  
                  
                      
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
  


}



?>



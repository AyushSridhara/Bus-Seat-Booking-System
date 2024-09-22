<?php
require_once '../main/theam/dbconn.php';
//require_once('../aset/fun/fun.php');
//require_once('inc/login/login_fun.php');
//echo print_r($_POST);


if($_SERVER['REQUEST_METHOD'] == "POST"){
    //echo 1;
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        echo check_user_email($email);
        
    }
}





/*
* check user email
*/
function check_user_email($email){
    $sql = "SELECT email FROM user WHERE email = '$email' ";
    $result = $GLOBALS['conn']-> query($sql);

    if ($result->num_rows > 0){
        return 1;

    }else{
        return 0;
    }


}
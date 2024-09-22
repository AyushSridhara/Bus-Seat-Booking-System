<?php  
require_once '../theam/dbconn.php';


//echo $_POST['email'];



    $errors = array();
   

    if(isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 || strlen(trim($_POST['email'])) > 10){

        $errors[]='email is Missing / Invlid';

    }

    if(isset($_POST['Password']) || strlen(trim($_POST['Password'])) < 1 ){

        $errors[]='Password is Missing / Invlid';

    }

    if (empty($arrors)){

        $email  = mysqli_real_escape_string($conn, $_POST['email']);
        $password  = mysqli_real_escape_string($conn, $_POST['Password']);
        
        //$hashed_password = sha1($password);
        $hashed_password = $password;

        $query = "SELECT * FROM user 
            WHERE email = '{$email}'
            AND pass = '{$hashed_password}'
            LIMIT 1 ";

        $result_set = mysqli_query($conn, $query);

        if ($result_set){

            if (mysqli_num_rows($result_set) == 1){


                session_start();
                $user = mysqli_fetch_assoc($result_set);
                $_SESSION['UID'] = $user['id'];
                $_SESSION['uname'] = $user['firstname']; 
                $_SESSION['type'] = $user['type']; 
                


                if($user['type'] == 1){
                    //echo "hi";
                    
                    header('Location: ../../admin');
                }else{
                   // echo "no";
                    //session_start();
                    header('Location: ../../user');
                }
                
               
                //header('Location: ../../user');

            } 
            else {
                $errors[] = 'Invalid email / password';
            }

        } else {
            $errors[] = 'DB query failed';
        }



    }











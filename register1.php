<?php
    ob_start();

    //making connection
    require_once 'config.php';

    //saving values user entered
    $user = $_REQUEST['user'];

    //encrypting password
    $hashed_password = password_hash($_REQUEST['pass'],PASSWORD_DEFAULT);

    //query string and result
    $query = "Select username from tblUsers where username = '$user';";
    $result = mysqli_query($conn, $query);

    //redirecting based on result
    if(mysqli_num_rows($result) == 1){
        header('location:register.php?result=userexists');
    }
    else{
        $query = "Insert into tblUsers (username, password)
            values ('$user', '$hashed_password')";
            $result = mysqli_query($conn, $query);

            if($result ==1){
                header('location:register.php?result=success');
            }
            else{
                header('location:register.php?result=fail');
            }
        }

?>
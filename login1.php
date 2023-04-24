<?php
    ob_start();
    session_start();
   
    //making connection
    require_once 'config.php';
  
    //reading values
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
   
    //query string
    $query = "Select * from tblUsers where username = '$user';";

    //saving results of search from database
    $result = mysqli_query ($conn, $query);

    //redirecting based on results
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        
        if(password_verify($pass, $hashed_password)){
            $_SESSION['user'] = $user;
            header('location:viewStudents.php');
                ob_end_flush();
                die();
        }
    }
    header('Location:login.php?result=fail');

?>
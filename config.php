<?php
//making connection
    $host = 'localhost';        
    $user = 'imranfi_admin';      
    $pswd = '8ONW+h9jFCG,';      
    $dbName = 'imranfi_mydb';       

    $conn = mysqli_connect($host, $user, $pswd, $dbName);


    if (empty($conn)){
        die("Connection failed: <br>" . mysqli_connect_error());
    }

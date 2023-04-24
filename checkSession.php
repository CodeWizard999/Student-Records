<?php

//continue seesion
session_start();

//checking if it exists
if(!isset($_SESSION['user'])){
    header('Location:login.php');
}
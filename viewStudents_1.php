<?php

//continue session
session_start();

//saving value eneter by user
$search = $_REQUEST['search'];

//redirecting with value entered by user
header("location:viewStudents.php?search=$search");


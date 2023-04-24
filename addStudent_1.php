<?php

//connection
ob_start();
require_once 'config.php';

//reading values and saving in variables
$lastName = $_REQUEST['lastName'];
$firstName = $_REQUEST['firstName'];
$gpa = $_REQUEST['gpa'];

//query string
$query = "insert into tblSchool (LastName, FirstName, GPA) values ('$lastName', '$firstName', $gpa)";

//searching database and saving result in result variable
$result = mysqli_query($conn, $query);

//redirecting
if ($result == 1)
{
    header("location:addStudent.php?result=success");
} else
{
    header("location:addStudent.php?result=fail");
}
?>

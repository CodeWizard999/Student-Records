<?php 
    session_start();
    require_once 'checkSession.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register New Student</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="main">

            <h1>Student Records</h1>

            <!--adding header-->
            <?php
              require_once 'header.php';
            ?>

            <br>
            <br>

            <h2>Add Student</h2>

            <!--form to add student-->
            <form action="addStudent_1.php" method="post">
                <table>
                    <tr>
                        <td>Last Name:</td>
                        <td>
                            <input type="text" name="lastName" required>
                        </td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td>
                            <input type="text" name="firstName" required>
                        </td>
                    </tr>
                    <tr>
                        <td>G.P.A:</td>
                        <td>
                            <input type="number" name="gpa" step="0.1" min="1.0" max="4.0" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Add Student">
                        </td>
                    </tr>
                </table>
            </form>

            <?php

            //checking the value in result that was recieved after redirect
            if (isset($_REQUEST['result']))
            {
               
                if ($_REQUEST['result'] == "success")
                {
                    echo "<script>alert('New Student was Successfully added');</script>";
                    
                } else if ($_REQUEST['result'] == "fail")
                {
                    echo "<script>alert('Sorry could not add new Student');</script>";
                
                }
            }
            ?>
        </div>
    </body>
</html>

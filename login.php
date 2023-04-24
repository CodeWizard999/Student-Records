<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="main">
            <h1>Student Records</h1>

            <!--header-->
            <?php
              require_once 'header.php';
            ?>
            
            <br>
            <br>
            <h5>Please log in using existing account*</h5>

            <!--form for user input-->
            <div id="login">
                <form action="login1.php" method="post">

                    <label for="user"><b>Username</b></label>
                    <input type="text" name="user"  placeholder="Enter Username" required><br><br>

                    <label for="pass"><b>Password</b></label>
                    <input type="password" name="pass"  placeholder="Enter Password"required><br><br>

                    <button type="submit" onclick="">login</button>

                    <!--checking value recieved after redirecting-->
                    <?php
                        if(isset ($_REQUEST['result'])){
                            if($_REQUEST['result'] == "fail"){
                                echo "<script>alert('Either Username or Password is incorrect, Try again')</script>";
                            }
                        }
                    ?>

                </form>
            </div>

            
    </div>
</body>
</html>
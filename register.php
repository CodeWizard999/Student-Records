<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="main">
            
            <h1>Student Records</h1>

            <?php
              require_once 'header.php';
            ?>
            
            <br>
            <br>
            <h5>Please create a new account*</h5>
            <div id="login">
                <!--form for user input-->
                <form action="register1.php" method="post" >

                    <label for="user"><b>Username</b></label>
                    <input type="text" name="user"  placeholder="Enter Username" required><br><br>

                    <label for="pass"><b>Password</b></label>
                    <input type="password" name="pass"  placeholder="Enter Password"required><br><br>

                    <button type="submit">Register</button>

                </form>
                <!--redirecting based on header information recieved-->
                <?php
                    if(isset($_REQUEST['result'])){
                        if($_REQUEST['result'] ==  "userexists"){
                            echo "<script>alert('This Username already exists login or use another Username')</script>";
                        }
                        else if($_REQUEST['result'] ==  "success") {
                            echo "<script>alert('New User has been registered')</script>";
                        }
                        else if($_REQUEST['result'] ==  "fail"){
                            echo "<script>alert('New User could not be registered')</script>";
                        }
                    }
                ?>
            </div>
    </div>
</body>
</html>
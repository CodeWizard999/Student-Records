<?php
    session_start();
    require_once 'checkSession.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Students</title>
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

            <h4>Search Students record</h4>
            
            <form action="viewStudents_1.php" method="post" id="view">
                <input type="text" placeholder="Search here" name="search">
                <input type="submit" value="Search">
            </form>
            <br>
            <br>
            
                <?php
                //connection created
                ob_start();
                require_once 'config.php';

                //printing results based on user input in search
                if (isset($_REQUEST['search'])){

                    $ans = $_REQUEST['search'];

                    //if searchbox is blank
                    if($ans == ""){

                        $query = "select * from tblSchool";
                
                
                        $result = mysqli_query($conn, $query);
        
                        
                        if (mysqli_num_rows($result) > 0) 
                        {    
                            require_once 'showRecord.php';
                        }
                        else
                        {
                            echo "<h3>The table is empty.</h3>";
                        }

                    }
                    //if serachbox is not blank
                    else if($ans != ""){
                        $query2= "select * from tblSchool where FirstName like '%$ans%' or LastName like '%$ans%'";

                        $result = mysqli_query($conn, $query2);
    
                                if (mysqli_num_rows($result) > 0) 
                                {    
                                    require_once 'showRecord.php';
                                }
                                else{
                                    echo "<h3>Record not found</h3>";
                                    }
                    }
                
                }
                //if nothing is entered in searchbox
                else{
                    $query = "select * from tblSchool";
                
                
                        $result = mysqli_query($conn, $query);
        
                        
                        if (mysqli_num_rows($result) > 0) 
                        {    
                            require_once 'showRecord.php';
                        }
                        else
                        {
                            echo "<h3>The table is empty.</h3>";
                        }
                }
            ?>

                
        </div>
    </body>
</html>

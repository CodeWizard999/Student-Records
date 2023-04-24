<!--the header-->
<div id= "links">
    <a href="index.php">Home</a> | 
    <a href="register.php">Register</a> | 
    <?php 
        if(isset($_SESSION['user']))
            echo '<a href="logout.php" >logout</a>';
            else echo '<a href="login.php" >login</a>';
        ?> |
    <a href="addStudent.php" onclick="alert('this page can only be accessed by authorized users');">Add new Student</a> | 
    <a href="viewStudents.php" onclick="alert('this page can only be accessed by authorized users');">View Existing Students</a>
</div>
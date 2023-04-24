<?php
//printing table
 echo "<table id='students'>";
 echo "<tr><th>Row #</th>";
 echo "<th>Last Name</th>";
 echo "<th>First Name</th>";
 echo "<th>GPA</th></tr>";
 
 $count = 1;     
 

 while ($row = mysqli_fetch_assoc($result))
 {
     echo "<tr><td>$count</td>";
     echo "<td>" . $row['FirstName'] . "</td>";
     echo "<td>" . $row['LastName'] . "</td>";
     echo "<td>" . $row['GPA'] . "</td></tr>";

     $count++;
 }
 
 echo "</table>";
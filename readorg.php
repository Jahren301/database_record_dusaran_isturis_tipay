<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel= "stylesheet" href="read.css">
</head>
<body>
<body>
    <div class="bg">
    <div class="wrapper">
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2;}

tr:hover{
    background-color: #edcfb9;
  }
</style>
        <table>
            <thread>
                <tr>
                    <th>Student No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <?php
            $sql = "SELECT * FROM club_organization_tbl ";
            $result = $connect ->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result ->fetch_assoc()) { 
                echo "<tr>";
                echo "<td>" .$row['student_no']."</td>";
                echo "<td>" .$row['name']."</td>";
                echo"<td style='text-align:justify;'>
                <a href='updateclub.php?record_id=".$row['club_id']."'>
                        <button>Edit</button>
                </a>
                <a href='deleteclub.php?record_id=".$row['club_id']."'>
                    <button>Delete</button>
                </a>
                </td>";
                echo"</tr>";
            }
        }
            else {
                echo"<tr>";
                echo"<td colspan='4' style='text-align:center;'>No Results</td>";
                echo"</tr>";
            }
                $connect->close();
?>
</table>
<br>
             <h1>   <a href="readorg.php" style="text-decoration:none;"><h1 style="color:blue;">Insert again?</h1></a>
            
        </h2> <a href="achievement.php" style="text-decoration:none;"><h1 style="color:white;">Click here to input Achievement</h2></a>

            </thread>
    <tbody>
        <tr>
        </section>
<!-- <style> 
/* table, th, td {
  border: 1px solid;
} */
</style>
    <table> 
        
        <tr>
            <td>Fullname</td>
            <td>Year & Department</td>
            <td>Position</td>
            <td>Gender</td>
            <td>Contact Number</td>
            <td>Age</td>
            </tr>

        
            // $sql = "SELECT * FROM students_tbl ";
            // $result = $connect ->query($sql);
            // while($row = $result ->fetch_assoc()) {  -->
                <!-- // echo "<tr>";
                // echo "<td>" .$row['fullname']."</td>";
                // echo "<td>" .$row['year_department']."</td>";
                // echo "<td>" .$row['position']."</td>";
                // echo "<td>" .$row['gender']."</td>";
                // echo "<td>" .$row['contact_no']."</td> " ;
            //     echo "<td>" .$row['age']."</td> " ;
            //     echo "</tr>";
            // }
            // ?>  -->
        </table>    
    </body>
    </html> 
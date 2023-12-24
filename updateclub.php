<?php
require_once "db.php";

$record_id = $_GET['record_id'];

$sql = "SELECT * FROM club_organization_tbl WHERE club_id = '$record_id'";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="member.css">
    <title></title>

   
</head>
<body>
    <div class="wrapper">
        <div class="input-box">
    <form action="" method="post">

        <a href="readmember.php" style="text-decoration:none;"><h1 style="color:white;">View Records</h1></a>

        <input type="text" name="student_no" id=""value="<?php echo $row['student_no'] ?>"> <required_once> <br>

        <input type="text" name="name" id="" value="<?php echo $row['name'] ?>"> <required_once><br>

        <button type="submit" name="submit" value="Update" class="btn">Submit</button>

        

    </form>
    </div>
    </div>
    <?php

        if(isset($_POST['submit'])){

            $record_id  = $_GET['record_id'];
            $student_no   = $_POST['student_no'];
            $name   = $_POST['name'];
            
    
            $Update = "UPDATE club_organization_tbl SET 
            student_no        = '$student_no',
            name              = '$name',
            WHERE club_id  = '$record_id';
            ";
    
            if ($connect->query($Update) === TRUE) {
                echo "Record has been saved!";
                echo '<meta http-equiv="refresh" content="0; url=readorg.php">';
                
            } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
            }
    
            $connect->close();

        }
        

    ?>


</body>
</html>
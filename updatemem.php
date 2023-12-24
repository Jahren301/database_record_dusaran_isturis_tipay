<?php
require_once "db.php";

$record_id = $_GET['record_id'];

$sql = "SELECT * FROM member_registration_tbl WHERE member_id = '$record_id'";
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

        <input type="text" name="fullname" id=""value="<?php echo $row['fullname'] ?>"> <required_once> <br>

        <input type="text" name="year_department" id="" value="<?php echo $row['year_department'] ?>"> <required_once><br>

        <input type="text" name="position" id=""value="<?php echo $row['position']?>"><required_once><br>

        <input type="text" name="gender" id=""value="<?php echo $row['gender']?>"><required_once><br>
        
        <input type="text" name="contact_no" id=""value="<?php echo $row['contact_no'] ?>"><required_once><br>

        <input type="text" name="age" id=""value="<?php echo $row['age'] ?>"><required_once><br>

        <button type="submit" name="submit" value="Update" class="btn">Submit</button>

        

    </form>
    </div>
    </div>
    <?php

        if(isset($_POST['submit'])){

            $record_id  = $_GET['record_id'];
            $fullname   = $_POST['fullname'];
            $year_department   = $_POST['year_department'];
            $position     = $_POST['position'];
            $gender    = $_POST['gender'];
            $contact_no    = $_POST['contact_no'];
            $age    = $_POST['age'];
    
            $Update = "UPDATE member_registration_tbl SET 
            fullname        = '$fullname',
            year_department = '$year_department',
            position        = '$position',
            gender          = '$gender',
            contact_no      = '$contact_no',
            age             = '$age'
            WHERE member_id  = '$record_id';
            ";
    
            if ($connect->query($Update) === TRUE) {
                echo "Record has been saved!";
                echo '<meta http-equiv="refresh" content="0; url=readmember.php">';
                
            } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
            }
    
            $connect->close();

        }
        

    ?>


</body>
</html>
<?php
require_once "db.php";

$record_id = $_GET['record_id'];

$sql = "SELECT * FROM achievement_tbl WHERE achievement_id = '$record_id'";
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

        <a href="readachie.php" style="text-decoration:none;"><h1 style="color:white;">View Records</h1></a>
    
        <input type="text" name="student_no" value="<?php echo $row['student_no'] ?>"><br>
        
        <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>

        <input type="text" name="date" value="<?php echo $row['date'] ?>"><br>
<br>
        <button type="submit" name="submit" value="Update" class="btn">Submit</button>

        

    </form>
    </div>
    </div>
    <?php

        if(isset($_POST['submit'])){

            $record_id  = $_GET['record_id'];
            $student_no   = $_POST['student_no'];
            $name   = $_POST['name'];
            $date     = $_POST['date'];
    
            $Update = "UPDATE achievement_tbl SET 
            student_no    = '$student_no',
            name    = '$name',
            date      = '$date',
           
            WHERE achievement_id = '$record_id';
            ";
    
            if ($connect->query($Update) === TRUE) {
                echo "Record has been saved!";
                echo '<meta http-equiv="refresh" content="0; url=readachie.php">';
                
            } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
            }
    
            $connect->close();

        }
        

    ?>


</body>
</html>
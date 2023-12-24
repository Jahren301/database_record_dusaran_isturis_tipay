<?php
require_once "db.php";

$record_id = $_GET['record_id'];
$sql = "SELECT * FROM event_tbl WHERE event_id = '$record_id'";
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

        <a href="readevent.php" style="text-decoration:none;"><h1 style="color:white;">View Records</h1></a>

        <input type="text" name="name" value="<?php echo $row['name'] ?>"> <required_once> <br>

        <input type="text" name="location"  value="<?php echo $row['location'] ?>"> <required_once><br>

        <input type="date" name="date" value="<?php echo $row['date']?>"><required_once><br>

        <button type="submit" name="submit" value="Update" class="btn">Submit</button>

        

    </form>
    </div>
    </div>
    <?php

        if(isset($_POST['submit'])){

            $record_id  = $_GET['record_id'];
            $name       = $_POST['name'];
            $location   = $_POST['location'];
            $date       = $_POST['date'];
    
            $Update         = "UPDATE event_tbl SET 
            name            = '$name',
            location        = '$location',
            date            = '$date',
            WHERE event_id  = '$record_id';
            ";
    
            if ($connect->query($Update) === TRUE) {
                echo "Record has been saved!";
                echo '<meta http-equiv="refresh" content="0; url=readevent.php">';
                
            } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
            }
    
            $connect->close();

        }
        

    ?>


</body>
</html>
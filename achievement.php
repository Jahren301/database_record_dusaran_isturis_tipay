<?php
require_once "db.php";

if(isset ($_POST['submit'])) {
    $student_no = $_POST['student_no'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    
    

    $insert = "INSERT INTO achievement_tbl (student_no,name, date)
    VALUES('$student_no','$name', '$date')";
    
if($connect->query($insert) === TRUE){
    echo "Record Saved";
    echo '<meta http-equiv="refresh" content="0; url=readachie.php">';
}

else{
    // echo "Error !".$insert. $connect ->error;
    echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <link rel= "stylesheet" href="admin.css">
</head>
<body>
<div class="wrapper">
<h1>Achievement </h1>
    <br>
        <form method="post" action="">
    <div class="input-box">
        <input type="text" name="student_no" id="" placeholder="Student No" required>
    </div>
    <div class="input-box">
        <input type="text" name="name" id="" placeholder="Name" required>
    </div>
    <div class="input-box">
        <input type="date" name="date" id="" placeholder="Date" required>
    </div>
    <button type="submit" class="btn" name="submit"value="submit">Submit</button>
</form>
</body>
</html>
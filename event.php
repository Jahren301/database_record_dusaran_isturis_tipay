<?php
require_once "db.php";

if(isset ($_POST['submit'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $date = $_POST['date'];

    $insert = "INSERT INTO event_tbl (name, location, date)
    VALUES('$name', '$location', '$date')";

if($connect->query($insert) === TRUE){
    echo "Record Saved";
    echo '<meta http-equiv="refresh" content="0; url=readevent.php">';
}

else{
    echo "Error !".$insert. $connect ->error;
}

$connect->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Name</title>
    <link rel= "stylesheet" href="admin.css">
</head>
<body>
<div class="wrapper">
<h1> Event </h1>
    
    <form method="post" action="">
    <div class="input-box">
        <input type="text" name="name" id=""placeholder="Name" required>
    </div>
    <div class="input-box">
        <input type="text" name="location" id="" placeholder="Location" required>
    </div>
    <div class="input-box">
        <input type="date" name="date" id="" placeholder="Date" required> 
    </div>
        <br>

<button type="submit" class="btn" name="submit" value="submit">Submit</button>
<br>
 
</form>
</body>
</html>
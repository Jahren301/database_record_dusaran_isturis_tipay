<?php
require_once "db.php";

if(isset ($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $year_department = $_POST['year_department'];
    $position = $_POST['position'];
    $gender = $_POST['gender'];
    $contact_no = $_POST['contact_no'];
    $age = $_POST['age'];
   
    $insert = "INSERT INTO member_registration_tbl (fullname, year_department, position, gender, contact_no, age)
    VALUES('$fullname', '$year_department', '$position', '$gender', '$contact_no', '$age')";

if ($connect->query($insert) === TRUE) {
    echo "Record has been saved!";
    echo '<meta http-equiv="refresh" content="0; url=readmember.php">';
// if($connect->query($insert) === TRUE){
//     echo "Record Saved";
// }
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
    <title>Registration</title>
    <link rel= "stylesheet" href="registration.css">
</head>
<body>
<div class="wrapper">
<h1> Registration </h1>
    
    <form method="post" action="">
    <br>
    <div class="input-box">     
    <input type="text" name="fullname" id="" placeholder="Fullname"> <required_once> 
    </div>
<div class="input-box"> 
    <input type="text" name="year_department" id="" placeholder="Year&Department"> <required_once>
    </div> 
<div class="input-box">
    <input type="text" name="position" id=""placeholder="Position"><required_once> 
    </div>
<div class="input-box">
    <input type="text" name="gender" id="" placeholder="Gender"><required_once>
    </div>
<div class="input-box">
    <input type="text" name="contact_no" id="" placeholder="Contact no"><required_once>
    </div>
<div class="input-box">
    <input type="text" name="age" id="" placeholder="Age"><required_once>
    </div>
    <button type="submit" value="submit" name="submit" class="btn">Submit</button>
    <br>
    <br>
    <a href="readmember.php" style="text-decoration:none;"><h1 style="color:red;">View Records</h1></a>    
    <br>
</form>
</body>
</html>

 
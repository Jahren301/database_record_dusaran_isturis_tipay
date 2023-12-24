<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="">Registration</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<div class="content">
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

if($connect->query($insert) === TRUE){
    echo "Record Saved";
}

else{
    echo "Error !".$insert. $connect ->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<h1> Registration </h1>
    
    <form method="post" action="">
    <label> Fullname </label> <br>
    <input type="text" name="fullname" id="" class="label"> <br>
<br>
<label> Year and Department </label> <br>
    <input type="text" name="year_department" id="" class="label"> <br>
<br>
<label> Position </label> <br>
    <input type="text" name="position" id="" class="label"> <br>
<br>
<label> Gender </label> <br>
    <input type="text" name="gender" id="" class="label"> <br>
<br>
<label> Contact Number </label> <br>
    <input type="text" name="contact_no" id="" class="label"> <br>
<br>
<label> Age </label> <br>
    <input type="text" name="age" id="" class="label"> <br>
<br>
<input type = "submit" name = "submit" value="submit" >

</body>
</html>
  <!-- <h2>Responsive Sidebar Example</h2>
  <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
  <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
  <h3>Resize the browser window to see the effect.</h3>
</div> -->

</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])){
    $admin = $_POST['admin'];
    $psw = $_POST['123'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Admin</title>
    <link rel= "stylesheet" href="admin.css">
</head>
<body>
    <div class="wrapper">
    <form method="post" action="member_registration.php">
        <h1> Login </h1>
        <br>
        <div class="input-box">
            <input type = "text" name = "admin" placeholder="Username" required> 
        </div>
        <div class="input-box">
        <input type = "password" name = "123" placeholder="Password" required > 
        </div>
        <button type="submit" class="btn">Login</button>
        <br>
        <br>
        <!-- <input type = "submit" name = "submit" value="submit" > -->
    </div>  
    </form>

    <?php

    
    ?>
</body>
</html>
<?php
$serverName = "127.0.0.1"; //localhost
$userName = "root";
$password = "";
$database = "record_db"; //name it database
 
$connect = new mysqli($serverName, $userName, $password, $database);

// if($connect -> connect_error) {
//     echo "Connected Failed";
// }

// else{
//   echo "Connection Successful";
// }



?>
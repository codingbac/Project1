<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "learn_db";

// Create Connection object

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: ");
}
// else{
//     echo "Connected successfully";  
// }
?>
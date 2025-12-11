<?php
include ("globals.php");
ob_start();

session_start();
// Create connection
$conn = mysqli_connect(server, username, password,db_name);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
}
?>
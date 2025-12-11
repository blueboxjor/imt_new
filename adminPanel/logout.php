<?php
include "../includes/functions.php";
$CurrentDate=date('Y-m-d H:i');

$update="UPDATE users set  `IsOnline`='0' , `LastSeen`='$CurrentDate' where id = ".$_SESSION['id'];
update_query($update);
if(session_destroy()) // Destroying All Sessions
{
header("Location:index.php"); // Redirecting To Home Page
}
?>
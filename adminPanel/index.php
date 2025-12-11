<?php 
include("../includes/connect.php");
if(isset($_SESSION['IsLogin']) && $_SESSION['IsLogin'] ==1 ) {
    header('Location: homepage.php');
} else {
    header('Location: login.php');
}
 
?>
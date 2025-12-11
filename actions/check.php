<?php include "../includes/functions.php";

if($_REQUEST['type']=="add"){
    if(isset($_SESSION['list'])){
        $len= count($_SESSION['list']);
    }
    else{
        $len= 0;

    }
    if(empty($_SESSION['list'])){
        $_SESSION["list"]=array();
        $_SESSION["list"][0]=$_POST['id'];
    }
    else{
      $_SESSION['list'][$len]=$_POST['id'];
    }
}

else if($_REQUEST['type']=="remove"){
    $key=array_search($_POST['id'],$_SESSION['list']);
    unset($_SESSION['list'][$key]);
}

echo count($_SESSION['list']);
// unset($_SESSION['list']);
// print_r($_SESSION['list']);
?>
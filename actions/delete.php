<?php
include "../includes/functions.php";

$id =$_POST['id'];
$tabel =$_POST['table'];
$flag =$_POST['flag'];
$category =$_POST['category'];
$brand =$_POST['brand'];

if(isset($_POST['delete'])) {

    if($tabel =='attachments' || $tabel =='examinations'){
        $sql = "SELECT * FROM $tabel where id= '$id' ";
        $row = get_record($sql);
        unlink('../uploads/'.$row['Url']);
    }

    if($flag=='1'){
        $delete = "UPDATE $tabel SET IsDeleted='1'  where id= '$id'";
        update_query($delete);
    }
    else{
        $delete = "DELETE FROM $tabel where id= '$id'";
        delete_query($delete);
    }
    
    if($delete) {
        $_SESSION['success_delete']=1;
    } else {
        $_SESSION['general_error']=1;	
    }
}
else if (isset($_POST['allItem'])){
    $delete = "UPDATE  items SET IsDeleted='1' where Categoryid= '$category' and Brandid='$brand' ";

    if($delete) {
        update_query($delete);

        $_SESSION['success_delete']=1;
    } else {
        $_SESSION['general_error']=1;	
    }
}
header('location: '.$_SERVER['HTTP_REFERER']);
?>
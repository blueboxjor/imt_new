<?php 
include "../includes/functions.php";
$created = date('Y-m-d H:i');
$user_id =$_SESSION['UserId'];
$nameEn= str_replace("'" , "\'",$_POST['nameEn']);
$nameAr= str_replace("'" , "\'",$_POST['nameAr']);

$id= str_replace("'" , "\'",$_POST['primary_id']);
$query="SELECT max(serial) as maxNum FROM category where parentid='0'";
$row=get_record($query);

$virtualSerial=$row['maxNum'] + 1;

if(isset($_POST['add'])) {
    
$add = "INSERT INTO `category`(`nameEn`, `nameAr` ,`createdDate`,`createdBy`,`parentid`,`virtualSerial` ,`serial`)
 VALUES ('$nameEn','$nameAr','$created','$user_id','0','$virtualSerial','$virtualSerial')" ;
    if($add) 
    {
    $add_id=insert_query($add);
    $_SESSION['success_add']= 1;
    }
    else
    {
    $_SESSION['general_error']= 1;	
    }  
}
else if(isset($_POST['edit'])){
$update ="UPDATE `category` SET  `nameAr`='$nameAr',
                                  `nameEn`='$nameEn',

                                `udatedDate`='$created',
                                `updatedBy`='$user_id'
                                where id='$id' ";
                                echo $update;
    if($update){
        update_query($update);
        $_SESSION['success_edit']= 1;
    }
    else {
        $_SESSION['general_error']= 1;	
    }
}
header('location: '.$_SERVER['HTTP_REFERER']);
?>
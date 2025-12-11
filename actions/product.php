<?php 
include "../includes/functions.php";
$created = date('Y-m-d H:i');
$user_id =$_SESSION['UserId'];
$nameEn= str_replace("'" , "\'",$_POST['nameEn']);
$nameAr= str_replace("'" , "\'",$_POST['nameAr']);
$descriptionEn= str_replace("'" , "\'",$_POST['descriptionEn']);
$descriptionAr= str_replace("'" , "\'",$_POST['descriptionAr']);

$bestBeforeEn= str_replace("'" , "\'",$_POST['bestBeforeEn']);
$packageEn= str_replace("'" , "\'",$_POST['packageEn']);
$posolgyEn= str_replace("'" , "\'",$_POST['posolgyEn']);
$usageEn= str_replace("'" , "\'",$_POST['usageEn']);

$productionPlaceEn= str_replace("'" , "\'",$_POST['productionPlaceEn']);
$storageConditionEn= str_replace("'" , "\'",$_POST['storageConditionEn']);
$categoryId= str_replace("'" , "\'",$_POST['categoryid']);

$query="SELECT count(count) as maxNum FROM product where categoryId=$categoryId";
$row=get_record($query);

$counter=$row['maxNum'] + 1;
// echo $query;
// die;
if($_FILES["image"]["size"] != 0)
{
$image= upload_img($_FILES["image"]["name"], $_FILES["image"]["tmp_name"]);
}
else 
{
$image = '';	
}
$id= str_replace("'" , "\'",$_POST['primary_id']);



if(isset($_POST['add'])) {
    
$add = "INSERT INTO `product`(`nameEn`, `nameAr`, `descriptionEn` ,`image`, `descriptionAr`,`createdDate`,`createdBy`
, `bestBeforeEn`, `packageEn`, `posolgyEn`, `usageEn`, `productionPlaceEn`, `storageConditionEn`, `categoryId`,`count`)
 VALUES ('$nameEn','$nameAr','$descriptionEn','$image','$descriptionAr','$created','$user_id',
 '$bestBeforeEn','$packageEn','$posolgyEn','$usageEn','$productionPlaceEn','$storageConditionEn','$categoryId','$counter')" ;

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
$update ="UPDATE `product` SET    `nameAr`='$nameAr',
                                  `nameEn`='$nameEn',

                                `descriptionEn`='$descriptionEn',
                                
                                `descriptionAr`='$descriptionAr',
                                `bestBeforeEn` = '$bestBeforeEn',
                                `packageEn` = '$packageEn',
                                `posolgyEn` = '$posolgyEn',
                                `usageEn` = '$usageEn',
                                `productionPlaceEn` = '$productionPlaceEn',
                                `storageConditionEn` = '$storageConditionEn',
                                `categoryId` = '$categoryId',
                                `udatedDate`='$created',
                                `updatedBy`='$user_id'";
        if ($_FILES["image"]["size"] != 0) {

                $update .= " , `image`='$image' ";
                }
                $update .= " 
                                
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
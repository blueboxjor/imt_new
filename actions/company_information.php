<?php 
include "../includes/functions.php";
$created = date('Y-m-d H:i');
$user_id =$_SESSION['UserId'];
$nameEn= str_replace("'" , "\'",$_POST['nameEn']);
$nameAr= str_replace("'" , "\'",$_POST['nameAr']);
$locationEn= str_replace("'" , "\'",$_POST['locationEn']);
$locationAr= str_replace("'" , "\'",$_POST['locationAr']);
$aboutUsEn= str_replace("'" , "\'",$_POST['aboutUsEn']);
$aboutUsAr= str_replace("'" , "\'",$_POST['aboutUsAr']);
$visionEn= str_replace("'" , "\'",$_POST['visionEn']);
$visionAr= str_replace("'" , "\'",$_POST['visionAr']);

$missionEn= str_replace("'" , "\'",$_POST['missionEn']);
$missionAr= str_replace("'" , "\'",$_POST['missionAr']);
$welcomeEn= str_replace("'" , "\'",$_POST['welcomeEn']);
$welcomeAr= str_replace("'" , "\'",$_POST['welcomeAr']);
$email= str_replace("'" , "\'",$_POST['email']);
$phone= str_replace("'" , "\'",$_POST['phone']);
$facebook= str_replace("'" , "\'",$_POST['facebook']);

$instagram= str_replace("'" , "\'",$_POST['instagram']);
$snapchat= str_replace("'" , "\'",$_POST['snapchat']);
$tiktok= str_replace("'" , "\'",$_POST['tiktok']);
$youtube= str_replace("'" , "\'",$_POST['youtube']);
$fax= str_replace("'" , "\'",$_POST['fax']);

if($_FILES["image"]["size"] != 0)
{
$logo= upload_img($_FILES["image"]["name"], $_FILES["image"]["tmp_name"]);
}
else 
{
$logo = '';	
}
$id= str_replace("'" , "\'",$_POST['primary_id']);


if(isset($_POST['add'])) {
    
$add = "INSERT INTO `company_information`( `nameEn`, `nameAr`, `locationEn`, `locationAr`, `aboutUsEn`,
 `aboutUsAr`, `visionEn`, `visionAr`, `missionEn`, `missionAr`, `welcomeEn`, `welcomeAr`, `logo`, 
 `email`, `phone`, `facebook`, `instagram`, `snapchat`, `tiktok`, `youtube`, `createdDate`, `createdBy`,`fax`)

 VALUES ( '$nameEn', '$nameAr', '$locationEn', '$locationAr', '$aboutUsEn',
 '$aboutUsAr', '$visionEn', '$visionAr', '$missionEn', '$missionAr', '$welcomeEn', '$welcomeAr', '$logo', 
 '$email', '$phone', '$facebook', '$instagram', '$snapchat', '$tiktok', '$youtube', '$created', '$user_id','$fax')" ;

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
    $update ="UPDATE
    `company_information`
     SET
        `nameEn` = '$nameEn',
        `nameAr` = '$nameAr',
        `locationEn` = '$locationEn',
        `locationAr` = '$locationAr',
        `aboutUsEn` = '$aboutUsEn',
        `aboutUsAr` = '$aboutUsAr',
        `visionEn` = '$visionEn',
        `visionAr` = '$visionAr',
        `missionEn` = '$missionEn',
        `missionAr` = '$missionAr',
        `fax` = '$fax',

        `welcomeEn` = '$welcomeEn',
        
        `welcomeAr` = '$welcomeAr',";
        if ($_FILES["image"]["size"] != 0) {

                $update .= "        `logo` = '$logo' ,  ";
                }
                $update .= " 
        `email` = '$email',
        `phone` = '$phone',
        `facebook` = '$facebook',
        `instagram` = '$instagram',
        `snapchat` = '$snapchat',
        `tiktok` = '$tiktok',
        `youtube` = '$youtube',

        `udatedDate` = '$created',
        `updatedBy` = '$user_id'
    WHERE

                    1 ";
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
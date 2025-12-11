<?php 
include "../includes/functions.php";
$created = date('Y-m-d H:i');
$user_id =$_SESSION['UserId'];
$titleEn= str_replace("'" , "\'",$_POST['titleEn']);
$titleAr= str_replace("'" , "\'",$_POST['titleAr']);
$descriptionEn= str_replace("'" , "\'",$_POST['descriptionEn']);
$descriptionAr= str_replace("'" , "\'",$_POST['descriptionAr']);

$id= str_replace("'" , "\'",$_POST['primary_id']);
if($_FILES["image"]["size"] != 0)
{
$image= upload_img($_FILES["image"]["name"], $_FILES["image"]["tmp_name"]);
}
else 
{
$image = '';	
}


$file_array = $_FILES['multi_image']['name'];
foreach ($file_array as $key => $value) {
    if (empty($value)) {
       unset($file_array[$key]);
    }
}
if(isset($_POST['add'])) {
 
    
$add = "INSERT INTO `banner`(`titleEn`, `titleAr`, `descriptionEn` ,`image`, `descriptionAr`,`createdDate`,`createdBy`)
 VALUES ('$titleEn','$titleAr','$descriptionEn','$image','$descriptionAr','$created','$user_id')" ;

    if($add) 
    {
    $add_id=insert_query($add);
    if(!empty($file_array)){
        $type=1;
        for ($i=0 ;$i <count($file_array) ; $i++) 
        {
        $file= upload_img($_FILES["multi_image"]["name"][$i] , $_FILES["multi_image"]["tmp_name"][$i]);
        $show_img=get_file_show($file); 
        $extension_id=get_file_extension($file);        
        $add_file="INSERT INTO attachments (`Relatedid`,`Url`,`Typeid`,`ShowImage`,
                   `Extensionid`,`Created`)
                    VALUES ('$add_id','$file','$type','$show_img',
                    '$extension_id','$created') ";
        insert_query($add_file);
        
        }
         }
    $_SESSION['success_add']= 1;
    }
    else
    {
    $_SESSION['general_error']= 1;	
    }  
}
else if(isset($_POST['edit'])){
$update ="UPDATE `banner` SET    `titleAr`='$titleAr',
                                  `titleEn`='$titleEn',

                                `descriptionEn`='$descriptionEn',
                                
                                `descriptionAr`='$descriptionAr',
                               
                                `udatedDate`='$created',
                                `updatedBy`='$user_id' ";
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
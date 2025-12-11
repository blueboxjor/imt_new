<?php
include('../includes/functions.php');

if(isset($_POST['add'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $brand = $_POST['brand'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $sub_brand = $_POST['sub_brand'];

    $created=date('Y-m-d H:i');
    $file_array = $_FILES['files']['name'];

    for ($i=0 ;$i <count($file_array) ; $i++) {
        $file= upload_img($_FILES["files"]["name"][$i] , $_FILES["files"]["tmp_name"][$i]);
        $show_img=get_file_show($file); 
        $extension_id=get_file_extension($file);               
        $add="INSERT INTO attachments (`Relatedid`,`Url`,`Typeid`,`ShowImage`,
                    `Title`,`Extensionid`,`Created`,`Brandid`,`Colorid`,`SubBrand`)
                    VALUES ('$id','$file','$type','$show_img','$title',
                    '$extension_id','$created','$brand','$color','$sub_brand') ";
                    // echo $add;
        insert_query($add);
    }


    if($add) {
        $_SESSION['success_add']=1;
    } else {
        $_SESSION['general_error']=1;	
    }
}

header('location:'.$_SERVER['HTTP_REFERER']);
?>
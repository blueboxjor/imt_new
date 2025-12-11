<?php
include "../includes/functions.php";
    $name= str_replace("'" , "\'",$_POST['name']);
	$phone= str_replace("'" , "\'",$_POST['phone']);
    $role= str_replace("'" , "\'",$_POST['role']);
	$password=crypt($_POST['password'],PROJECT_NAME);
	$created=date('Y-m-d');
	$id = $_SESSION['id'];
if(isset($_POST['add'])) {
	$check_phone = "Select * from users where Phone='$phone' ";
	if(!check_existance($check_phone))
	 {
		if($_FILES["image"]["size"] != 0)
			{
			$image= upload_img($_FILES["image"]["name"], $_FILES["image"]["tmp_name"]);
			}
			else 
			{
			$image = default_img;	
			}
		     $add="INSERT  INTO users(`Password`,`Name`,`Phone`,`ProfilePic`
			 ,`Created`,`Roleid`)
                VALUES ('$password','$name','$phone','$image',
				'$created','$role') ";
			//  var_dump($add); 
			  if($add) 
			   {
				insert_query($add);
				$_SESSION['success_add']= 1;
		        }
			else
			{
				$_SESSION['general_error']= 1;	
			}
	} 
	else {
		$_SESSION['exist_phone'] = 1;	
	}
} 
else if(isset($_POST['edit'])){
	$primary_id=$_POST['primary_id'];
	$update ="UPDATE `users` SET `Name`='$name',
								 `Phone`='$phone',
								 `Roleid`='$role',
								 `UpdatedDate`='$created',
								 `UpdatedBy`='$id'
								 ";
        if ($_FILES["image"]["size"] != 0) {

                $image= upload_img($_FILES["image"]["name"] , $_FILES["image"]["tmp_name"]);
                $update .= " , `ProfilePic`='$image' ";
                }
                $update .= " WHERE id='$primary_id' ";
         
								  
	if($update) 
	{
	update_query($update);
	$_SESSION['success_edit']= 1;
	}
	else
	{
	$_SESSION['general_error']= 1;	
	}
	
}

else if(isset($_POST['reset'])){
	$id=$_POST['primary_id'];
	$update ="UPDATE `users` SET  `Password`='$password' WHERE id='$id'";
	if($update) 
	{
	update_query($update);
	$_SESSION['success_edit']= 1;
	}
	else
	{
	$_SESSION['general_error']= 1;	
	}
	
}
else if(isset($_POST['change_password'])){
	$pass=crypt($_POST['old_password'],PROJECT_NAME);
	if (check_old_password($id , $pass) == true ) {
		$new=crypt($_POST['password1'],PROJECT_NAME);
		$update ="UPDATE `users` SET  `password`='$new' WHERE id='$id'";
		if($update) 
		{
		update_query($update);
		$_SESSION['success_edit']= 1;
		}
		else
		{
		$_SESSION['general_error']= 1;	
		}
		
	}
	else {
		$_SESSION['password_wrong'] = 1;
	}
}

header('location: '.$_SERVER['HTTP_REFERER']);
?>
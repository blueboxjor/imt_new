<?php
include("../includes/functions.php");
if (isset($_POST['submit'])) 
{
	
$phone=$_POST['phone']; //email or phone
$password=$_POST['password'];
$phone = stripslashes($phone);
$password = stripslashes($password);
$pass= crypt($password,PROJECT_NAME); 

$query ="SELECT * from users where IsDeleted='0'and  
Password='$pass' AND Phone='$phone' ";

if(check_existance($query)){
	$row=get_record($query);
	$_SESSION['id']=$row['id'];
	$_SESSION['Role']=$row['Roleid'];
	$_SESSION['Branchid']=$row['Branchid'];
	$_SESSION['Owner']=$row['IsOwner'];

	$_SESSION['IsLogin'] =1 ;
	$update="UPDATE users set  `IsOnline`='1' where id = ".$_SESSION['id'];
	update_query($update);
    header("Location: ../adminPanel/homepage.php");	
}
else {
$_SESSION['no_user'] = 1;
header('location:'.$_SERVER['HTTP_REFERER']);
}

}
else{
header('location:'.$_SERVER['HTTP_REFERER']);
}
?>
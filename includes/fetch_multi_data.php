<?php
include "functions.php";
$type = $_REQUEST['type'];
// $type="all_permissions";
switch ($type){

// case "all_permissions":	
// $rows = "SELECT permissions.Class 
// FROM permissions";
// break;

// case "display":	
// $id=$_POST['id'];
// $rows = "SELECT (permissions.Class) as permissions 
// FROM permissions
// WHERE EXISTS 
// (SELECT PermissionId FROM user_permission 
// WHERE user_permission.PermissionId = permissions.id 
// AND user_permission.UserId =".$id.")";
// break;

// case "permissions":	
// $rows = "SELECT (permissions.class) as permissions,permissions.id ,parentId
// FROM `user_permission` 
// inner join  permissions  on  user_permission.PermissionId= permissions.id
// WHERE  user_permission.UserId='".$_POST['id']."'";
// break;

case "List":
$Categoryid=$_POST['Categoryid'];
$Table = $_POST['Table'];
$where ="and IsApproved ='1' ";
if($_POST['All'] == 1){
$where ="";
}
$rows ="SELECT * FROM $Table Where Categoryid='$Categoryid' 
and IsDeleted='0' $where
Order By id Desc ";
break;

}
$qry =mysqli_query($conn,$rows);
$array=array();
while($result=mysqli_fetch_assoc($qry)){
  $array[]=$result;
}
echo json_encode($array)
?>
<?php
include "functions.php";
$type = $_REQUEST['type'];
// $type ='restriction';
switch ($type){

// case "display":	
// $id=$_POST['id'];
// $sql = "SELECT GROUP_CONCAT(permissions.Class) as permissions 
// FROM permissions
// WHERE Not EXISTS 
// (SELECT PermissionId FROM user_permission 
// WHERE user_permission.PermissionId = permissions.id 
// AND user_permission.UserId =".$id.")";
// break;

// case "permissions":	
// $sql = "SELECT GROUP_CONCAT(permissions.Class) as permissions
// FROM `user_permission` 
// inner join  permissions  on  user_permission.PermissionId= permissions.id
// WHERE  user_permission.UserId='".$_POST['id']."'";
// break;



case "List":
$table =$_POST['Table'];
$sql = "SELECT * FROM $table where id = '".$_POST['id']."'";
break;

case "area":
    $table =$_POST['Table'];
    $sql = "SELECT * FROM $table where `data-id` = '".$_POST['id']."'";
break;

case "user":
$sql = "SELECT users.*
 FROM users 
 where users.id = '".$_POST['id']."'";
break;


}
$result_sql = SELECT_query($sql) ;
$row = mysqli_fetch_assoc($result_sql);

echo json_encode($row);
?>
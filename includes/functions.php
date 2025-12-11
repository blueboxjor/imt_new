<?php
include("db_function.php");
include("strings_en.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '-1');
error_reporting(E_ALL);

function Information ($table){
  global $conn;
  $query = "SELECT * FROM $table WHERE 1";
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_assoc($result);
  return $row;
}
function get_SpecificList($tbl,$colWhere,$value) {
  global $conn;
  $array=array();
 $query = "SELECT * from $tbl  where $colWhere='$value' ";
//  echo $query;
 $result=mysqli_query($conn,$query);
 $result=mysqli_query($conn,$query);
 while($row = mysqli_fetch_object($result)) {
       $array[] = $row;
   }
 return $array;
}
function GetAttachments($id,$type) {
  global $conn;
  $array = array();
  $where="" ;
  if($id !=0){
    $where = " and relatedId='$id' ";
  }
  $query = "SELECT *
  FROM attachments
  Where  typeId=$type  
  $where
  ORDER BY attachments.id ASC ";
  // echo $query;
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_object($result)) {
        $array[] = $row;
    }
  return $array;
}
function TableList($table,$order="ASC",$limit="") {
  global $conn;
  $array = array();
  $check = mysqli_query($conn,"SHOW COLUMNS FROM $table LIKE 'IsDeleted'");
  $exists = (mysqli_num_rows($check))?" Where IsDeleted='0' ":"";
  $query = "SELECT * FROM $table $exists Order By id $order $limit";
  // echo $query;
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_object($result)) {
        $array[] = $row;
    }
  return $array;
}
function breadcrumb(){
  global $StringArray;
  // from the url .. get the ename of page:
  $url = $_SERVER['REQUEST_URI'];
  $page_name = substr($url, strripos( $url , '/' )+1);
  if(strpos( $page_name , '?' ) > 0)
  $page_name = substr($page_name, 0 , strpos( $page_name , '?' ));
  if($page_name == 'homepage.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[0] .'</li>' ;
  if($page_name == 'business.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[4] .'</li>' ;
  if($page_name == 'product.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[5] .'</li>' ;
  if($page_name == 'banner.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[52] .'</li>' ;
  if($page_name == 'category.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[7] .'</li>' ;
  if($page_name == 'users.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[1] .'</li>' ;
  if($page_name == 'company_information.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[8] .'</li>' ;
// this code for attachment page
  if(isset($_GET['type']) && $_GET['type'] == 1){
    return '
  <li class="breadcrumb-item active"><a href="business.php">'.$StringArray[4] .'</a></li> 
  <li class="breadcrumb-item active">'.$StringArray[33].'</li>'; 
  }
  else if(isset($_GET['type']) && $_GET['type'] == 2){
    return '
  <li class="breadcrumb-item active"><a href="clients.php">'.$StringArray[6] .'</a></li> 
  <li class="breadcrumb-item active"><a href="client-profile.php?id='.$_GET['id'].'">'.get_column('clients','nameEn',$_GET['id']).'</a></li> 
  <li class="breadcrumb-item active">'.$StringArray[33].'</li>'; 
  }
  if($page_name == 'profile.php')
  return '<li class="breadcrumb-item active"> '.$StringArray[2] .'</li>' ;

}
function get_col($tbl,$col) {
  global $conn;
 $query = "SELECT $col as col from $tbl   ";
 $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 if(isset($row['col'])){
  return $row['col'];
 }
 else {
   return '';
 }
}
function get_column($tbl,$col,$id) {
  global $conn;
 $query = "SELECT $col as col from $tbl  where id='$id' ";
//  echo $query;
 $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 if(isset($row['col'])){
  return $row['col'];
 }
 else {
   return '';
 }
}
function check_to_delete($tbl,$col,$id){
  global $conn ;
  $sql=" SELECT * FROM $tbl where $col= '$id' " ;
  $result = mysqli_query($conn,$sql);
  $num_rows = mysqli_num_rows($result);
   if ( $num_rows == 0 ){
    return true ;
   }
  else{
    return false ;
  }
}
function get_temp(){
  $url = 'http://api.openweathermap.org/data/2.5/forecast?id=250441&APPid=6e9ef3d1330677e5e997c46fc1d76a0f';
 $raw_geocode = json_decode( file_get_contents( $url) );
 $temp = (int)$raw_geocode->list[0]->main->temp;
 $temp = $temp - 273;
   if($temp !=""){
     return($temp);
   }
   else {
     return("");
   }
 }
 function get_country(){
  $content = file_get_contents('http://api.openweathermap.org/data/2.5/forecast?id=250441&APPid=6e9ef3d1330677e5e997c46fc1d76a0f');
  $content_array=json_decode($content);
  if($content_array->city->name !=""){
    return($content_array->city->name);
  }
  else {
    return("Jordan");
  }
}
function get_report($sql) {
  global $conn;
  $array = array();
  $query = $sql;
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_object($result)) {
        $array[] = $row;
    }
  return $array;
}
function randomPassword() {
    $alphabet = '1234567890';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

function upload_img($file_org_name , $file_tmp_name){
  $target_dir =  PROJECT_ROOT . "uploads/";
  $file_name = basename($file_org_name) ;
  $ext = pathinfo($file_name, PATHINFO_EXTENSION);
  $target_file_name = uniqid(PROJECT_NAME, true) . '.' . $ext;
  $target_file = $target_dir .$target_file_name ;
  move_uploaded_file($file_tmp_name, $target_file);
     return $target_file_name;
}
function get_file_show($file_org_name) {
    $file_name = basename($file_org_name) ;
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    if($ext=='pdf'){
      return "pdf.png" ;
    }
        if($ext=='docx' || $ext=='doc'){
      return "word.png";
    }
        if($ext=='xlsx' ||  $ext=='xls'){
      return "excel.png";
    }
    if($ext =='png' ||$ext =='jpg' ||$ext == 'jpeg' ||$ext == 'gif' ||$ext == 'PNG' 
    ||$ext == 'JPG'||$ext == 'JPEG'||$ext == 'GIF'){
      return  $file_org_name;
    }
    if($ext =='MP4' ||  $ext =='MOV' || $ext =='WMV' || $ext =='MPEG-2' ||
     $ext =='mp4' ||  $ext =='mov' || $ext =='wmv' || $ext =='mpeg-2'){
    return "video.png";
  }
}
function get_file_extension($file_org_name) {
  $file_name = basename($file_org_name) ;
  $ext = pathinfo($file_name, PATHINFO_EXTENSION);
  if($ext=='pdf'){
    return 5 ;
  }
    if($ext=='docx' || $ext=='doc'){
      return 4;
    }
    if($ext=='xlsx' ||  $ext=='xls'){
      return 3;
    }
  if($ext =='png' ||$ext =='jpg' ||$ext == 'jpeg' ||$ext == 'gif' ||$ext == 'PNG' 
  ||$ext == 'JPG'||$ext == 'JPEG'||$ext == 'GIF'){
    return  1;
  }
  if($ext =='MP4' ||  $ext =='MOV' || $ext =='WMV' || $ext =='MPEG-2' ||
     $ext =='mp4' ||  $ext =='mov' || $ext =='wmv' || $ext =='mpeg-2'){
    return 2;
  }
}
function check_old_password($id ,$old_pass) {
  global $conn;
  $query= "SELECT * FROM users WHERE id='$id' AND Password='$old_pass'";
  $result = mysqli_query($conn,$query);
  if (mysqli_num_rows($result) > 0) {
      return true;
  }
  else {
    return false;
  }
}
function show_messages(){
     if(isset($_SESSION['exist_user'])){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>'.exist_user.'</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  </div>';
}
unset($_SESSION['exist_user']);
if(isset($_SESSION['password_wrong'])){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>'.password_wrong.'</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  </div>';
}
unset($_SESSION['password_wrong']);
 if(isset($_SESSION['no_user'])){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>'.no_user.'</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  </div>';
}
unset($_SESSION['no_user']);
if(isset($_SESSION['exist_phone'])){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>'.exist_phone.'</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  </div>';
}
unset($_SESSION['exist_phone']);
 if(isset($_SESSION['success_add'])){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>'.success_add.'</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  </div>';
}
unset($_SESSION['success_add']);
 if(isset($_SESSION['success_edit'])){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>'.success_edit.'</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  </div>';
}
unset($_SESSION['success_edit']);   
 if(isset($_SESSION['success_delete'])){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>'.success_delete.'</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  </div>';
}
unset($_SESSION['success_delete']);
  }
?>
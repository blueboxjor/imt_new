<?php 
$where = "local";
if($where == "local" ) {
    define("Root", "http://localhost/imt_new/");
    define("PROJECT_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/imt_new/");
    define("server","localhost");
    define("username","root");
    define("password", "");
    define("db_name", "imt_new");
}
else {
    define("Root", "https://vision.blueboxjo.com/");
    define("PROJECT_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/");
    define("server","198.38.84.39");
    define("username","leaders_vision");
    define("password", "@vision#2021");
    define("db_name", "leaders_vision");
}

define("UPLOADS",Root."uploads/");
define("IMAGES",Root."images/");
define("INCLUDES",Root."includes/");
define("ACTIONS",Root."actions/");
define("PDF",Root."pdf/");
define("ASSETS",Root."assets/");
define("PANEL_ASSETS",Root."panel_assets/");

define ('PROJECT_NAME', 'IMT');
define ('company_Name', 'BIOCARE');

define ('Email_Address', '');
define ('Phone', '');
define ('header', 'header.png');
define ('footer', 'footer.png');
define ('headerLogo', 'header.jpg');

define ('logo', 'logo.png');
define('default_img','user.png');
define('favicon','favicon.png');

define("DEBUG",false);
define("general_error","An error occurred for unknown reasons, please try again after 5 minutes.");
define("no_user","Username or password not found in the system");
define("exist_user","Username or email is already in use");
define("exist_phone","The phone number is used by another user");
define("success_add","Added successfully");
define("success_edit","Edited successfully");
define("success_delete","Deleted successfully");
define("password_wrong","The current password is incorrect");

date_default_timezone_set('Asia/Amman');

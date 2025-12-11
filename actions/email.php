<?php 
session_start(); 
    function email($name,$email, $subject, $message){
    // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: customerservice@biocareltd.com' . "\r\n";
        $to ="customerservice@biocareltd.com";
        $subject ="GET IN TOUCH Form [Website]";
        $body = "Name  :".$name." <br>
                Email  :".$email." <br>
                Subject  :".$subject." <br>
                Message  :".$message." <br>
        ";
        mail($to, $subject, $body,$headers);
    }
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
email($name,$email,$subject, $message);
// var_dump($_POST['message']);
// die;
$_SESSION['email']=1;
header('location: '.$_SERVER['HTTP_REFERER']);
?>
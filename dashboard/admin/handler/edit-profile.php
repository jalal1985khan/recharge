<?php
session_start();
require("../../includes/config.php");
require("../../includes/function.php");

$res = $con->query("SELECT * FROM `websetting` WHERE ID = 1");
$row = $res->fetch_assoc();
    
$weburl = $row['WEBURL'];
$webname = $row['WEBSITENAME']; 

if(isset($_POST['sendotp'])){
    $admin = $con->query("select * from admin where ID='1'")->fetch_assoc();
    $admin_num = $admin['MOBILE'];
    $otp = mt_rand(10000 , 100000);
  	$message = "Dear%20Admin%2C%20Your%20Password%20for%20reset%20password%20in%20$webname%20is%20$otp.%20By%20$weburl";
 	$message2 = "Dear Admin, Your Password for reset password in $webname is $otp.By $weburl";
    SendMessage($admin_num,$message);
    SendMail($admin_num,$message2);
    $_SESSION['otp'] = $otp;
    echo $admin_num;
}

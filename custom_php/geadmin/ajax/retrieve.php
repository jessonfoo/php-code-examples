<?php
include '../config.php';

if (validate()==FALSE)
{
echo "Please enter your Email Address";
$error=3;
} else

{



set_data("USERS,email_req='$_POST[email_req]'");

if (data('email_req')==FALSE) $error=1;
}

if ($error==0) {


$msg="Here is your password: ".data('password_req');


mail(data('email_req'),"Password Reset",$msg);


    echo "Email Sent, Please check your spam box";
}
if ($error==1) echo "That email address was not found";



?>
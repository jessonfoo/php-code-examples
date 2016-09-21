<?php
include '../config.php';
set_data("REGISTER");

$rid=create_data($_POST);
$mess= "<div align=center>Thank you for Registering<br>";
$mess.= "<p>Your Registration number is ".$rid.'</p>';
$mess.= '<p>Please check your email for confirmation</p></div>';
$mess.='<p>'.$_POST[event].'</p>';
echo $mess;

//account created    

set_data("USERS,id=$_SESSION[userid]");

$to = data('email_req');
$subject = "Attest To It Registration Confirmation";
$message = $mess;
$from = "no-reply@attesttoit.com";
$headers = "From: " .$from. "\r\n";
$headers .= "Reply-To: ".$from. "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);
//echo "Mail Sent.";


?>
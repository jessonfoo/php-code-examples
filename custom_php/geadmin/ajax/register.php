<?php
include '../config.php';
set_data("USERS");
if (validate()==FALSE)
{
$error=1;    
echo "<p>Please enter all of the required information</p>";    
} 


if (isset($_POST[password2]))
{
    if ($_POST[password2]<>$_POST[password_req])
    {
    $error=1;
    echo "<p>Passwords don't match</p>";
    }
}


if (unique_data('email_req')==FALSE and $_POST[email_req]<>'')
{
$error=1;
echo "<p>Sorry, there is already an account associated with this email address</p>";    
} 


if ($error==0){

$theid=create_data($_POST);
$_SESSION[userid]=$theid;
$_SESSION[usertype]=$_POST[usertype];

if ($_POST[usertype]<>'coach'){



$msg='Welcome to ATTESTTOIT '.$_POST[first_name_req].'<br>

You have joined Attesttoit.com an exciting community of recruiters and athletes around the world, who have all one thing in common – wanting to play college athletics.<br>
Click to start becoming verified : <a href="http://www.attesttoit.com">www.attesttoit.com</a><br>
If you have any inquiries or would like to delete your account email contactus@attesttoit.com<br><br>
Username: '.$_POST[email_req].'<br>
Password: '.$_POST[password_req].'<br>

';

$to = $_POST[email_req];
$subject = "Attest To It Sign-Up Confirmation";
$message = $msg;
$from = "no-reply@attesttoit.com";
$headers = "From: " .$from. "\r\n";
$headers .= "Reply-To: ".$from. "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);

?>
<script>
window.location="index.php?p=dashboard";
</script>
<?php   
//account created    
}else
{
    echo 'Thank you for registering, please wait for your account to be verified.';
}
} 
?>
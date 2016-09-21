<?php
include '../config.php';

if (validate()==FALSE)
{
echo "Please enter your Email and Password";    
} else

{



set_data("USERS,email_req='$_POST[email_req]'");

if (data('email_req')=='FALSE') $error=1;

if ($_POST[password_req]==data('password_req'))
{
   
   if ($error<>1) 
  
  

   $_SESSION[useremail]=$_POST[email_req];
   $_SESSION[userid]=data('id');
   $_SESSION[usertype]=data('usertype');
   



if ($_SESSION[useremail]=='admin'){
      $_SESSION[usertype]='coach';
?>
   <script>
window.location="index.php?p=admin"
</script>
   <?php    
    
}


if ($_SESSION[useremail]=='attest'){
?>
   <script>
window.location="index.php?p=attestor"
</script>
   <?php    
    
}
else {
   
   if (data(usertype)=='athlete'){
   
   ?>
   <script>
window.location="index.php?p=dashboard"
</script>
   <?php
   }
   
   if (data(usertype)=='coach'){
       
       if (data(accepted)==1){
           ?>
   <script>
window.location="index.php?p=dashboard"
</script>
   <?php   
       } else
       {
           echo 'Your account is being verified, please wait for approval.';
       }
       
       
   }
   
}   
}
else
{

    $error=1;
}


}

if ($error==1) echo "Sorry, wrong username or password";
?>
<?php
include '../config.php';
set_data("VIDEOS");
if (validate()==FALSE)
{
$error=1;    
echo '<p style="color:red;"><br>Please enter a video link</p>';    
} 



if ($error==0){

create_data($_POST);
echo '<p style="color:red;">Video Added</p>';    
//account created    
}

?>
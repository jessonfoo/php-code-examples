<?php
include '../../config.php';
if (validate()==FALSE)
{
$error=1;    
echo "<p>Please enter all of the required information</p>";    
} 


if ($error==0){
set_data('MAIL_DATA');
create_data($_POST);
echo "Mail Successfully Created";    
//account created    
}

?>
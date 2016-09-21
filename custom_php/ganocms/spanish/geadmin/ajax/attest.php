<?php
include '../config.php';
set_data("ATTESTED");


create_data($_POST);
echo "<script>alert('Stat Updated');</script>";    
//account created    

?>
<?php
include '../config.php';
set_data("MESSAGES");

create_data($_POST);
  
//account created    

if ($_POST[player_id]<>$_POST[sentby]){
    set_data("USERS,id=".$_POST[player_id]);
    $to=data(email_req);
}

if ($_POST[coach_id]<>$_POST[sentby]){
    set_data("USERS,id=".$_POST[coach_id]);
    $to=data(email_req);
}



$subject = "You have a new message";
$message = "Please log in to you Attesttoit.com account to view your message.";
$from = "no-reply@attesttoit.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

echo "Message Sent";  
?>
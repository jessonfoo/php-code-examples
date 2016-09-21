<?php

$to = "attesttoit@gmail.com";
$subject = "Attesttoit Contact Form";
 foreach ($_POST as $key => $value) {
 $message.=$key.':'.$value." \r\n";
     
 }
$from = "no-reply@attesttoit.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";



?>
<p><span class="greenbuttonsm" style="width:300px;">Thank You! Your inquiry has been sent.</span></p>
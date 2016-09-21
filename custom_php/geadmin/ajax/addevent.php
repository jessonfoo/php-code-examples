<?php
include '../config.php';
set_data("EVENTS,player_id=$_SESSION[userid]");
create_data($_POST);
 
$allevents=collection();
foreach ($allevents as $event)
{
    echo '<p>'.$event[eventname].' - '.$event[eventdate].'@'.$event[eventtime].' Location: '.$event[location].'</p>';
}


?>
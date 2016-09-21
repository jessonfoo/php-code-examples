<?php
error_reporting(0);
ini_set('display_errors', '0');
$con=mysqli_connect("localhost","gano_db","SQLpass123!@","gano_db");
include 'geadmin/nvg/nvg_data.php';
set_data("EVENTS,event_date='$_POST[thedate]'");
$ev=collection();
//echo $_POST[thedate];
foreach ($ev as $e){
echo '<div class="listevent"><font style="font-size:17px">'.$e[location].'</font><br>';
echo '<font style="font-size:16px">'.$e[headline].'</font></div>';
}
?>

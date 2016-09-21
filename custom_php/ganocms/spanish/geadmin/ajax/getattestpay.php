<?php
session_save_path('/home/attestoit/php_sessions');
session_start();
if ($_POST[fn]==''){
    
$_SESSION[orderdata]=$_POST;


    
?>
<h2>Due Today: $17.99+tax</h2>
<h3>Billing Information</h3>
<form action="" method="post">
<p><input type="text" name="fn" placeholder="First Name"></p><p><input type="text" name="ln" placeholder="Last Name"></p>
<p><input type="text" name="street" placeholder="Address"></p>
<p><input type="text" name="city" placeholder="City"></p><p><input type="text" name="state" placeholder="State"></p><p><input type="text" name="zip" placeholder="Zip"></p>
<input type="submit" name="submit" value="Continue" class="greenbuttonsm">



    
</form>

<?php     
} 
?>


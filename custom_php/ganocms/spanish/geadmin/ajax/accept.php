<?php
include '../config.php';
set_data("USERS,id=$_POST[id]");





update_data($_POST);
create_form('accept'.$_POST[id],'accept.php','acceptres'.$_POST[id]);


if ($_POST[accepted]==1){
?>
<input type="hidden" name="id" value="<?php echo $_POST[id];?>">
<input type="hidden" name="accepted" value="0">
<input type="submit" style="font-size:14px; width:70px;padding:3px; " class="redbuttonsm" anme="submit" value="DEACTIVATE">
<?php
end_form();
} else {
    ?>
 <input type="hidden" name="id" value="<?php echo $_POST[id];?>">
<input type="hidden" name="accepted" value="1">
<input type="submit" style="font-size:14px; width:70px;padding:3px; " class="greenbuttonsm" anme="submit" value="ACCEPT">
<?php
end_form();   
}
//account created  
?>  

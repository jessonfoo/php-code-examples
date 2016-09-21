<?php
include '../config.php';

set_data("ABILITIES");
$lid=create_data($_POST);
set_data("ABILITIES,player_id=$_SESSION[userid]");
$GLOBALS[newest]=0;
update_data('newest');
set_data("ABILITIES,id=$lid");
$GLOBALS[newest]=1;
update_data('newest');
?>

<script>
    alert ('Abilities Updated');
</script>
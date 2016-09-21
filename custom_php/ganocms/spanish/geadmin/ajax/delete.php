<?php
include '../config.php';

set_data($_POST[table].','.'id='.$_POST[id]);



delete_data();

?>
<script>
    location.reload();
</script>
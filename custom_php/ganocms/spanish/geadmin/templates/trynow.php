<style type="text/css">
.section {
display:block;    
}

h3 {
    cursor: pointer;
}    
</style>


<?php


if (isset($_POST[savetry])){

set_data("TEXT_DATA,location='trynow'");    
update_data($_POST);

$message="CONTENT SAVED";    
}



if (isset($message)) {
?>

<script>
alert ('<?php echo $message;?>');    
</script> <?php } ?>
<div class="wrapper">
<h2>TRY Now Page</h2>
<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Sample Pack Content</h3> 
<div class="section" id="map">

<form action="" method="post"enctype="multipart/form-data">

<?php set_data("TEXT_DATA,location='trynow'");?>
<textarea name="content" rows=5 cols=60><?php echo data(content);?></textarea>
<p><input type="submit" name="savetry" value="SAVE"></p>
</form>
</div> 

</div>    



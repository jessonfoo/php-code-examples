<style type="text/css">
.section {
display:none;    
}

.section2 {
display:none;    
}
h3 {
    cursor: pointer;
}    
</style>


<?php
if (isset($_POST[saveevent])){
//$type="slider";
//include 'uploadimage.php';

set_data("EVENTS,id=$_POST[eid]");    
//$_POST[image]=$target_file;
update_data($_POST);

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}


$message="UPDATED";
}


if (isset($_POST[addevent])){
//$type="slider";
//include 'uploadimage.php';

set_data('EVENTS');    
//$_POST[image]=$target_file;
$newid=create_data($_POST);
set_data("EVENTSS,id=$newid");

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}

$message="ADDED";
}



if (isset($_POST[savetraining])){
//$type="slider";
//include 'uploadimage.php';

set_data("NEWS,id=$_POST[tid]");    
//$_POST[image]=$target_file;
update_data($_POST);

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}


$message="UPDATED";
}


if (isset($_POST[addtraining])){
//$type="slider";
//include 'uploadimage.php';

set_data('NEWS');    
//$_POST[image]=$target_file;
$newid=create_data($_POST);
set_data("NEWS,id=$newid");

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}

$message="ADDED";
}


if (isset($_POST[remove])){

if (isset($_POST[slideid])) {
set_data('SLIDER,id='.$_POST[slideid]);
delete_data();
$message="SLIDE DELETED";
}

if (isset($_POST[tid])) {
set_data('NEWS,id='.$_POST[tid]);
delete_data();
$message="DELETED";
}
  
if (isset($_POST[eid])) {
set_data('EVENTS,id='.$_POST[eid]);
delete_data();
$message="DELETED";
}  
    
}

if (isset($_POST[addslide])){
$type="slider";
include 'uploadimage.php';

set_data('SLIDER');    
$_POST[image]=$target_file;
create_data($_POST);
$message="SLIDE ADDED";
}

if (isset($_POST[saveslide])){
$type="slider";
include 'uploadimage.php';

set_data("SLIDER,id=$_POST[slideid]");    
$_POST[image]=$target_file;
update_data($_POST);
$message="SLIDE SAVED";
}


if (isset($message)) {
?>

<script>
alert ('<?php echo $message;?>');    
</script> <?php } ?>
<div class="wrapper">
<h2>News & Events</h2>
<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Top Slider</h3> 
<div class="section" id="opslider">
<?php 
set_data("SLIDER,location='news'");
$slides=collection();
?>


<?php 
foreach ($slides as $slide){
?>
<table cellpadding=10><tr><td>
    <form action="" method="post"enctype="multipart/form-data">
<input type="hidden" name="slideid" value="<?php echo $slide[id];?>">    
Change Image:<input type="file" name="sliderimage" value="<?php echo $slide[image];?>"><input type="submit" name="saveslide" value="SAVE SLIDE"><input type="submit" class="delete" name="remove" value="DELETE" onclick="return confirm('Are you sure you want to delete this item?')">
</form>
</td><td>
<?php if ($slide[image]<>''){?><img height=100 src="<?php echo $slide[image];?>"><?php }?>
</td>
</table>
<?php } ?>

<form action="" method="post"enctype="multipart/form-data">

<input type="hidden" name="location" value="news">  
<p>Add Slide (JPG or MP4):<input type="file" name="sliderimage"><input type="submit" name="addslide" value="SAVE SLIDE"></p>

</form>
</div>    
</div>

<!-- ===========================================================================================================================  -->
<div class="box">
<h3>News Posts</h3> 
<?php set_data("NEWS");
$trainings=collection();

?>
<div class="section" id="training">

<?php foreach ($trainings as $training)
{
    

?>
<div>
<h4 class="ti"><?php echo $training[headline];?></h4>
<div class="section2">
<form action="" method="post"enctype="multipart/form-data">
<input type="submit" class="delete" name="remove" value="DELETE" onclick="return confirm('Are you sure you want to delete this item?')">
<input type="hidden" name="tid" value="<?php echo $training[id];?>">
<h4>Headline</h4>
<p><input type="text" name="headline" value="<?php echo $training[headline];?>"></p>

<h4>Published Date</h4>
<p><input type="date" name="published" value="<?php echo $training[published];?>"></p>
<h4>Content</h4>
<textarea name="content" rows=5 cols=60><?php echo $training[content];?></textarea>
<h4>Image</h4>
<?php if ($training[image]<>''){?><img height=100 src="<?php echo $training[image];?>"><?php }?>

<p><input type="file" name="sliderimage"></p>
<h4>Video Link</h4>
<p><input type="text" name="video" value="<?php echo $training[video];?>"></p>

<input type="submit" name="savetraining" value="SAVE">
</form>
</div>
</div>
<?php }?>






<H4>Add News</H4>
<form action="" method="post"enctype="multipart/form-data">
<h4>Headline</h4>
<p><input type="text" name="headline"></p>
<h4>Published Date</h4>
<p><input type="date" name="published" ></p>

<h4>Content</h4>
<textarea name="content" rows=5 cols=60></textarea>
<h4>Image</h4>
<p><input type="file" name="sliderimage"></p>
<h4>Video Link</h4>
<p><input type="text" name="video" ></p>

<input type="submit" name="addtraining" value="ADD NEWS">
</form>
</div> 
</div> 

<!-- ===========================================================================================================================  -->

<div class="box">
<h3>Events</h3> 
<?php set_data("EVENTS");
$trainings=collection();

?>
<div class="section" id="resource">

<?php foreach ($trainings as $training)
{
    

?>
<div>
<h4 class="ti"><?php echo $training[headline];?></h4>
<div class="section2">
<form action="" method="post"enctype="multipart/form-data">
<input type="submit" class="delete" name="remove" value="DELETE" onclick="return confirm('Are you sure you want to delete this item?')">
<input type="hidden" name="eid" value="<?php echo $training[id];?>">
<h4>Headline</h4>
<p><input type="text" name="headline" value="<?php echo $training[headline];?>"></p>
<h4>Event Date</h4>
<p><input type="date" name="event_date" value="<?php echo $training[event_date];?>"></p>
<h4>Location</h4>
<p><input type="text" name="location" value="<?php echo $training[location];?>"></p>
<h4>Content</h4>
<textarea name="content" rows=5 cols=60><?php echo $training[content];?></textarea>
<h4>Image</h4>
<?php if ($training[image]<>''){?><img height=100 src="<?php echo $training[image];?>"><?php }?>

<p><input type="file" name="sliderimage"></p>
<h4>Video Link</h4>
<p><input type="text" name="video" value="<?php echo $training[video];?>"></p>

<input type="submit" name="saveevent" value="SAVE">
</form>
</div>
</div>
<?php }?>






<H4>Add News</H4>
<form action="" method="post"enctype="multipart/form-data">
<h4>Headline</h4>
<p><input type="text" name="headline"></p>
<h4>Event Date</h4>
<p><input type="date" name="event_date" ></p>
<h4>Location</h4>
<p><input type="text" name="location"></p>
<h4>Content</h4>
<textarea name="content" rows=5 cols=60></textarea>
<h4>Image</h4>
<p><input type="file" name="sliderimage"></p>
<h4>Video Link</h4>
<p><input type="text" name="video" ></p>

<input type="submit" name="addevent" value="ADD EVENT">
</form>
</div> 
</div> 


</div>



<script>

$('.ti').click(function(){

$(this).parent().find('.section2').slideToggle();    
});


$('.box h3').click(function(){

$(this).parent().find('.section').slideToggle();    
});    
</script>
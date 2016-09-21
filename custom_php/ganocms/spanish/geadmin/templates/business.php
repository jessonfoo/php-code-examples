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

if (isset($_POST[savetraining])){
//$type="slider";
//include 'uploadimage.php';

set_data("TRAINING,id=$_POST[tid]");    
//$_POST[image]=$target_file;
update_data($_POST);

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}


for ($i=0;$i<=5;$i++){
$x='file'.$i;
if ($_FILES[$x]["name"]<>''){
$type="file";
$whichfile=$x;
include 'uploadfile.php';
$_POST[$x]=$target_file;
update_data($_POST);
}
}
$message="UPDATED";
}


if (isset($_POST[addtraining])){
//$type="slider";
//include 'uploadimage.php';

set_data('TRAINING');    
//$_POST[image]=$target_file;
$newid=create_data($_POST);
set_data("TRAINING,id=$newid");

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}


for ($i=0;$i<=5;$i++){
$x='file'.$i;
if ($_FILES[$x]["name"]<>''){
$type="file";
$whichfile=$x;
include 'uploadfile.php';
$_POST[$x]=$target_file;
update_data($_POST);
}
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
set_data('TRAINING,id='.$_POST[tid]);
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
<h2>Business Page</h2>
<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Top Slider</h3> 
<div class="section" id="opslider">
<?php 
set_data("SLIDER,location='business'");
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

<input type="hidden" name="location" value="business">  
<p>Add Slide (JPG or MP4):<input type="file" name="sliderimage"><input type="submit" name="addslide" value="SAVE SLIDE"></p>

</form>
</div>    
</div>

<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Training Items</h3> 
<?php set_data("TRAINING,type='training'");
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
<h4>Position</h4>
<p><input type="text" name="position" value="<?php echo $training[position];?>"></p>

<p><input type="text" name="headline" value="<?php echo $training[headline];?>"></p>
<h4>Headline</h4>
<p><input type="text" name="headline" value="<?php echo $training[headline];?>"></p>
<h4>Content</h4>
<textarea name="content" rows=5 cols=60><?php echo $training[content];?></textarea>
<h4>Image</h4>
<?php if ($training[image]<>''){?><img height=100 src="<?php echo $training[image];?>"><?php }?>

<p><input type="file" name="sliderimage"></p>
<h4>Video Link</h4>
<p><input type="text" name="video" value="<?php echo $training[video];?>"></p>
<input type="hidden" name="type" value="training">
<h4>File Attachements</h4>
<p>File #1 - <a target="_blank" href="<?php echo $training[file1];?>"><?php echo $training[file1];?></a> New File: <input type="file" name="file1"> </p>
<p>File #2 - <a target="_blank" href="<?php echo $training[file2];?>"><?php echo $training[file2];?></a> New File: <input type="file" name="file2"></p>
<p>File #3 - <a target="_blank" href="<?php echo $training[file3];?>"><?php echo $training[file3];?></a> New File: <input type="file" name="file3"></p>
<p>File #4 - <a target="_blank" href="<?php echo $training[file4];?>"><?php echo $training[file4];?></a> New File: <input type="file" name="file4"></p>
<p>File #5 - <a target="_blank" href="<?php echo $training[file5];?>"><?php echo $training[file5];?></a> New File: <input type="file" name="file5"></p>

<input type="submit" name="savetraining" value="SAVE">
</form>
</div>
</div>
<?php }?>






<H4>Add New Training Item</H4>
<form action="" method="post"enctype="multipart/form-data">
<h4>Position</h4>
<p><input type="text" name="position"></p>
<h4>Headline</h4>
<p><input type="text" name="headline"></p>
<h4>Content</h4>
<textarea name="content" rows=5 cols=60></textarea>
<h4>Image</h4>
<p><input type="file" name="sliderimage"></p>
<h4>Video Link (YouTube ID example:2bK9ah8Pi8U)</h4>
<p><input type="text" name="video" ></p>
<input type="hidden" name="type" value="training">
<h4>File Attachements</h4>
<p>File #1 <input type="file" name="file1"> </p>
<p>File #2 <input type="file" name="file2"> </p>
<p>File #3 <input type="file" name="file3"> </p>
<p>File #4 <input type="file" name="file4"> </p>
<p>File #5 <input type="file" name="file5"> </p>

<input type="submit" name="addtraining" value="ADD TRAINING ITEM">
</form>
</div> 
</div> 

<!-- ===========================================================================================================================  -->

<div class="box">
<h3>Resource Items</h3> 
<?php set_data("TRAINING,type='resource'");
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
<input type="hidden" name="tid" value="<?php echo $training[id];?>">
<h4>Position</h4>
<p><input type="text" name="position" value="<?php echo $training[position];?>"></p>
<h4>Headline</h4>

<p><input type="text" name="headline" value="<?php echo $training[headline];?>"></p>
<h4>Content</h4>
<textarea name="content" rows=5 cols=60><?php echo $training[content];?></textarea>
<h4>Image</h4>
<?php if ($training[image]<>''){?><img height=100 src="<?php echo $training[image];?>"><?php }?>

<p><input type="file" name="sliderimage"></p>
<h4>Video Link</h4>
<p><input type="text" name="video" value="<?php echo $training[video];?>"></p>
<input type="hidden" name="type" value="resource">
<h4>File Attachements</h4>
<p>File #1 - <a target="_blank" href="<?php echo $training[file1];?>"><?php echo $training[file1];?></a> New File: <input type="file" name="file1"> </p>
<p>File #2 - <a target="_blank" href="<?php echo $training[file2];?>"><?php echo $training[file2];?></a> New File: <input type="file" name="file2"></p>
<p>File #3 - <a target="_blank" href="<?php echo $training[file3];?>"><?php echo $training[file3];?></a> New File: <input type="file" name="file3"></p>
<p>File #4 - <a target="_blank" href="<?php echo $training[file4];?>"><?php echo $training[file4];?></a> New File: <input type="file" name="file4"></p>
<p>File #5 - <a target="_blank" href="<?php echo $training[file5];?>"><?php echo $training[file5];?></a> New File: <input type="file" name="file5"></p>

<input type="submit" name="savetraining" value="SAVE">
</form>
</div>
</div>
<?php }?>






<H4>Add New Resource Item</H4>
<form action="" method="post"enctype="multipart/form-data">
<h4>Position</h4>
<p><input type="text" name="position" ></p>
<h4>Headline</h4>
<p><input type="text" name="headline"></p>
<h4>Content</h4>
<textarea name="content" rows=5 cols=60></textarea>
<h4>Image</h4>
<p><input type="file" name="sliderimage"></p>
<h4>Video Link</h4>
<p><input type="text" name="video" ></p>
<input type="hidden" name="type" value="resource">
<h4>File Attachements</h4>
<p>File #1 <input type="file" name="file1"> </p>
<p>File #2 <input type="file" name="file2"> </p>
<p>File #3 <input type="file" name="file3"> </p>
<p>File #4 <input type="file" name="file4"> </p>
<p>File #5 <input type="file" name="file5"> </p>

<input type="submit" name="addtraining" value="ADD RESOURCE ITEM">
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
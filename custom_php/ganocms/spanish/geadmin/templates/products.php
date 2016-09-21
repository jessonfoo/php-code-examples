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

if (isset($_POST[savecontent])){
set_data("TEXT_DATA,location='sample'");
update_data($_POST);
$message="UPDATED";

    
}


if (isset($_POST[saveimages])){
//$type="slider";
//include 'uploadimage.php';

set_data("IMAGE_DATA,location='products2'");    
//$_POST[image]=$target_file;
update_data($_POST);


set_data("IMAGE_DATA,location='products1'");    


if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[filename]=$target_file;
update_data($_POST);
}

if ($_FILES["sliderimage2"]["name"]<>''){
$type="image";
$_FILES["sliderimage"]=$_FILES["sliderimage2"];
include 'uploadimage.php';
$_POST[frontimage]=$target_file;
update_data($_POST);
}


if ($_FILES["filelink"]["name"]<>''){
$type="pdf";
$_FILES["sliderimage"]=$_FILES["filelink"];
include 'uploadimage.php';
$_POST[filelink]=$target_file;
update_data($_POST);
}

$message="UPDATED";
}


if (isset($_POST[savetraining])){
//$type="slider";
//include 'uploadimage.php';

set_data("PRODUCTS,id=$_POST[tid]");    
//$_POST[image]=$target_file;
update_data($_POST);

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}

if ($_FILES["sliderimage2"]["name"]<>''){
$type="image";
$_FILES["sliderimage"]=$_FILES["sliderimage2"];
include 'uploadimage.php';
$_POST[frontimage]=$target_file;
update_data($_POST);
}

if ($_FILES["filelink"]["name"]<>''){
$type="pdf";
$_FILES["sliderimage"]=$_FILES["filelink"];
include 'uploadimage.php';
$_POST[filelink]=$target_file;
update_data($_POST);
}

$message="UPDATED";
}


if (isset($_POST[addtraining])){
//$type="slider";
//include 'uploadimage.php';

set_data('PRODUCTS');    
//$_POST[image]=$target_file;
$newid=create_data($_POST);
set_data("PRODUCTS,id=$newid");

if ($_FILES["sliderimage"]["name"]<>''){
$type="image";

include 'uploadimage.php';
$_POST[image]=$target_file;
update_data($_POST);
}


if ($_FILES["sliderimage2"]["name"]<>''){
$type="image";
$_FILES["sliderimage"]=$_FILES["sliderimage2"];
include 'uploadimage.php';
$_POST[frontimage]=$target_file;
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
set_data('PRODUCTS,id='.$_POST[tid]);
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
<h2>Gano Excel Products</h2>
<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Sample Content</h3> 
<div class="section" id="opcontent">
<?php 
set_data("TEXT_DATA,location='sample'");
?>


<?php 

?>


<form action="" method="post"enctype="multipart/form-data">

<p><textarea rows=8 cols=60 name="content"><?php echo data(content);?></textarea></p>

<input type="submit" name="savecontent" value="SAVE">
</form>
</div>    
</div>


<div class="box">
<h3>Sample Slider (1647x917)</h3> 
<div class="section" id="xopslider">
<?php 
set_data("SLIDER,location='sample'");
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
<img height=100 src="<?php echo $slide[image];?>">
</td>
</table>
<?php } ?>

<form action="" method="post"enctype="multipart/form-data">

<input type="hidden" name="location" value="sample">  
<p>Add Slide (JPG or MP4):<input type="file" name="sliderimage"><input type="submit" name="addslide" value="SAVE SLIDE"></p>

</form>
</div>    
</div>

<div class="box">
<h3>Top Slider</h3> 
<div class="section" id="opslider">
<?php 
set_data("IMAGE_DATA,location='products1'");
?>


<?php 

?>


<form action="" method="post"enctype="multipart/form-data">
<h4>Image Placeholder</h4>
<img height= 100 src="<?php echo data(filename);?>">
<p>File Name:<input type="file" name="sliderimage"></p>

<h4>Video Link (YouTube ID example:2bK9ah8Pi8U)</h4>
<?php set_data("IMAGE_DATA,location='products2'");?>

<p><input type="text" name="filename" value="<?php echo data(filename);?>"></p>

<input type="submit" name="saveimages" value="SAVE">
</form>
</div>    
</div>

<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Products</h3> 
<?php set_data("PRODUCTS");
$trainings=collection();

?>
<div class="section" id="training">

<?php foreach ($trainings as $training)
{
    

?>
<div>
<h4 class="ti"><?php echo $training[title];?></h4>
<div class="section2">
<form action="" method="post"enctype="multipart/form-data">
<input type="submit" class="delete" name="remove" value="DELETE" onclick="return confirm('Are you sure you want to delete this item?')">
<input type="hidden" name="tid" value="<?php echo $training[id];?>">
<h4>Headline</h4>
<p><input type="text" name="title" value="<?php echo $training[title];?>"></p>

<h4>Description</h4>
<textarea name="description" rows=5 cols=60><?php echo $training[description];?></textarea>

<h4>Nutrition</h4>
<textarea name="nutrition" rows=5 cols=60><?php echo $training[nutrition];?></textarea>

<h4>Disclaimer</h4>
<textarea name="disclaimer" rows=5 cols=60><?php echo $training[disclaimer];?></textarea>

<h4>Category</h4>
<input type="radio" name="category" value="GANO DAILY" <?php if ($training[category]=='GANO DAILY')echo 'checked';?>>Gano Daily &nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="category" value="GANO CAFE" <?php if ($training[category]=='GANO CAFE')echo 'checked';?>>Gano Cafe

<h4>Image</h4>
<?php if ($training[image]<>''){?><img height=100 src="<?php echo $training[image];?>"><?php }?>

<p><input type="file" name="sliderimage"></p>

<h4>Mosaic Image</h4>
<?php if ($training[frontimage]<>''){?><img height=100 src="<?php echo $training[frontimage];?>"><?php }?>

<p><input type="file" name="sliderimage2"></p>


<h4>FILE LINK</h4>
<?php if ($training[filelink]<>''){?><?php echo $training[filelink];?><?php }?>

<p><input type="file" name="filelink"></p>


<input type="submit" name="savetraining" value="SAVE">
</form>
</div>
</div>
<?php }?>






<H4>Add New Product</H4>
<form action="" method="post"enctype="multipart/form-data">
<h4>Headline</h4>
<p><input type="text" name="title"></p>

<h4>Description</h4>
<textarea name="description" rows=5 cols=60></textarea>

<h4>Nutrition</h4>
<textarea name="nutrition" rows=5 cols=60></textarea>

<h4>Disclaimer</h4>
<textarea name="disclaimer" rows=5 cols=60></textarea>

<h4>Category</h4>
<input type="radio" name="category" value="GANO DAILY">Gano Daily &nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="category" value="GANO CAFE">Gano Cafe

<h4>Image</h4>


<p><input type="file" name="sliderimage"></p>

<h4>Mosaic Image</h4>


<p><input type="file" name="sliderimage2"></p>


<input type="submit" name="addtraining" value="ADD PRODUCT">
</div> 
</div> 

<!-- ===========================================================================================================================  -->




</div>



<script>

$('.ti').click(function(){

$(this).parent().find('.section2').slideToggle();    
});


$('.box h3').click(function(){

$(this).parent().find('.section').slideToggle();    
});    
</script>
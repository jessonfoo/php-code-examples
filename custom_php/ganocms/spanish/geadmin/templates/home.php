<style type="text/css">
.section {
display:none;    
}

h3 {
    cursor: pointer;
}    
</style>


<?php


if (isset($_POST[savesys])){

set_data("TEXT_DATA,location='sys'");    
update_data($_POST);
set_data("TEXT_DATA,location='comp'");
$_POST[content]=$_POST[content2];
update_data($_POST);

$message="CONTENT SAVED";    
}


if (isset($_POST[saveos])){

set_data("TEXT_DATA,location='os'");    
update_data($_POST);


if ($_FILES["sliderimage"]["name"]<>''){

$type="image";
include 'uploadimage.php';

$_POST[filename]=$target_file;
set_data("IMAGE_DATA,location='os'");    
update_data($_POST);
}

$message="CONTENT SAVED";    
}


if (isset($_POST[savemap])){

set_data("TEXT_DATA,location='map'");    
update_data($_POST);

$message="CONTENT SAVED";    
}


if (isset($_POST[savelwt])){

set_data("TEXT_DATA,location='lwt'");    
update_data($_POST);

$message="CONTENT SAVED";    
}


if (isset($_POST[savepro])){


set_data("TEXT_DATA,location='pro1'");    
update_data($_POST);

$_POST[content]=$_POST[content2];
set_data("TEXT_DATA,location='pro2'");    
update_data($_POST);


if ($_FILES["sliderimage"]["name"]<>''){
$type="image";
include 'uploadimage.php';

$_POST[filename]=$target_file;

set_data("IMAGE_DATA,location='pro1'");    
update_data($_POST);
}
$message="CONTENT SAVED";    
}


if (isset($_POST[saveop])){

set_data("TEXT_DATA,location='op1'");    
update_data($_POST);
set_data("IMAGE_DATA,location='op1'");    
update_data($_POST);
$message="CONTENT SAVED";    
}


if (isset($_POST[remove])){

if (isset($_POST[slideid])) {
set_data('SLIDER,id='.$_POST[slideid]);
delete_data();
$message="SLIDE DELETED";
}
    
}

if (isset($_POST[addslide])){
$type="slider";
include 'uploadimage.php';

set_data('SLIDER');    
$_POST[image]=$target_file;
create_data($_POST);
}


if (isset($_POST[addslide2])){
$type="slider";
include 'uploadimage.php';

set_data('SLIDER');    
$_POST[image]=$target_file;
create_data($_POST);
}


if (isset($message)) {
?>

<script>
alert ('<?php echo $message;?>');    
</script> <?php } ?>
<div class="wrapper">
<h2>Opportunity Page</h2>
<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Top Slider (1900x700)</h3> 
<div class="section" id="opslider">
<?php 
set_data("SLIDER,location='opportunity1'");
$slides=collection();
?>


<?php 
foreach ($slides as $slide){
?>
<table cellpadding=10><tr><td>
    <form action="" method="post"enctype="multipart/form-data">
<input type="hidden" name="slideid" value="<?php echo $slide[id];?>">    
Change Image:<input type="file" name="sliderimage" value="<?php echo $slide[image];?>"><input type="submit" name="addslide" value="SAVE SLIDE"><input type="submit" class="delete" name="remove" value="DELETE" onclick="return confirm('Are you sure you want to delete this item?')">
</form>
</td><td>
<img height=100 src="<?php echo $slide[image];?>">
</td>
</table>
<?php } ?>

<form action="" method="post"enctype="multipart/form-data">

<input type="hidden" name="location" value="opportunity1">  
<p>Add Slide (JPG or MP4):<input type="file" name="sliderimage"><input type="submit" name="addslide" value="SAVE SLIDE"></p>

</form>
</div>    
</div>

<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Opportunity Section</h3> 
<?php set_data("TEXT_DATA,location='op1'");?>
<div class="section" id="opportunity">

<form action="" method="post"enctype="multipart/form-data">
<!--<h4>In Slide Text</h4>
<textarea name="content" rows=5 cols=60><?php echo data(content);?></textarea> -->
<h4>Video Link (YouTube ID example:2bK9ah8Pi8U)</h4>
<?php set_data("IMAGE_DATA,location='op1'");?>

<p><input type="text" name="filename" value="<?php echo data(filename);?>"></p>
<input type="submit" name="saveop" value="SAVE">
</form>
</div> 
</div> 

<!-- ===========================================================================================================================  -->






<div class="box">
<h3>Product Section</h3> 
<div class="section" id="products">

<form action="" method="post"enctype="multipart/form-data">
<h4>In Slide Text</h4>
<?php set_data("TEXT_DATA,location='pro1'");?>
<textarea name="content" rows=5 cols=60><?php echo data(content);?></textarea>
<h4>Link</h4>
<?php set_data("TEXT_DATA,location='pro2'");?>
<input name="content2" value="<?php echo data(content);?>">
<h4>Section Image</h4>
<?php set_data("IMAGE_DATA,location='pro1'");?>
<img src="<?php echo data(filename);?>" height=100>
<p><input type="file" name="sliderimage"></p>
<input type="submit" name="savepro" value="SAVE">
</form>
</div> 
</div> 



<!-- ===========================================================================================================================  -->


<div class="box">
<h3>Look who's talking Section</h3> 
<div class="section" id="lookwho">
    
<?php 
set_data("SLIDER,location='lwt'");
$slides=collection();
?>


<?php 
foreach ($slides as $slide){
?>
<table cellpadding=10><tr><td>
    <form action="" method="post"enctype="multipart/form-data">
<input type="hidden" name="slideid" value="<?php echo $slide[id];?>">    
Change Image:<input type="file" name="sliderimage" value="<?php echo $slide[image];?>"><input type="submit" name="saveslide2" value="SAVE SLIDE"><input type="submit" class="delete" name="remove" value="DELETE" onclick="return confirm('Are you sure you want to delete this item?')">
</form>
</td><td>
<img height=100 src="<?php echo $slide[image];?>">
</td>
</table>
<?php } ?>
 <form action="" method="post"enctype="multipart/form-data">

<input type="hidden" name="location" value="lwt">  
<p>Add Slide (JPG or MP4):<input type="file" name="sliderimage"><input type="submit" name="addslide2" value="SAVE SLIDE"></p>

</form>   
<form action="" method="post"enctype="multipart/form-data">
<h4>In Slide Text</h4>
<?php set_data("TEXT_DATA,location='lwt'");?>
<textarea name="content" rows=5 cols=60><?php echo data(content);?></textarea>
<p><input type="submit" name="savelwt" value="SAVE"></p>
</form>

</div>

</div> 

<!-- ===========================================================================================================================  -->


<div class="box">
<h3>Our Story Section</h3> 
<div class="section" id="os">

<form action="" method="post"enctype="multipart/form-data">
<h4>In Slide Text</h4>
<?php set_data("TEXT_DATA,location='os'");?>
<textarea name="content" rows=5 cols=60><?php echo data(content);?></textarea>
<h4>Section Image</h4>
<?php set_data("IMAGE_DATA,location='os'");?>
<img src="<?php echo data(filename);?>" height=100>
<p><input type="file" name="sliderimage"></p>
<input type="submit" name="saveos" value="SAVE">
</form>
</div> 
</div> 

<!-- ===========================================================================================================================  -->
<div class="box">
<h3>System & Comp Plan</h3> 
<div class="section" id="sys">
<form action="" method="post"enctype="multipart/form-data">
<h4>In Slide Text (system)</h4>
<?php set_data("TEXT_DATA,location='sys'");?>
<textarea name="content" rows=5 cols=60><?php echo data(content);?></textarea>
<h4>In Slide Text (comp plan)</h4>
<?php set_data("TEXT_DATA,location='comp'");?>
<textarea name="content2" rows=5 cols=60><?php echo data(content);?></textarea>

<p><input type="submit" name="savesys" value="SAVE"></p>
</form>
</div> 
</div> 
<!-- ===========================================================================================================================  -->
<div class="box">
<h3>Map Section</h3> 
<div class="section" id="map">

<form action="" method="post"enctype="multipart/form-data">
<h4>In Slide Text</h4>
<?php set_data("TEXT_DATA,location='map'");?>
<textarea name="content" rows=5 cols=60><?php echo data(content);?></textarea>
<p><input type="submit" name="savemap" value="SAVE"></p>
</form>
</div> 



</div> 
</div>    


<script>
$('.box h3').click(function(){

$(this).parent().find('.section').slideToggle();    
});    
</script>
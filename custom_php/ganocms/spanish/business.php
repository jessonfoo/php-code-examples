<?php
function show_files($id)
{
    
    
set_data("TRAINING,id=$id");
if (data(file1)<>'') {
 
if(substr(data(file1), -3)=='jpg' || substr(data(file1), -3)=='png' || substr(data(file1), -3)=='gif') 
{
$pic='skin/images/jpg2.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}


if(substr(data(file1), -3)=='pdf' ) 
{
$pic='skin/images/4.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

if(substr(data(file1), -3)=='doc' || substr(data(file1), -4)=='docx') 
{
$pic='skin/images/3.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

echo '<a target="_blank" href="geadmin/'.data(file1).'"><img style="margin:3px;" src="'.$pic.'"></a>';    
}



if (data(file2)<>'') {
 
if(substr(data(file2), -3)=='jpg' || substr(data(file2), -3)=='png' || substr(data(file2), -3)=='gif') 
{
$pic='skin/images/jpg2.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}


if(substr(data(file2), -3)=='pdf' ) 
{
$pic='skin/images/4.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

if(substr(data(file2), -3)=='doc' || substr(data(file2), -4)=='docx') 
{
$pic='skin/images/3.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

echo '<a target="_blank" href="geadmin/'.data(file2).'"><img style="margin:3px;" src="'.$pic.'"></a>';    
}
if (data(file3)<>'') {
 
if(substr(data(file3), -3)=='jpg' || substr(data(file3), -3)=='png' || substr(data(file3), -3)=='gif') 
{
$pic='skin/images/jpg2.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}


if(substr(data(file3), -3)=='pdf' ) 
{
$pic='skin/images/4.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

if(substr(data(file3), -3)=='doc' || substr(data(file3), -4)=='docx') 
{
$pic='skin/images/3.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

echo '<a target="_blank" href="geadmin/'.data(file3).'"><img style="margin:3px;" src="'.$pic.'"></a>';    
}
if (data(file4)<>'') {
 
if(substr(data(file4), -3)=='jpg' || substr(data(file4), -3)=='png' || substr(data(file4), -3)=='gif') 
{
$pic='skin/images/jpg2.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}


if(substr(data(file4), -3)=='pdf' ) 
{
$pic='skin/images/4.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

if(substr(data(file4), -3)=='doc' || substr(data(file4), -4)=='docx') 
{
$pic='skin/images/3.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

echo '<a target="_blank" href="geadmin/'.data(file4).'"><img style="margin:3px;" src="'.$pic.'"></a>';    
}

if (data(file5)<>'') {
 
if(substr(data(file5), -3)=='jpg' || substr(data(file5), -3)=='png' || substr(data(file5), -3)=='gif') 
{
$pic='skin/images/jpg2.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}


if(substr(data(file5), -3)=='pdf' ) 
{
$pic='skin/images/4.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

if(substr(data(file5), -3)=='doc' || substr(data(file5), -4)=='docx') 
{
$pic='skin/images/3.png';
// <img src="skin/images/1.png">vid&nbsp;<img src="skin/images/2.png">&nbsp;<img src="skin/images/3.png">&nbsp;<img src="skin/images/4.png">    
}

echo '<a target="_blank" href="geadmin/'.data(file5).'"><img style="margin:3px;" src="'.$pic.'"></a>';    
}


}
?>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>

<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="skin/style2.css">
<link rel="stylesheet" type="text/css" href="css/cafe.css">
	<script src="js/jquery.tiles-gallery.js"  type="text/javascript"></script>
	<link href="css/jquery-tilesgallery.css" rel="Stylesheet" />

<link type="text/css" rel="stylesheet" href="lib/lightSlider/css/lightSlider.css" />
<script src="lib/lightSlider/js/jquery.lightSlider.js"></script>
</head>


<div class="wrapper" >

    <!-- NAVBAR -->

 <?php include 'navbar2.php';?>

    <!-- Top Slider -->




    <div  class="ganocafe5" align="center">

<table width=100% cellspacing=0 cellpadding=0>
<tr>
<td style="width:50%;" valign="top">
    <div class="sidetd1"></div>
</td>
<td style="width:1000px;max-height:382px;">
    <div style="width:999px;max-width:999px;">
 <ul id="lightSlider" style="display:none;">
     
     
     
<?php 
  set_data("SLIDER,location='business'");
    $slides=collection();
    foreach ($slides as $slide)
    {
    echo '<li>
    <img height=382 src="geadmin/'.$slide[image].'">
  </li>';     
    }
?>    
     
</ul>
</div>
</td>
<td style="width:50%;" valign="top" >
<div class="sidetd2"></div>
</td>
</tr>
</table>
<div class="gano2"  align="center">
    <table width=98% cellspacing=10 cellpadding="5">
    <tr>
        <th width="50%">ENTRENAMIENTO</th><th>RECURSOS</th>
    </tr>
    <tr>
    <td valign="top">
    <?php 
    set_data("TRAINING,type='training' ORDER by position");
    $trainings=collection();
    foreach ($trainings as $training) {
    ?>
        
    <div class="training">
        <?php echo $training[headline];?>
        <?php if ($training[video]<>''){?>
        <iframe width="100%" height="270" src="http://www.youtube.com/embed/<?php echo $training[video];?>?rel=0" frameborder="0" allowfullscreen></iframe>
        <?php } else echo '<img src="geadmin/'.$training[image].'">';?>
 <div class="social"><?php show_files($training[id]);?></div>
    </div>
    <? } ?>
       
    </td>

    <td valign="top" style="padding:0px;">
        
        
        
    <?php 
    set_data("TRAINING,type='resource' ORDER by position");
    $trainings=collection();
    foreach ($trainings as $training) {
    ?>
        
        
        
        
        <table width=100% cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:75px;">
                <img width=75 src="geadmin/<?php echo $training[image];?>">
            </td>
            <td>
                <div class="affiliate">
                <div class="ahead"><?php echo $training[headline];?></div>
           <div class="adesc"><?php echo $training[content];?><br>
          <div style="height:20px"><?php show_files($training[id]);?></div>
           </div>

                </div>
            </td>
        </tr>
        </table><br>
        
    <?php } ?>    
            </td>
    </tr>
    </table>
</div>
<br><br><br><br><br><br><br><br>
	</div>

<?php include 'footer.php';?>

<script type="text/javascript">
$(window).load(function() { 
     $("#lightSlider").css('display','block');
    $("#lightSlider").delay(1000).lightSlider({
        item: 1,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 0,

        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 400, //ms'
        auto: false,
        loop: false,
        slideEndAnimatoin: true,
        pause: 2000,

        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',

        rtl:false,
        adaptiveHeight:false,

        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,

        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',

        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,

        responsive : [],

        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
});
</script>

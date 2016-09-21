<?php

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="skin/style2.css">
<link rel="stylesheet" type="text/css" href="css/cafe.css">
	<script src="js/jquery.tiles-gallery.js"  type="text/javascript"></script>
	<link href="css/jquery-tilesgallery.css" rel="Stylesheet" />

<link type="text/css" rel="stylesheet" href="lib/lightSlider/css/lightSlider.css" />
<script src="lib/lightSlider/js/jquery.lightSlider.js"></script>
</head>


<div class="wrapper" >
<?php include "navbar2.php";?>
    <!-- Top Slider -->
<?php
set_data("PRODUCTS,id=$_GET[id]");

?>

    <div  class="ganocafe3" align="center">
<div class="gano">
<table width=100%>
<tr>
<td width=50% align="center" ><img src="geadmin/<?php echo data(image);?>"></td>

<td width=50%><div class="cafeimg">
    
<?php if(data(category)=="GANO CAFE") echo '<img style="margin:5px;" src="skin/images/ganocafe_hover.png"></div>';
 if(data(category)=="GANO DAILY") echo '<img style="margin:5px;" src="skin/images/ganodaily_hover.png"></div>';
?>

<div class="cafeimgbot">
<h1><?php echo data(title);?></h1>
<?php echo data(description);?><br><br>

<?php
if (data(filelink)<>''){
?>
<a href="geadmin/<?php echo data(filelink);?>" download><table><tr><td valign="top"><img src="skin/images/4.png"></td><td valign="top"><h3>NUTRITIONAL FACTS</h3></td></tr></table></a>

<?php    
} else {
?>
<h3>INFORMACION NUTRICIONAL
</h3>
<?php 



if (data(nutrition)=='') { echo "Hay hechos enumerados..."; } else {
echo data(nutrition); } }
?>
<br><br>
<h3>RENUNCIA</h3>
<?php echo data(disclaimer);?><br><br>

<input type="submit" value="PRUEBALO" class="subbutton" onclick="location.href='sample.php'">
</div>
</td>
</tr>
</table>

<ul id="lightSlider">

<?php 
set_data('PRODUCTS');
$products=collection();
foreach ($products as $product)
{
?>

  <li>
    <a href="productview.php?id=<?php echo $product[id];?>"><img width=120 src="geadmin/<?php echo $product[image];?>"></a>
  </li>

<?php }
?>
</ul>
</div>
<br><br><br><br><br><br><br><br>
	</div>
<?php include 'footer.php';?>

<script type="text/javascript">
$(document).ready(function() {
    $("#lightSlider").lightSlider({
        item: 6,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

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

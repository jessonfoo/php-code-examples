<?php

?>

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
    
<?php include "navbar2.php" ?>


    
    <div  class="ganocafe3" align="center">
<div class="gano">
<table width=100%>
<tr>
<td width=50% align="center"><img src="images/main/cafe/hazelnut.jpg"></td>

<td width=50%><div class="cafeimg"><img  src="skin/images/cafe/ganocafe1.png"></div>
<div class="cafeimgbot">
<h1>Hazelnut Coffee</h1>
Rich hazelnut and enriched with Ganoderma Lucidum extract Ganocafe Hazelnut Coffee is the first known hazelnut beverage in the world that comes in a combination of coffee and Ganoderma Lucidum.  Adding hazelnut to Ganoderma Lucidum results in both a healthy and a great-tasting coffee, Ganocafe Hazelnut Coffee, which has the same benefits as any regular coffee, but bolstered with a delectable nutty flavor - the premium blend for coffee lovers.
<br><br>
<h3>NUTRITIONAL FACTS</h3>
waiting for information
<br><br>
<h3>DISCLAIMER</h3>
Under US FDA law, it is illegal for a manufacturer to make any medical claims for health supplements.  All statements made by GanoLife are intended for informational purposes only. These statements have not been evaluated or approved by the FDA, and our products are not intended to diagnose, treat, cure or prevent any disease.
<br><br>

<br><br>
<input type="submit" value="TRY IT" class="subbutton">
</div>
</td>
</tr>    
<tr>
</table>
<ul id="lightSlider">
  <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
  <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
    <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
    <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
    <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
  <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
  <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
    <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
    <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
    <li>
    <img src="skin/images/cafe/image.jpg">
  </li>
</ul>
</div>
<br><br><br><br><br><br><br><br>
	</div>
	
	
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

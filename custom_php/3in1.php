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
    <?php include "navbar2.php";?>






    <div  class="ganocafe3" align="center">
<div class="gano">
<table width=100%>
<tr>
<td width=50% align="center"><img src="images/main/cafe/3in1.jpg"></td>
<td width=50%><div class="cafeimg"><img  src="skin/images/cafe/ganocafe1.png"></div>
<div class="cafeimgbot">
<h1>GANO CAFE 3 IN 1</h1>
The rich, robust flavor of Ganocafe is usually enough to convince you on its own. But there's more - so much more! It's called Gano Cafe 3-in-1. And it's a unique blend brought to you exclusively by Gano Excel, the world's number one innovators of Nutritious Coffee. Can coffee be a nutritious food? Gano Cafe 3-in-1 is. That's because the brilliant food designers at Gano Excel have taken the richest and finest coffee beans and combined them with the world renowned Red Mushroom with over 200 trace nutrients. Together, they combine in a delicious infusion to give you a rich coffee blend that's not only better for you but also delicious to the palate.
<br><br>
<h3>NUTRITIONAL FACTS</h3>
waiting for information
<br><br>
<h3>DISCLAIMER</h3>
Under US FDA law, it is illegal for a manufacturer to make any medical claims for health supplements.  All statements made by GanoLife are intended for informational purposes only. These statements have not been evaluated or approved by the FDA, and our products are not intended to diagnose, treat, cure or prevent any disease.
<br><br>
<h3>NUTRITIONAL FACTS</h3>
Lorem ipsum dolor sit amet
<br><br>
<input type="submit" value="TRY IT" class="subbutton">
</div>
</td>
</tr>
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

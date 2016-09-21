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

    <!-- NAVBAR -->
    <?php include "navbar2.php";?>



    <div  class="ganocafe3" align="center">
<div class="gano">
<table width=100%>
<tr>
<td width=50% align="center"><img src="images/main/cafe/redroo.jpg"></td>
<td width=50%><div class="cafeimg"><img  src="skin/images/cafe/ganocafe1.png"></div>
<div class="cafeimgbot">
<h1>Leaf Red Roolbos Tea</h1>
Now Gano Excel takes the tradition of rich natural tea and brings it to a whole new level. First they've found a naturally sumptuous RED tea from South Africa called Rooibos. This Rooibos red tea is both caffeine free and a natural source of Super Oxide Dismutase (SOD), a powerful antioxidant. In fact, Rooibos Tea is said to have a greater amount of antioxidants than Green tea.Then they combine it with the extract from the powerful RED Mushroom (Ganoderma Lucidum). Known to contain over 200 nutritional trace elements, the Red Mushroom is called the magical "king of herbs." Finally the Gano excel experts blend it all into a superb new tea tradition with good health in every cup.
Now the third most popular beverage in the world comes in a nutritious new blend - Gano Tea SOD. Savor the essence and taste one of nature's greatest wonders. Experience the power of RED squared!

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

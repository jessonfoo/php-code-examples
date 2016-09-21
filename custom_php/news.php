<?php

?>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<!-- google fonts linke  for source sans pro -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="skin/style2.css">
<link rel="stylesheet" type="text/css" href="css/cafe.css">
	<script src="js/jquery.tiles-gallery.js"  type="text/javascript"></script>
	<link href="css/jquery-tilesgallery.css" rel="Stylesheet" />

<link type="text/css" rel="stylesheet" href="lib/lightSlider/css/lightSlider.css" />
<script src="lib/lightSlider/js/jquery.lightSlider.js"></script>
<link rel="stylesheet" type="text/css" href="css/news.css">
</head>


<div class="wrapper" >

    <!-- NAVBAR -->

  <?php include 'navbar2.php';?>

    <!-- Top Slider -->




    <div  class="ganocafe5" align="center">

<table width=100% cellspacing=0 cellpadding=0>
<tr>
<!-- class changed from sidetd1 to news-sidetd1 for news page -->
<td style="width:50%;" class="news-sidetd1">
</td>
<td style="width:1000px;">
    <div style="max-width:1000px;">
 <ul id="lightSlider">
  <li>
    <img height=382 src="skin/images/cafe/business_slider1.jpg">
  </li>
    <li>
    <img height=382 src="skin/images/cafe/business_slider1.jpg">
  </li>
</ul>
</div>

<!-- begin edit -->
<div class="row-fluid header-under-slider no-gutters">
<div class="span6 news-header news-page-header no-gutters">
<h4 class="news-page-header-h2">NEWS</h4>
<img class="news-header-image" src="img/news/news.jpg">
</div>
<div class="span6 events-header news-page-header no-gutters">
<h4 class="news-page-header-h2">EVENTS</h4>
<?php include 'calendar.php';?>
</div>

</div>

<!-- end edit -->
</td>
<!-- class changed from sidetd2 to news-sidetd2 for news page see css for image -->
<td style="width:50%;" class="news-sidetd2">

</td>
</tr>
</table>
<div class="ganox"  align="center">
    <table class="content-below-header" style="padding-top:10px;" width=1000 cellpadding="0">

    <tr>
    <td style="width:500px" >

            <div class="news-feed-item news-1">
              <a href=#>LOREM IPSUM DOLOR SIT AMET, SECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA</a>
              <img class="news-feed-img news-img-1" src="img/news/newsfeed.jpg">
            </div>
            <div class="news-feed-item news-1">
              <a href=#>LOREM IPSUM DOLOR SIT AMET, SECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA</a>
              <img class="news-feed-img news-img-1" src="img/news/newsfeed.jpg">
            </div>
            <div class="news-feed-item news-1">
              <a href=#>LOREM IPSUM DOLOR SIT AMET, SECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA</a>
</div>
    </td>

    <td valign="top" style="padding:0px;" valign=top>



          <div class="events-content">

            <div class="row-fluid">
              <div class="event-feed-item calendar-event-1" style="position:relative;vertical-align: top;">
                <div style="display:inline-block;" style="vertical-align: top;position:relative;">
                  <img class="event-feed-img event-1" src="img/news/eventsfeed.jpg">
                </div>

                <div style="float:right;width:35%;display:inline-block;vertical-align: top;position:absolute;">
              
                  <date class="event-date">FEB 7</date>
                  <summary class="event-location">LONG BEACH</summary>
                  <h8 class="event-title">TITLE GOES HERE</h8>
                  
                  <h8 id="event-1" class="event-description" style="display:none;">
                    Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  </h8>
                  <div id="readmore" style="font-size:10px;padding:3px;cursor:pointer;">> Read More</div>
                 
                  </div>
            </td>
        </tr>
        </table>
    </td>
    </tr>
    </table
</div>
<br><br><br><br><br><br><br><br>
	</div>






<?php include 'footer.php';?>







<script>
var status=1;
$('#readmore').click(function(){
 
$('#event-1').slideToggle();    

if (status==1){    
$('#readmore').html('x close');

status=2;    
} else {
$('#readmore').html('> Read More');
status=1;
    }
});   
</script>














<script type="text/javascript">
$(document).ready(function() {
    $("#lightSlider").lightSlider({
        item: 1,
        autoWidth: true,
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
        pager: false,
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

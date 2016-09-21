<?php

?>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="skin/style.css">
<link rel="stylesheet" type="text/css" href="css/news.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="js/jquery.tiles-gallery.js"  type="text/javascript"></script>
<link href="css/jquery-tilesgallery.css" rel="Stylesheet" />

<link type="text/css" rel="stylesheet" href="lib/lightSlider/css/lightSlider.css" />
<script src="lib/lightSlider/js/jquery.lightSlider.js"></script>
</head>

<body>
<div>

    <!-- NAVBAR -->
  <div class="nav-bar">
        <div class="logo">
            <a href="index.php"><img src="skin/images/logo.jpg"></a>
        </div>
        <div class="nav">
            <ul>
               <li>
                  <a href="products.php" class="nav-link">Products</a>
               </li>
               <li>
                  <a href="#" class="nav-link">Opportunity</a>
               </li>
               <li>
                  <a href="company.php" class="nav-link">Company</a>
               </li>
               <li>
                  <a href="business.php" class="nav-link">Business Owner</a>
               </li>
               <li>
                  <a href="#" class="nav-link">News & Events</a>
               </li>
               <li>
                  <a href="contact.php" class="nav-link">Contact</a>
               </li>
               <li>
                  <a href="#" class="spanish">SPANISH</a>
               </li>
               <li ><span class="top-social">
                     <a href="#"><img src="skin/images/facebook.png"></a>
            <a href="#"><img src="skin/images/twitter.png"></a>
            <a href="#"><img src="skin/images/youtube.png"></a>
            <a href="#"><img src="skin/images/linkedin.png"></a> </span>
               </li>
            </ul>
        </div>
    </div>
    <div class="mega-menu"></div>
<!-- jesson html begin -->
<div class="container news-page-container">
  <img class="slider-img-left no-gutter" src="img/news/newsbg1.jpg">
  <div class="container slider-container no-gutter">

    <div style="max-width:1000px;">
      <ul id="lightSlider">
        <li>
          <img width=88.5% src="skin/images/cafe/business_slider1.jpg">
        </li>
        <li>
          <img width=88.5% src="skin/images/cafe/business_slider1.jpg">
        </li>
      </ul>
    </div>

    <div class="row-fluid no-gutter">
      <div class="span12 news-page-span no-gutter">
        <div class="row">
          <div class="span6 news-title sidebar-lower-title no-gutter">
            <h3 class="thin-header">NEWS</h3>
          </div>
          <div class="span6 events-title sidebar-lower-title no-gutter">
            <h3 class="thin-header">EVENTS</h3>
          </div>
        </div>
        <div class="row-fluid news-and-events">
          <div class="span6 news-content">
            <img class="news-image" src="img/news/news.jpg">
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
          </div>
          <div class="span6 events-content">
            <img class="events-calendar" src="img/news/calendar.jpg">
            <div class="row-fluid">
              <div class="event-feed-item calendar-event-1">
                <div class="span6">
                  <img class="event-feed-img event-1" src="img/news/eventsfeed.jpg">
                </div>
                <div class="span6">
                  <a href="#">
                  <date class="event-date">FEB 7</date>
                  <summary class="event-title">TITLE GOES HERE</summary>
                  LOREM IPSUM DOLOR SIT AMET, SECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-fluid news-page-content">
      </div>
    </div>
  </div>

  <img class="slider-img-right no-gutter" src="img/news/newsbg2.jpg">
</div>
<!-- jesson html end -->
    <div class="footer">
        <div class="footer-logo">
        <img src="skin/images/logo_white.png">
        </div>
        <div class="footer-links">
        &copy;2015 Gano Excel USA | Terms of Use | Privacy Policy | Product Return Policy
        </div>
        <div class="footer-social">
         <a href="#"><img src="skin/images/facebook1.png"></a>
            <a href="#"><img src="skin/images/twitter1.png"></a>
            <a href="#"><img src="skin/images/youtube1.png"></a>
            <a href="#"><img src="skin/images/linkedin1.png"></a>
        </div>
    </div>

</div>

<!--jesson js begin-->

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
</script></body>




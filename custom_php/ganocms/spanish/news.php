<?php

?>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<!-- google fonts linke  for source sans pro -->

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
 <ul id="lightSlider" style="display:none;">
<?php 
  set_data("SLIDER,location='news'");
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

<!-- begin edit -->
<div class="row-fluid header-under-slider no-gutters">
<div class="span6 news-header news-page-header no-gutters">
<h4 class="news-page-header-h2">NOTICIAS</h4>
<img class="news-header-image" src="img/news/news.jpg">
</div>
<div class="span6 events-header news-page-header no-gutters">
<h4 class="news-page-header-h2">EVENTOS</h4>
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

            
              <?php 
    set_data("NEWS");
    $trainings=collection();
    $cnt=1;
    foreach ($trainings as $training) {
    ?>
            
            <div class="news-feed-item news-1">
              <a href=#><?php echo $training[headline];?></a>
              <img class="news-feed-img news-img-1" src="geadmin/<?php echo $training[image];?>">
           <h8 id="eventx-<?php echo $cnt;?>" class="event-description" style="display:none;">
                    <?php echo $training[content];?>
                  </h8>
                  <div id="readmorex-<?php echo $cnt;?>" style="font-size:10px;padding:3px;cursor:pointer;">> Read More</div>
            </div>
            
    <?php
    $cnt++;
    } ?>        
            
        
    </td>

    <td valign="top" style="padding:0px;" valign=top>

              <?php 
    set_data("EVENTS");
    $trainings=collection();
    $cnt=1;
    foreach ($trainings as $training) {
    
    
    
    $d=date('m-d-y',strtotime($training[event_date]));


switch ($d) {
case 1:
    $sdate='ENERO';
    break;
case 2:
    $sdate='FEBRERO';
    break;
case 3:
    $sdate='MARZO';
    break;
case 4:
    $sdate='ABRIL';
    break;
case 5:
    $sdate='MAYO';
    break;
case 6:
    $sdate='JUNIO';
    break;
case 7:
    $sdate='JULIO';
    break;
case 8:
    $sdate='AGOSTO';
    break;
case 9:
    $sdate='SEPTIEMBRE';
    break;
case 10:
    $sdate='OCTUBRE';
    break;
case 11:
    $sdate='NOVIEMBRE';
    break;
case 12:
    $sdate='DICIEMBRE';
    break;
    
    
}
    
   $edate=$sdate.' '.date('d',strtotime($training[event_date])); 
    ?>

          <div class="events-content">

            <div class="row-fluid">
              <div class="event-feed-item calendar-event-1" style="position:relative;vertical-align: top;">
                <div style="display:inline-block;" style="vertical-align: top;position:relative;">
                  <img class="event-feed-img event-1" src="geadmin/<?php echo $training[image];?>">
                </div>

                <div style="float:right;width:35%;display:inline-block;vertical-align: top;position:absolute;">
              
                  <date class="event-date"><?php echo $edate;?></date>
                  <summary class="event-location"><?php echo $training[location];?></summary>
                  <h8 class="event-title"><?php echo $training[headline];?></h8>
                  
                  <h8 id="event-<?php echo $cnt;?>" class="event-description" style="display:none;">
                    <?php echo $training[content];?>
                  </h8>
                  <div id="readmore-<?php echo $cnt;?>" style="font-size:10px;padding:3px;cursor:pointer;">> Read More</div>
                 
                  </div>
                  
        <?php $cnt++; } ?>          
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
<?php 
for ($i=1;$i<=$cnt;$i++)
{
    ?>

var status<?php echo $i;?>=1;
$('#readmore-<?php echo $i;?>').click(function(){
 
$('#event-<?php echo $i;?>').slideToggle();    

if (status<?php echo $i;?>==1){    
$('#readmore-<?php echo $i;?>').html('x close');

status<?php echo $i;?>=2;    
} else {
$('#readmore-<?php echo $i;?>').html('> Read More');
status<?php echo $i;?>=1;
    }
}); 
<?php
}
?>

<?php 
for ($i=1;$i<=$cnt;$i++)
{
    ?>

var statusx<?php echo $i;?>=1;
$('#readmorex-<?php echo $i;?>').click(function(){
 
$('#eventx-<?php echo $i;?>').slideToggle();    

if (statusx<?php echo $i;?>==1){    
$('#readmorex-<?php echo $i;?>').html('x close');

statusx<?php echo $i;?>=2;    
} else {
$('#readmorex-<?php echo $i;?>').html('> Read More');
statusx<?php echo $i;?>=1;
    }
}); 
<?php
}
?>

</script>














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

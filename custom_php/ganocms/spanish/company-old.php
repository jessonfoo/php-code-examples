<?php

?>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/timeline.css">
<link rel="stylesheet" type="text/css" href="skin/style2.css">
</head>


<body>
<div>

    <!-- NAVBAR -->
<?php include 'navbar2.php';?>
<!-- jesson html begin -->
<div class="container">
<div class="timeline-container">
  <div class="top-timeline-image fadeInBlock">
<div class="left-align-block">
<img id="history-image" src="img/history_page/1000.png">
<p class="history-block comment more" style="margin-left:85%;width:50%;margin-top:18%;">
For over 2,000 years, Ganoderma Lucidum has been considered as one of the best and most beneficial herbal remedies available. This "miracle of herb" has been widely used throughout many regions of the world but is best known amongst the Asian cultures. It contains over 150 antioxidants and 200+ phytonutrients. The mushroom was attributed with therapeutic properties, and has been used in dealing with countless conditions and diseases.
</p>
</div>

    
<ol id="timeline">

  <li>
   
<img class="img-1985 timeline-img fadeInBlock" src="img/history_page/1985.png">
  <div class="show comment more">
Gano Excel founder, Mr. Leow Soon Seng, began researching the most efficient way to grow Ganoderma Lucidum and the most potent way to bring about its therapeutic effects. His years of researched paid off as he perfected the manufacturing and extract process that is used to provide Ganoderma Lucidum products to millions of customers a year.
  </div>
  </li>

  <li>

<div align="right"><img class="img-1996 timeline-img fadeInBlock" src="img/history_page/1996.png"></div>
  <div class="show comment more">
Gano Excel is the only Ganoderma Lucidum provider in the world to own all of its own production facilities. The mushrooms are grown and harvested inside huge, climate-controlled greenhouses where every variable can be carefully controlled and purity guaranteed. We guarantee quality and purity all the way from planting of the initial spore all the way through to the consumer’s table.
  </div>

  </li>

  <li>
 
<a href="products.php"><img class="img-1999 timeline-img fadeInBlock" src="img/history_page/1999.png"></a>
  <div class="show comment more">
Gano Excel products are enhanced with Gano Excel’s proprietary Ganoderma Lucidum.  Gano Excel offers top quality products without compromising its taste. With their proprietary processing, we ensure that whenever you're having a cup of Gano Excel coffee, it is always as good as a freshly brewed one! 
  </div>
  </li>

  <li>

<div align="right"><img class="img-2000 timeline-img fadeInBlock" src="img/history_page/2000.png"></div>
  <div class="show comment more">
Since inception, Gano Excel has expanded into 70 different countries in the last two decades. Gano Excel owns and operates the world's largest completely organic Ganoderma Lucidum plantation. 
  </div>

</li>

  <li>

<img class="img-2002 timeline-img fadeInBlock" src="img/history_page/2002.png">
  <div class="show comment more">
As the original pioneer in bringing the benefits of Ganoderma Lucidum to the West, Gano Excel was first to introduce the supplement to the United States and the rest of North America. Although today we have a number of "copycat" competitors, Gano Excel continues to be the leader in the marketplace and the only provider who controls its products all the way through the production and marketing processes.
</div>

  </li>

  <li>

<div align="right"><img class="img-2005 timeline-img fadeInBlock" src="img/history_page/2005.png"></div>
  <div class="show comment more">
Gano Excel commits to never paying millions to the advertising and media companies, and decides that it’s better to pay YOU the customers to SHARE our product. See how you can benefit from Gano Excel opportunity!
  </div>

  </li>

  <li>

<img class="img-2008 timeline-img fadeInBlock" src="img/history_page/2008.png">
  <div class="show comment more">
Gano Excel launches the Evolution of Coffee campaign and its core Pillars, and sales climb reaching record numbers. 
  </div>

  </li>
</ol>
<img class="img-2015 looking-for-motivated-business-owners fadeInBlock" src="img/history_page/2015.png">
  <div class="show comment more">
Gano Excel launches new products and opens industry-leading distribution centers strategically placed in the US (Irwindale, Rialto, Fresno, Las Vegas, Phoenix, Dallas, Denver).
  </div>
<ol id="timeline">
</ol>

<img class="img-get-started fadeInBlock" src="img/history_page/getstarted.png">

</div>
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
<!-- <script type="text/javascript" src="js/j-fade-in.js"></script> -->
<!-- <script src="js/animate.js"></script> -->
<script> 
$('.more.comment').each(function() {$(this).attr('style','width:50%;')});
$('.more.comment:even').each(function() {$(this).css('float','right')});
$('.more.comment:last').attr('style','margin-left:85%;width:100%;');
$(document).ready(function() {
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){ 
        /* Check the location of each desired element */
         $('.fadeInBlock').each( function(i){ 
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height(); 

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window - 2100 > bottom_of_object ){ 
                $(this).animate({'opacity':'1'},900);
            }

        });

    });

  var showChar = 100;
  var ellipsestext = "...";
  var moretext = "Read More";
  var lesstext = "Show Less";
  $('.more').each(function() {
   var content = $(this).html();

    if(content.length > showChar) {

      var c = content.substr(0, showChar);
      var h = content.substr(showChar-1, content.length - showChar);

      var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

      $(this).html(html);
    }

  });

  $(".morelink").click(function(){
    if($(this).hasClass("less")) {
      $(this).removeClass("less");
      $(this).html(moretext);
    } else {
      $(this).addClass("less");
      $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();})
})
$('li').click(function(){

$(".show", this).slideToggle( "slow", function() {
    // Animation complete.
  });
});
</script>
</body>


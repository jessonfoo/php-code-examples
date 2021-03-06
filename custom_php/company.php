<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="skin/style2.css">

<?php
$top = 300;
?>

<style type="text/css">
    span.rm {
      color: white;
      background: rgb(218, 218, 218);
      padding: 4px;
      float: right;
      margin-right: -9px;
      margin-top: 10px;
      border-radius: 3px;
    }
    .text-d {
      border: 1px solid rgb(210, 210, 210);
      padding: 15px;
      background: white;
      border-radius: 10px;
      z-index: 999;
    }   
    .text-ds {
      border: 1px solid rgb(210, 210, 210);
      padding: 15px;
      background: white;
      border-radius: 10px;
      z-index: 999;
      padding-bottom: 6px;
    }   
    .timeline
    {
        z-index:-1;
        background-image:url('skin/images/timeline.png');
        background-position: 0px <?php echo $top;?>px;
        background-repeat:no-repeat;
        height:2350px;
        width:1200px;
    }

    .coverc
    {
        background-color: white;
        opacity: .9;
        z-index:100;
    }

    #topslide
    {
        background-image:url('skin/images/2000.png');
        background-repeat:no-repeat;
        position:absolute;
        left:50%;
        margin-left: -450px;
        height:300px;
        width:550px;
        top:<?php echo $top - 200;?>px;
    }

    #c1
    {
        position:absolute;
        left:50%;
        margin-left: -50px;
        height:300px;
        width:700px;
        top:<?php echo $top;?>px;
    }

    #c2
    {
        position:absolute;
        left:50%;
        margin-left: -600px;
        height:600px;
        width:550px;
        top:<?php echo $top + 100;?>px;

    }

    #c3
    {
        position:absolute;
        left:50%;
        margin-left: -50px;
        height:500px;
        width:750px;
        top:<?php echo $top + 300;?>px;
    }

    #c4
    {
        position:absolute;
        left:50%;
        margin-left: -650px;
        height:300px;
        width:605px;
        top:<?php echo $top + 705;?>px;
    }

    #c5
    {
        position:absolute;
        left:50%;
        margin-left: -40px;
        height:300px;
        width:605px;
        top:<?php echo $top + 820;?>px;
    }

    #c6
    {
        position:absolute;
        left:50%;
        margin-left: -650px;
        height:1150px;
        width:605px;
        top:<?php echo $top + 1005;?>px;
    }

    #c7
    {
        position:absolute;
        left:50%;
        margin-left: -50px;
        height:300px;
        width:605px;
        top:<?php echo $top + 1150;?>px;
    }




    #c8
    {
        position:absolute;
        left:50%;
        margin-left: -650px;
        height:300px;
        width:605px;
        top:<?php echo $top + 1405;?>px;
    }


    #c9
    {
        position:absolute;
        left:50%;
        margin-left: -43px;
        height:600px;
        width:605px;
        top:<?php echo $top + 1450;?>px;
    }

    .expandbutton
    {
        font-size:14px;

        display:block;
    }

    .expand {
        display:none;
        background:white;
    }

    /*use this */

    #content1 { position:absolute; left:50%; margin-left: -230px; width:305px; top:<?php echo $top - 70;?>px; font-size:14px; }
    #content2 { position:absolute; left:50%; margin-left:330px; width:305px; top:<?php echo $top + 150;?>px; font-size:14px; }
    #content3-video { position:absolute; left:50%; margin-left:-530px; width:295px; top:<?php echo $top + 110;?>px; font-size:14px; }
    #content3 { position:absolute; left:50%; margin-left:-530px; width:295px; top:<?php echo $top + 530;?>px; font-size:14px; }
    #content4 { position:absolute; left:50%; margin-left:270px; width:305px; top:<?php echo $top + 450;?>px; font-size:14px; }
    #content5 { position:absolute; left:50%; margin-left:-390px; width:305px; top:<?php echo $top + 850;?>px; font-size:14px; }
    #content6 { position:absolute; left:50%; margin-left:280px; width:305px; top:<?php echo $top + 960;?>px; font-size:14px; }
    #content7 { position:absolute; left:50%; margin-left:-550px; width:405px; top:<?php echo $top + 1310;?>px; font-size:14px; }
    #content8 { position:absolute; left:50%; margin-left:230px; width:305px; top:<?php echo $top + 1320;?>px; font-size:14px; }
    #content9 { position:absolute; left:50%; margin-left:-540px; width:395px; top:<?php echo $top + 1680;?>px; font-size:14px; }
    #content10 { position:absolute; left:50%; margin-left:0px; width:505px; top:<?php echo $top + 1950;?>px; font-size:14px; }
    /* end use this */

</style>

<?php include 'navbar2.php';?>
<div align="center">
    <div align="center" class="timeline">
        <div id="topslide"></div>
        <div id="c1" class="coverc"></div>
        <div id="c2" class="coverc"></div>
        <div id="c3" class="coverc"></div>
        <div id="c4" class="coverc"></div>
        <div id="c5" class="coverc"></div>
        <div id="c6" class="coverc"></div>
        <div id="c7" class="coverc"></div>
        <div id="c8" class="coverc"></div>
        <div id="c9" class="coverc"></div>
        <div id="c10" class="coverc"></div>





        <!-- Text divs for below images -->

        <div class="text-ds" id="content1" align="left">
          For over 2,000 years, Ganoderma Lucidum has been considered as one of the best and most beneficial herbal remedies available.
          <span class="expandbutton">
            <div class="expand" align="left">
              This "miracle of herb" has been widely used throughout many regions of the world but is best known amongst the Asian cultures. It contains over 150 antioxidants and 200+ phytonutrients. The mushroom was attributed with therapeutic properties, and has been used in dealing with countless conditions and diseases.
          </div>
          <span class="rm">READ MORE</span>
      </span>
  </div>

  <div class="text-ds" id="content2" align="left">
Gano Excel founder, Mr. Leow Soon Seng, began researching the most efficient way to grow Ganoderma Lucidum and the most potent way to bring about its therapeutic effects. 
    <span class="expandbutton">
        <div class="expand" align="left">
His years of researched paid off as he perfected the manufacturing and extract process that is used to provide Ganoderma Lucidum products to millions of customers a year.
       </div>
       <span class="rm">READ MORE</span>
   </span>
</div>

<div id="content3-video" align="left">
        <iframe width="420" height="270" src="http://www.youtube.com/embed/2bK9ah8Pi8U?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="text-d" id="content3" align="left">
    After years of studying and researching, Mr. Leow founded Gano Excel and officially opened it's door to the general public in a humble store in Malaysia
<!--     <span class="expandbutton"> -->
<!--         <div class="expand" align="left"> -->
<!-- <!&#45;&#45; Additional Content Not Provided &#45;&#45;> -->
<!--         </div> -->
<!--         <span class="rm">READ MORE</span> -->
<!--     </span> -->
</div>

<div id="content4" class="text-ds" align="left">
    Gano Excel is the only Ganoderma Lucidum provider in the world to own all of its own production facilities. The mushrooms
    <span class="expandbutton">
        <div class="expand" align="left">
          are grown and harvested inside huge, climate-controlled greenhouses where every variable can be carefully controlled and purity guaranteed. We guarantee quality and purity all the way from planting of the initial spore all the way through to the consumers table.

      </div>
      <span class="rm">READ MORE</span>
  </span>
</div>

<div id="content5" class="text-ds" align="left">
    Gano Excel products are enhanced with Gano Excel's proprietary Ganoderma Lucidum.  Gano Excel offers top quality products without
    <!-- Since inception, Gano Excel has expanded into 70 different countries in the last two decades. Gano Excel owns and operates the world's largest -->
    <span class="expandbutton">
        <div class="expand" align="left">
          compromising its taste. With their proprietary processing, we ensure that whenever you're having a cup of Gano Excel coffee, it is always as good as a freshly brewed one!
            <!-- completely organic Ganoderma Lucidum plantation. -->
        </div>
        <span class="rm">READ MORE</span>
    </span>
</div>

<div id="content6" class="text-ds" align="left">
    As the original pioneer in bringing the benefits of Ganoderma Lucidum to the West, Gano Excel was first to introduce the supplement
    <span class="expandbutton">
        <div class="expand" align="left">
            to the United States and the rest of North America. Although today we have a number of "copycat" competitors, Gano Excel continues to be the leader in the marketplace and the only provider who controls its products all the way through the production and marketing processes.
        </div>
        <span class="rm">READ MORE</span>
    </span>
</div>

<div id="content7" class="text-ds" align="left">
    Gano Excel commits to never paying millions to the advertising and media companies, and decides that it's better to pay YOU the customers
    <span class="expandbutton">
        <div class="expand" align="left">
          to SHARE our product. See how you can benefit from Gano Excel opportunity!.
      </div>
      <span class="rm">READ MORE</span>
  </span>
</div>

<div id="content8" class="text-d" align="left">
    Gano Excel launches the Evolution of Coffee campaign and its core Pillars, and sales climb reaching record numbers.
    <!-- <span class="expandbutton"> -->
    <!--     <div class="expand" align="left"> -->
    <!--     </div> -->
    <!--     <span class="rm">READ MORE</span> -->
    <!-- </span> -->
</div>

<div id="content9" class="text-ds" align="left">
    Gano Excel launches new products and opens industry-leading distribution centers strategically placed in the US (Irwindale, Rialto, Fresno,
    <span class="expandbutton">
        <div class="expand" align="left">
          Las Vegas, Phoenix, Dallas, Denver).
      </div>
      <span class="rm">READ MORE</span>
  </span>
</div>

<div id="content10" class="text-d" align="left">
  <ul> <li>Coffee is the second largest commodity int he world-2 billion cups are consumed in teh world, every day</li><li>The Health and Wellness industry is currently valued at $200 billion</li></ul>
  <!-- <span class="expandbutton"> -->
  <!--   <div class="expand" align="left"> -->
  <!-- </div> -->
  <!-- <span class="rm">READ MORE</span> -->
<!-- </span> -->
</div>

</div>
</div>

<script>
    $(window).scroll(function(){
var eTop = $('.timeline').offset().top; //get the offset top of the element
var position2=(eTop - $(window).scrollTop()); //position of the ele w.r.t window

console.log(position2);

if (position2<=-150)
{
    $( "#c1" ).fadeOut( 1000 );

}

if (position2<=-250)
{
    $( "#c2" ).fadeOut( 1000 );

}

if (position2<=-350)
{
    $( "#c3" ).fadeOut( 1000 );

}

if (position2<=-550)
{
    $( "#c4" ).fadeOut( 1000 );

}

if (position2<=-650)
{
    $( "#c5" ).fadeOut( 1000 );

}


if (position2<=-850)
{
    $( "#c6" ).fadeOut( 1000 );

}


if (position2<=-950)
{
    $( "#c7" ).fadeOut( 1000 );

}


if (position2<=-1050)
{
    $( "#c8" ).fadeOut( 1000 );

}


if (position2<=-1250)
{
    $( "#c9" ).fadeOut( 1000 );

}

});


    $('.expandbutton').click(function(){

        $(this).find('.expand').slideToggle();

        var status=$(this).find('.rm').html();

        if (status=='READ MORE'){
            $(this).find('.rm').html('CLOSE');
        } else {
            $(this).find('.rm').html('READ MORE');
        }


    });



</script>
<table width=100% cellpadding=0 cellspacing=0>
<tr>
<td width=50% style="background-image:url('ogb.png');background-size: auto 222px;"></td>
<td ><img src="evo.png" id="evo" height=222px onmouseover="evohover.png" onmouseout="evo.png"></td>

<td width=50% style="background-image:url('ogb.png');background-size: auto 222px;"></td>

</tr>    
</table>

<?php include "footer.php";?>

<script>
    $('#evo').mouseover(function(){
    $(this).attr("src", 'evopackhover.png');
  
    });
    
        $('#evo').mouseout(function(){
    $(this).attr("src", 'evo.png');
  
    });
</script>

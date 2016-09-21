<?php

?>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="skin/style3.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="//unslider.com/unslider.min.js"></script>

</head>
<style type="text/css">
    .bannerx { position: relative; overflow: auto; }
    .bannerx li { list-style: none; }
        .bannerx ul li { float: left; }
        
        .slide img {
            margin-left:-40px;
            margin-top:-20px;
        }
</style>

<div class="wrapper" id="parallax">
    
    <!-- NAVBAR --> 
<?php include 'navbar3.php';?>
    
    <!-- Top Slider -->
    <div class="top-slider">
    <?php 
    set_data("SLIDER,location='opportunity1' order by image");
    $slides=collection();
    foreach ($slides as $slide)
    {
    echo '<div><img src="geadmin/'.$slide[image].'"></div>';     
    }
    
    
    ?>  
    </div>


    <div id="s1container">
    <div class="slide" id="slide-1" align="center">

    
     <!--  <a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php
       set_data("IMAGE_DATA,location='op1'"); 
       echo data(filename);?>?autoplay=1"><div style="cursor:pointer;" class="slide1bg">
    </div></a> -->
         
 <a href="company.php"><div style="cursor:pointer;" class="slide1bg">
    </div></a> 
         
    </div>
    </div>
    <?php
    set_data("IMAGE_DATA,location='pro1'");
    $bgimage='geadmin/'.data(filename);
    set_data("TEXT_DATA,location='pro2'");
    $link=data(content);
    ?>
    <div class="slide" id="slide-2" style="background-image:url('<?php echo $bgimage;?>');">
  
                <a href="<?php echo $link;?>"><div id="slide2c">
           <div id="s2c" align="center">       
               <table width=900 align="center">
                  <tr><td width=50%>        
<span class="largetext" id="large2"> SIGNATURE LINE OF ENRICHED PRODUCTS </span>
</td><td>
                    <span class="smalltext" id="small2"> <?php 
            set_data("TEXT_DATA,location='pro1'");
            echo data(content);
                    ?>
        </span>
        </td></tr> 
               </table>
</div>

    </div> </a> 
                
            </td>
            <td width=20% style="background-image:url('skin/images/opportunity2.jpg');background-image:url('skin/images/opportunity2.jpg');background-position:-1460px 50%;">
                
                
            </td>
            
            
            </tr>
    </table>        
   
    </div>
    
 <a name="testimonials"></a>
  <div  class="slide" id="slide-3" style="background-position:center;background-image:url('skin/images/slideleft4.jpg')">

     <table width=100%>
         <tr>
             <td width=50%>
                 
             </td>
             <td width=50% valign=bottom>
                 <div class="bannerx">
    <ul style="margin-top:0px;">
        <?php
            set_data("SLIDER,location='lwt'");
    $slides=collection();
    foreach ($slides as $slide)
    {
    echo '<li><img src="geadmin/'.$slide[image].'"></li>';     
    }
    ?>
       
    </ul>
</div   
    


</div>   
             </td>
         </tr>
     
   </table>
          </div>
</div>
    
    
    <div class="slide" id="slide-4" align="center" >
   
    <div id="slide4c" style="max-width:1024px;vertical-align:middle;"><br><br><br><br><br>
        <table  cellpadding=10><tr>
        <td width=180 valign="middle" align="center"><span id="s41" class="foursteps"><img src="skin/images/coffee1.png" style="width:170px;">


        </span></td>    
        <td width=60 valign="middle" align="center"> <span id="s42" class="foursteps"><img src="skin/images/plus_white.png" style="width:50px;"></td>    
        <td width=180 valign="middle" align="center"> <span id="s43" class="foursteps"><img src="skin/images/coffee2.png" style="width:170px;">
</td>    
        <td width=60 valign="middle" align="center"><span id="s44" class="foursteps"><img src="skin/images/equal_white.png" style="width:50px;"></span></td>    
        <td width=180 valign="middle" align="center"><span id="s45" class="foursteps"><img src="skin/images/coffee3.png" style="width:170px;"></span> </td>    
        <td width=250  valign="middle" align="left"><span id="s46" class="foursteps"><span style="color:white;font-size:30px;">GANO EXCEL INTERNATIONAL</span></span></td>    
        </tr><tr>
        <td colspan=2><span id="s41b" class="foursteps"><br><span class="smwhite">2nd Most<br> Consumed Beverage<br><br>2nd Most<br> Traded Commodity<br></p></span></td><td colspan=2><span id="s43b" class="foursteps"><span class="smwhite" align="left">
        Miraculous King of Herbs<br>
Proprietary Extract<br>
</span></span></span></td><td><span id="s45b" class="foursteps"><span class="smwhite">6 Most Powerful Types of Red Mushroom</span></span></td><td></td>
        </tr>
        
        </table>

    
    
    
    
    </div> 
    </div>
  <a name="story"></a>
  <?php     set_data("IMAGE_DATA,location='os'");
    $bgimage2='geadmin/'.data(filename);
    set_data("TEXT_DATA,location='os'");
    $ostext=data(content);
    ?>
    <a href="company.php"><div class="slide" id="slide-5" align="center" style="background-image:url('<?php echo $bgimage2;?>');" >
<div style="cursor:pointer;display:none;" class="slide5bg" data-stellar-background-ratio="1.3" onclick="window.location='#'">
</div>

<div style="margin-top:-280px;cursor:pointer;background-position: 0px 300px;display:none" class="slide5bg2" id="slide5bg2"  onclick="window.location='#'">    
</div>

<div class="slide5bg2b" style="font-size:20px;margin-top:-400px;margin-left:330px;width:590px;padding:10px;display:none" align="left">
  <strong style="font-size:22px;">Bringing Health & Wealth to Every Family</strong><br><br>  <?php echo $ostext;?>
</div>       
    </div></a>
    
    

      <a name="system"></a>
    <div class="slide" id="slide-6" align="center" style="background-repeat:repeat-x;background-image:url('skin/images/systemplanbg.png');">
     
    <table width=1024>
    <tr>
  
    <td width=1000 align="center"  style="height:235px;">
        <table align="center" id="compplan" style="display:none">
            <tr>
                <td> <img src="skin/images/systemicon.png" style="width:300px;"></td>
                <td width=200 align="center"><img src="skin/images/plus.png" style="width:50px;"></td>
                <td align="right"> <img src="skin/images/compicon.png" style="width:250px;"></td>
            </tr>
        </table>
       
       
 
        
    </td>
    </tr>
    </table>
    
    

    
    <table width=1024 cellpadding=20>
    <tr><td valign="top" width=50%>
    <span class="system">SYSTEM</span>    

 <?php     
    set_data("TEXT_DATA,location='sys'");
    $thec=str_replace('&gt;','>',data(content));
    echo str_replace('&lt;','<',$thec);
    ?>
    
    </td>
    
    <td valign="top">
       <span class="compplan" style="color:#9f0b21">COMP PLAN</span>    
   <?php     
    set_data("TEXT_DATA,location='comp'");
    $thec=str_replace('&gt;','>',data(content));
    echo str_replace('&lt;','<',$thec);
    ?>
    </td>
    
    </tr>   
    </table>
    </div>
    
    
    
    
    
    <div class="slide" id="slide-7" align="center" style="height:700px;background-image:url('skin/images/mapfinal.jpg');background-size: 1235px 600px;">
    <div style="width:1000px;" align="left">    
    <div align="left" style="color:#e98700;width:500px;">
    <span class="mapbold" style="margin-top:100px;border-style:dotted;border-width:2px 0px 2px 0px;border-color:#aa0000;margin-bottom:15px;">With uncommon vision and brilliant determination, a concept was born.</span>
Gano Excel is one of the largest leading direct sales companies in the industry. Since 1995, Gano Excel has distributed products in over 70 countries, and has served millions of customers. Gano Excel is also one of the few companies that is 100% debt free, and 100% vertically integrated. This means Gano Excel owns every facet of the manufacturing process, from the growing of Ganoderma Lucidum, to the growing and roasting of coffee beans, to the packaging and boxing of its products. Gano Excel manufactures and distributes a wide range of unique products ranging from food supplement and beverages to personal and skin care products. Gano Excel also has its own research facilities and is always working to improve its Ganoderma Lucidum and its entire product line. 
</div>   
</div>
</div>
    </div>
    </div>    
     <a name="getstarted"></a>
    <div class="slide" id="slide-8" align="center">
        <table><tr><td>  <div id="box"><img src="skin/images/evobox.png" style="width:250px;"></div></td><td><a href="sample.php"><img id="gs" src="skin/images/getstarted.png" style="margin-top:150px;margin-left:25px;width:200px;"></a></td></tr></table>
           
     
    </div>
<script>
    w=$(window).width();
    ml=w/2;
$('#slide-7').css('background-position',ml+'px 0px')
</script>    
    
    
</div>
<?php include 'footer.php';?>

<script src="js/animate.js"></script>



<script>
    $(function() {
    $('.bannerx').unslider();
});

   var cw = $('.slide1bg').width();
$('.slide1bg').css({'height':cw/2}); 
</script>

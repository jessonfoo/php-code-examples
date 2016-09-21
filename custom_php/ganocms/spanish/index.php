<?php

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="skin/style2.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="//unslider.com/unslider.min.js"></script>
<style type="text/css">
    .bannerx { position: relative; overflow: auto; }
    .bannerx li { list-style: none; }
    .bannerx ul li { float: left; } 
    .slide img { margin-left:-40px; margin-top:-20px; }
</style>
</head>


<div class="wrapper" id="parallax">
    
    <!-- NAVBAR --> 
<?php include 'navbar2.php';?>
    
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


    
    <div class="slide" id="slide-1" align="center">

    
     <!--  <a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php
       set_data("IMAGE_DATA,location='op1'"); 
       echo data(filename);?>?autoplay=1"><div style="cursor:pointer;" class="slide1bg">
    </div></a> -->
         
 <a href="company.php"><div style="cursor:pointer;" class="slide1bg">
    </div></a> 
         
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
               <table width=980 align="center">
                  <tr><td width=50% valign="top">        <span class="largetext" id="large2" style="font-size:28px;">
            LÍNEA DISTINTIVA DE PRODUCTOS ENRIQUECIDOS
        </span></td><td valign="top">
                    <span class="smalltext" id="small2" style="margin-top:-20px;width:600px;"> <?php 
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
             <td width=50%>
                 <div class="bannerx">
    <ul>
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
             </td>
         </tr>
     
   </table>
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
        <td width=250  valign="middle" align="left"><span id="s46" class="foursteps"><span style="color:white;font-size:30px;">GANO EXCEL INTERNACIÒNAL</span></span></td>    
        </tr><tr>
        <td colspan=2><span id="s41b" class="foursteps"><span class="smwhite"><br>2da Bebida <br> con más consumo<br><br>producto <br> más comercializadoty<br></p></span></td><td colspan=2><span id="s43b" class="foursteps"><span class="smwhite" align="left">
        Rey de las hierbas
<br>
Extracto patentado<br>
</span></span></span></td><td><span id="s45b" class="foursteps"><span class="smwhite">6 más potentes Tipos de seta roja</span></span></td><td></td>
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
  <strong style="font-size:22px;">Llevar Salud & Bienestar a Cada Familia</strong><br><br>  <?php echo $ostext;?>
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
    <span class="system">EL SISTEMA</span>    

 <?php     
    set_data("TEXT_DATA,location='sys'");
    $thec=str_replace('&gt;','>',data(content));
    echo str_replace('&lt;','<',$thec);
    ?>
    
    </td>
    
    <td valign="top">
       <span class="compplan" style="color:#9f0b21">PLAN DE COMPENSACIÒN</span>    
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
    <span class="mapbold" style="margin-top:100px;border-style:dotted;border-width:2px 0px 2px 0px;border-color:#aa0000;margin-bottom:15px;">Con una visión poco común y una determinación brillante, nació un concepto.</span>
Gano Excel es una de las principales compañías de ventas directas en la industria. Desde 1995, Gano Excel ha distribuido sus productos en más de 70 países y ha servido a millones de clientes. En esencia, Gano Excel es una de la más compañías más grandes en ventas directas en la industria. Gano Excel también es una de las pocas empresas que es 100% libre de deudas y 100% integrada verticalmente. Esto significa que Gano Excel posee todas las facetas del proceso de fabricación, desde el cultivo de Ganoderma Lucidum hasta el crecimiento y torrefacción del café hasta el empacado y guardado en cajas de sus productos.
Gano Excel fabrica y distribuye una amplia gama de productos únicos, que van desde suplementos alimenticios, bebidas, hasta productos del cuidado personal y de la piel. Gano Excel también tiene sus propias instalaciones de investigación y siempre está trabajando para mejorar su Ganoderma Lucidum y toda su línea de productos.

</div>   
</div>
</div>
    </div>
    </div>
     <a name="getstarted"></a>
    <div class="slide" id="slide-8" align="center">
        <table><tr><td>  <div id="box"><img src="skin/images/evobox.png" style="width:250px;"></div></td><td><a href="sample.php"><img id="gs" src="skin/images/gssp.jpg" style="margin-top:150px;margin-left:25px;width:200px;"></a></td></tr></table>
           
     
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

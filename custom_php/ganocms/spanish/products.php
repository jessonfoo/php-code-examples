<?php
error_reporting(0);
ini_set('display_errors', '0');
?>

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/slick/slick.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="skin/style2.css">
  <link rel="stylesheet" type="text/css" href="css/cafe.css">
  <script src="js/jquery.tiles-gallery.js"  type="text/javascript"></script>
  <link href="css/jquery-tilesgallery.css" rel="Stylesheet" />


</head>


<div class="wrapper" >

 <?php include 'navbar2.php';?>

<!-- Top Slider -->

<?php
set_data("IMAGE_DATA,location='products1'");
$pic=data(filename);
?>

<div  id="cafeslide-1" align="center">

	
	
	<div id="cafetop" align="center">
	    
	<table width=900 cellpadding=10 align="center">
	    <tr>
	        <td colspan=2>   

    <p align="center" style="padding-top:70px;"><a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php
       set_data("IMAGE_DATA,location='products2'");
       echo data(filename);?>?autoplay=1"><img width="500px"  src="geadmin/<?php echo $pic;?>" /></a></p><br>


 </td></tr><tr>
  <td>
       <div class="ganocafe">
     <a href="" id="ganoc"></a>
     <br>
     <span class="fogtext">Nuestra línea de bebidas confort- desde un café de alta calidad y un té, hasta un chocolate caliente enriquecido y sedoso- cada uno repletos de 150+ antioxidantes, 200+ fitonutrientes  y el poder del Ganoderma Lucidum. </span>
   </div>
  </td>
  <td>
     <div class="ganocafe">
     <a href="" id="ganod"></a>
     <br>
     <span class="fogtext">Nuestra línea de productos enriquecidos de uso diario incluyen productos del cuidado personal tales como pasta de dientes y jabón,  complementados con una amplia gama de suplementos para el equilibrio del cuerpo. </span>
   </div> 
  </td>
	    </tr>
	</table>    
	    
	    
	    
	    

</div>

</div>


<div  id="cafeslide-1" align="center"><img style="margin-left:-70px;" src="skin/images/asseenon.png"><br>
  <div style="width:1000px;"align="left" class="cafehead"><a name="ganoc"><img style="margin:5px;" src="skin/images/ganocafe_hover.png"></a></div>
<table>
<tr>
<td>
    
    <a href="productview.php?id=2" style="text-decoration:none;">
    <div class="boxhover" id="pic1" style="margin:3px;margin-right:3px;width:280px;height:286px;background-image:url('skin/images/MainProductPagePics/Tongkat.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic1hover" style="display:none;height:236px;">
    <div style="height:236px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:18px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> GINSENG TONGKAT ALI</div>
    </div>    
    </div>
    </a>
    
        <a href="productview.php?id=5" style="text-decoration:none;">
    <div class="boxhover" id="pic2" style="margin:3px;height:485px;background-image:url('skin/images/MainProductPagePics/Hazelnut.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic2hover" style="display:none;height:435px;">
    <div style="height:435px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> HAZELNUT</div>
    </div>    
    </div>
    </a>
    
    

</td>    
<td>
            <a href="productview.php?id=3" style="text-decoration:none;">
    <div class="boxhover" id="pic3" style="width:417px;margin-left:0px;margin-right:0px;margin-bottom:3px;height:286px;background-image:url('skin/images/MainProductPagePics/Mocha.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic3hover" style="display:none;height:236px;">
    <div style="height:236px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> MOCHA</div>
    </div>    
    </div>
    </a>
            <a href="productview.php?id=6" style="text-decoration:none;">
    <div class="boxhover" id="pic4" style="margin-top:3px;margin-bottom:3px;height:241px;background-image:url('skin/images/MainProductPagePics/Schokolade.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic4hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> SCHOKOLADE</div>
    </div>    
    </div>
    </a>
             <a href="productview.php?id=8" style="text-decoration:none;">
    <div class="boxhover" id="pic5" style="margin-top:3px;height:241px;background-image:url('skin/images/MainProductPagePics/spirulina.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic5hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> SPIRULINA</div>
    </div>    
    </div>
    </a>
</td>    
<td>
                 <a href="productview.php?id=4" style="text-decoration:none;">
    <div class="boxhover" id="pic6" style="width:298px;margin:3px;height:319px;background-image:url('skin/images/MainProductPagePics/3in1.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic6hover" style="display:none;height:269px;">
    <div style="height:269px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> 3 IN 1</div>
    </div>    
    </div>
    </a>
                 <a href="productview.php?id=7" style="text-decoration:none;">
    <div class="boxhover" id="pic7" style="margin:3px;height:208px;background-image:url('skin/images/MainProductPagePics/Classic.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic7hover" style="display:none;height:158px;">
    <div style="height:158px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> CLASSIC</div>
    </div>    
    </div>
    </a>
                  <a href="productview.php?id=9" style="text-decoration:none;">
    <div class="boxhover" id="pic8" style="margin:3px;height:241px;background-image:url('skin/images/MainProductPagePics/Red Rooi Tea.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic8hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:22px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> RED ROOIBOS TEA</div>
    </div>    
    </div>
    </a>

</td>    
</tr><tr><td colspan=3>
<?php
set_data('PRODUCTS,id>16');
$pros=collection();
foreach ($pros as $pro)
{
    if ($pro[category]=='GANO CAFE')
    {
        ?>
     <a href="productview.php?id=<?php echo $pro[id];?>" style="text-decoration:none;">
    <div class="boxhover" id="pic8" style="width:330px;margin:3px;height:241px;background-image:url('geadmin/<?php echo $pro[frontimage];?>');background-size:100% 100%;">
    <div class="boxhover2" id="pic8hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:22px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> <?php echo strtoupper($pro[title]);?></div>
    </div>    
    </div>
    </a>    
        <?php
    }
}

?>
</td>
</tr>    
</table>



<!--
<div  id="cafeslide-1" align="center">
  <div style="width:1000px;"align="left" class="cafehead"><a name="ganoc">GANO CAFE</a></div>
  <div style="height:70%;width:1000px;" class="tiles">
    <p><img class="tileimg" src="skin/images/cafe/image2.jpg" /></p>
    <p><img class="tileimg" src="skin/images/cafe/image2.jpg" /></p>
    <p><img class="tileimg" src="skin/images/cafe/image2.jpg" /></p>
    <p><img class="tileimg" src="skin/images/cafe/image2.jpg" /></p>
    <p><img class="tileimg" src="skin/images/cafe/image2.jpg" /></p>
    <p><img class="tileimg" src="skin/images/cafe/image2.jpg" /></p>
  </div> 
-->
  <br><br><br>

  <div style="width:1000px;color:#4f65ff;"align="left" class="cafehead" ><img style="margin:5px;" src="skin/images/ganodaily_hover.png"></div>
  
  
  <table>
<tr>
<td>
    
    <a href="productview.php?id=10" style="text-decoration:none;">
    <div class="boxhover" id="pic9" style="margin:3px;margin-bottom:0px;width:498px;height:286px;background-image:url('skin/images/MainProductPagePics/GanoSoap.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic9hover" style="display:none;height:236px;">
    <div style="height:236px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> SOAP</div>
    </div>    
    </div>
    </a>
</td>   
<td>
    
    <a href="productview.php?id=11" style="text-decoration:none;">
    <div class="boxhover" id="pic10" style="margin:3px;margin-left:0px;margin-bottom:0px;width:498px;height:286px;background-image:url('skin/images/MainProductPagePics/GanoFresh.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic10hover" style="display:none;height:236px;">
    <div style="height:236px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> FRESH</div>
    </div>    
    </div>
    </a>
</td> 
</tr>    
</table>
  <a name="ganod"></a>
<table>
<tr>
    <td>
           <a href="productview.php?id=12" style="text-decoration:none;">
    <div class="boxhover" id="pic11" style="margin:3px;margin-right:3px;width:330px;height:241px;background-image:url('skin/images/MainProductPagePics/Cordyceps.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic11hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> CORDYCEPS</div>
    </div>    
    </div>
    </a> 
    </td>
    <td>
                <a href="productview.php?id=13" style="text-decoration:none;">
    <div class="boxhover" id="pic12" style="margin:0px;width:330px;height:241px;background-image:url('skin/images/MainProductPagePics/Garcinia.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic12hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> GARCINIA</div>
    </div>    
    </div>
    </a>    
    </td>
    <td>
              <a href="productview.php?id=14" style="text-decoration:none;">
    <div class="boxhover" id="pic13" style="margin:3px;margin-right:3px;width:330px;height:241px;background-image:url('skin/images/MainProductPagePics/Sakanno.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic13hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> SAKANNO</div>
    </div>    
    </div>
    </a>      
    </td>
    
    
    
</tr>  
<tr>
    <td>
           <a href="productview.php?id=15" style="text-decoration:none;">
    <div class="boxhover" id="pic11" style="margin:3px;margin-right:3px;width:330px;height:241px;background-image:url('skin/images/Excellium.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic11hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> EXCELLIUM</div>
    </div>    
    </div>
    </a> 
    </td>
    <td>
                <a href="productview.php?id=16" style="text-decoration:none;">
    <div class="boxhover" id="pic12" style="margin:0px;width:330px;height:241px;background-image:url('skin/images/Ganoderma.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic12hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> GANODERMA</div>
    </div>    
    </div>
    </a>    
    </td>
    <td>
              <a href="sample.php" style="text-decoration:none;">
    <div class="boxhover" id="pic13" style="margin:3px;margin-right:3px;width:330px;height:241px;background-image:url('skin/images/EvoPack.jpg');background-size:100% 100%;">
    <div class="boxhover2" id="pic13hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:24px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> SAMPLE PACK</div>
    </div>    
    </div>
    </a>      
    </td>
    
    
    
</tr>  
<tr><td colspan=3>
<?php
set_data('PRODUCTS,id>16');
$pros=collection();
foreach ($pros as $pro)
{
    if ($pro[category]=='GANO DAILY')
    {
        ?>
     <a href="productview.php?id=<?php echo $pro[id];?>" style="text-decoration:none;">
    <div class="boxhover" id="pic8" style="width:330px;margin:3px;height:241px;background-image:url('geadmin/<?php echo $pro[frontimage];?>');background-size:100% 100%;">
    <div class="boxhover2" id="pic8hover" style="display:none;height:191px;">
    <div style="height:191px;background-color:black;opacity:.6;">
    </div>
    <div style="height:40px;background-color:black;color:white;vertical-align:middle;font-size:22px;padding:5px;
    text-align:right;"><font color="#666666">GANO</font> <?php echo strtoupper($pro[title]);?></div>
    </div>    
    </div>
    </a>    
        <?php
    }
}

?>
</td>
</tr>    
</table>
  
  
  
  
  
  
  
  
  
  
  
  


  <br><br><br>

</div>
<?php include 'footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="js/animate.js"></script>

<script type="text/javascript">
	$(function () {
		$(".tiles").tilesGallery();
	});

	$("#ganod").click(function() {
    $("html, body").animate({ scrollTop: $(document).height() }, "fast");
    return false;

  });

	$("#ganoc").click(function() {
    $("html, body").animate({ scrollTop:600 }, "fast");
    return false;

  });



$(".boxhover").hover(function(){
   
$(this).css('background-position','center');
 $(this).animate({ backgroundSize: '115%' }, 250);
 $(this).find('.boxhover2').fadeIn();    
});

$(".boxhover").mouseleave(function(){
 $(".boxhover").stop();    
 $(this).animate({ backgroundSize: '100%' }, 250);
 $(this).find('.boxhover2').fadeOut();    
});



</script>

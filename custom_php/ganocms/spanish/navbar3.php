<?php 
$con=mysqli_connect("localhost","gano_db","SQLpass123!@","gano_spanish");
include 'geadmin/nvg/nvg_data.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script>
    $(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
<?php 
$fblink='https://www.facebook.com/ganoexcel.northamerica';
$twlink='https://twitter.com/ganoexcel';
$ytlink='https://www.youtube.com/user/TheGanoUSA';
$lilink='https://www.linkedin.com/company/gano-excel-north-america';
$inlink='https://instagram.com/ganoexcelusa/';
?>
</script>
<meta name="viewport" content="width=1024">

 <div class="nav-bar2">

     <table width=100% cellpadding=0 cellspacing=0>
         <tr>
             <td width=25% align="right" bgcolor="#ffffff">
              <div class="logo">
            <a href="index.php"><img style="margin-right:5px;" src="skin/images/logo.jpg"></a>
        </div>
             </td>
             <td class ="navmiddle">
                 
            <div class="nav2">
            <ul>
               <li>
                  <a href="products.php" class="nav-link2<?php if (basename($_SERVER['PHP_SELF'])=="products.php") echo ' act';?>">Productos</a> 
               </li>
               <li>
                  <a href="index.php"  class="nav-link<?php if (basename($_SERVER['PHP_SELF'])=="index.php") echo ' act';?>">Oportunidad</a> 
               </li>
               <li>
                  <a href="company.php"  <?php if (basename($_SERVER['PHP_SELF'])=="company.php") echo 'class="act"';?>>Compañia</a> 
               </li>
               <li>
                  <a href="business.php"  <?php if (basename($_SERVER['PHP_SELF'])=="business.php") echo 'class="act"';?>>Herramientas</a> 
               </li>
               <li>
                  <a href="news.php"   <?php if (basename($_SERVER['PHP_SELF'])=="news.php") echo 'class="act"';?>>Noticias y Eventos</a> 
               </li>
               <li>
                  <a href="contact.php"   <?php if (basename($_SERVER['PHP_SELF'])=="contact.php") echo 'class="act"';?>>Contáctanos</a> 
              
            </ul>
        </div>     
                 
                 
                 
             </td>
             <td>
                 <a href="../" ><span class="spanish2" >Inglés</span></a>
               <span class="top-social">
            <a href="https://www.facebook.com/ganoexcel.northamerica"><img src="skin/images/facebook.png"></a>
            <a href="https://twitter.com/ganoexcel"><img src="skin/images/twitter.png"></a>
            <a href="https://www.youtube.com/user/ganoexcelcoffee"><img src="skin/images/youtube.png"></a>
            <a href="https://www.linkedin.com/company/gano-excel-north-america"><img src="skin/images/linkedin.png"></a> </span><br><a href="https://us.ganoexcel.com/login.asp?url=/home/home.asp">
                <img style="margin-top:6px" src="skin/images/officesp.png"></a> 
             </td>
             <td>  
             </td>
             <td width=25%>
             </td>
         </tr>
 </table>
</div>     

 <div class="nav-bar3" >

     <table width=100% cellpadding=0 cellspacing=0>
         <tr>
             <td width=25% align="right" bgcolor="#ffffff">
              <div class="logo" style="padding:0px 20px 0px 20px;">
            <a href="index.php"><img width=320 style="margin-right:5px;margin-top:-5px" src="skin/images/logom.png"></a>
        </div>
             </td>
             <td class ="navmiddle">
                
                 <div class="nav3" align=right>
<img id="menubutton" src="skin/images/menu.png" width=75 style="padding-right:20px;padding-top:20px">
                 </div>        
        
               
                   
             </td>
            </tr>
 </table>

     
     
  
     
     
    </div>
    


<div class="product-menu">
    <table width=100%>
        <tr><td valign=top> 
                <p><a href="productview.php?id=2" >Ginseng Tongkat Ali</a></p>
        <p><a href="productview.php?id=3" >Mocha</a></p>
                <p><a href="productview.php?id=4" >3 IN 1</a></p>
        <p><a href="productview.php?id=5" >Hazelnut Coffee</a></p>
        <p><a href="productview.php?id=6" >Schokolade</a></p>
        <p><a href="productview.php?id=7" >Classic</a></p>
        </td>
        <td valign=top> 
                <p><a href="productview.php?id=8" >Spirulina</a></p>
        <p><a href="productview.php?id=9" >Red Rooibos Tea</a></p>
                <p><a href="productview.php?id=10" >Gano Soap</a></p>
        <p><a href="productview.php?id=11" >Gano Fresh</a></p>
        <p><a href="productview.php?id=12" >Cordyceps</a></p>
        <p><a href="productview.php?id=13" >Garcinia</a></p>
        </td>
        
        <td valign=top> 
                <p><a href="productview.php?id=14" >Sakanno</a></p>
        <p><a href="productview.php?id=15" >Excellium</a></p>
                <p><a href="productview.php?id=16" >Ganoderma</a></p>
       
        </td>
        <td align="right">
          <a class="various fancybox.iframe" href="http://www.youtube.com/embed/2bK9ah8Pi8U?autoplay=1"><img width="300px" src="geadmin/uploads/image-video.jpg"></a>
        </td></tr>
    </table>    

    </div>



    
    
    <?php
   
if ($_SERVER[REQUEST_URI]=="/~gano/ganocms/spanish/index.php" || $_SERVER[REQUEST_URI]=="/~gano/ganocms/spanish/") {
 ?>   
    
    <div class="mega-menu">
    <table width=100%>
        <tr><td valign=top> 
                <p><a href="#" id="mproducts">Productos</a></p>
        <p><a href="index.php#" id="mtest">Testimonios</a></p>
                <p><a href="index.php#" id="mform">La fórmula Gano Excel</a></p>
                <p><a href="index.php#" id="mstory">Nuestra historia</a></p>
        <p><a href="index.php#" id="msystem">Sistema</a></p>
        <p><a href="index.php#" id="mglobal">Alcance global</a></p>
</td><td valign=top>        <p><a href="index.php#" id="mgetstarted">Comience</a></p></td>
        

        </td><td align="right">
          <a class="various fancybox.iframe" href="http://www.youtube.com/embed/2bK9ah8Pi8U?autoplay=1"><img width="300px" src="geadmin/uploads/image-video.jpg"></a>
        </td></tr>
    </table>    

    </div>
<?php }?>


    <div class="mobile-menu">
        <p><a href="products.php" >Productos</a></p>
        <p><a href="index.php" >Oportunidad</a></p>
        <p><a href="comapny.php" >Compañia</a></p>
        <p><a href="business.php" >Herramientas</a></p>
        <p><a href="news.php" >Noticias y Eventos</a></p>
        <p><a href="contact.php" >Contáctanos</a></p>
        <p><a href="../" >Inglés</a></p>

    </div>

            

<script>

    $('#mtest').click(function () {
    $('html,body').animate({
        scrollTop: $("#slide-3").offset().top-65
    }, 800);
    return false;
});

    $('#mform').click(function () {
    $('html,body').animate({
        scrollTop: $("#slide-4").offset().top-65
    }, 800);
    return false;
});


    $('#mglobal').click(function () {
    $('html,body').animate({
        scrollTop: $("#slide-7").offset().top-65
    }, 800);
    return false;
});

    $('#mgetstarted').click(function () {
    $('html,body').animate({
        scrollTop: $("#slide-8").offset().top-65
    }, 800);
    return false;
});

    $('#mproducts').click(function () {
    $('html,body').animate({
        scrollTop: $("#slide-2").offset().top-65
    }, 800);
    return false;
});

    $('#mstory').click(function () {
    $('html,body').animate({
        scrollTop: $("#slide-5").offset().top-65
    }, 800);
    return false;
});


    $('#msystem').click(function () {
    $('html,body').animate({
        scrollTop: $("#slide-6").offset().top-65
    }, 800);
    return false;
});

    $('#menubutton').click(function () {

$('.mobile-menu').slideToggle();        
    });

$('.nav-link2').mouseover(function(){
   $('.product-menu').stop( true, true ).fadeIn();
});

$('.product-menu').mouseover(function(){
   $('.product-menu').stop( true, true ).fadeIn(0);
});

$('.nav-link2').mouseout(function(){
   $('.product-menu').delay(1000).stop( true, true ).fadeOut();
});
$('.product-menu').mouseout(function(){
   $('.product-menu').delay(1000).stop( true, true ).fadeOut();
});


</script>



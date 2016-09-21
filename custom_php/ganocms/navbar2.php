<?php 
$con=mysqli_connect("localhost","gano_db","SQLpass123!@","gano_db");
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
</script>


<meta name="viewport" content="width=1024">

 <div class="nav-bar2">

     <table width=100% cellpadding=0 cellspacing=0>
         <tr>
             <td width=25% align="right" bgcolor="#2d2720">
              <div class="logo">
            <a href="index.php"><img style="margin-top:0px" src="skin/images/update/newlogo.png" height=66></a>
        </div>
             </td>
             <td class ="navmiddle">
                 
            <div class="nav2">
            <ul>
               <li>
                  <a href="products.php" class="nav-link2">Products</a> 
               </li>
               <li>
                  <a href="index.php"  class="nav-link act">Opportunity</a> 
               </li>
               <li>
                  <a href="company.php"  >Company</a> 
               </li>
               <li>
                  <a href="business.php"  >Business Owner</a> 
               </li>
               <li>
                  <a href="news.php"   >News & Events</a> 
               </li>
               <li>
                  <a href="contact.php"   >Contact</a> 
              
            </ul>
        </div>     
                 
                 
                 
             </td><td><img src="skin/images/update/rs.png" height=66></td>
             <td>
                <a href="spanish" ><span class="spanish2" >Espa&ntilde;ol</span></a>
               <span class="top-social">
            <a href="https://www.facebook.com/ganoexcel.northamerica"><img src="skin/images/facebook.png"></a>
            <a href="https://twitter.com/ganoexcel"><img src="skin/images/twitter.png"></a>
            <a href="https://www.youtube.com/user/TheGanoUSA"><img src="skin/images/youtube.png"></a>
            <a href="https://www.linkedin.com/company/gano-excel-north-america"><img src="skin/images/linkedin.png"></a> </span><br><a href="https://us.ganoexcel.com/login.asp?url=/home/home.asp">
                <img style="margin-top:6px" src="skin/images/update/backoffice.png" height=25></a> 
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
             <td width=25% align="right" bgcolor="#6d6964">
              <div class="logo" style="margin:0;padding:0px 0px 0px 0px;">
            <a href="index.php"><img height=110 style="margin-right:6px;margin-top:-22px"  src="skin/images/update/newlogo.png" ></a>
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
          <a class="various fancybox.iframe" href="http://www.youtube.com/embed/xwOzHEBSDp4?autoplay=1"><img width="300px" src="http://www.ganoexcel.us/images/image-video2.jpg"></a>
        </td></tr>
    </table> 

    </div>



    
    
       
    
    <div class="mega-menu">
    <table width=100%>
        <tr><td valign=top> 
                <p><a href="#" id="mproducts">Products</a></p>
        <p><a href="index.php#" id="mtest">Testimonials</a></p>
                        <p><a href="index.php#" id="mform">The Gano Excel Formula</a></p>
                <p><a href="index.php#" id="mstory">Our Story</a></p>
        <p><a href="index.php#" id="msystem">System</a></p>
        <p><a href="index.php#" id="mglobal">Global Reach</a></p>
        </td><td valign=top>
        <p><a href="index.php#" id="mgetstarted">Get Started</a></p>
                 <p><a href="http://www.goganoexcel.com" id="gogano">goganoexcel.com</a></p>
    
   
        </td><td align="right">
          <a class="various fancybox.iframe" href="http://www.youtube.com/embed/xwOzHEBSDp4?autoplay=1"><img width="300px" src="http://www.ganoexcel.us/images/image-video2.jpg"></a>
        </td></tr>
    </table>    

    </div>





    <div class="mobile-menu">
        <p><a href="products.php" >Products</a></p>
        <p><a href="index.php" >Opportunity</a></p>
        <p><a href="company.php" >Company</a></p>
        <p><a href="business.php" >Business Owner</a></p>
        <p><a href="news.php" >News & Events</a></p>
        <p><a href="contact.php" >Contact</a></p>
        <p><a href="spanish" >Spanish</a></p>
        <p><a href="https://us.ganoexcel.com/login.asp?url=/home/home.asp" >Back Office</a></p>

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


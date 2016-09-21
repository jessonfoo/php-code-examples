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
                  <a href="products.php" >Products</a> 
               </li>
               <li>
                  <a href="index.php"  class="nav-link">Opportunity</a> 
               </li>
               <li>
                  <a href="company.php" >Company</a> 
               </li>
               <li>
                  <a href="business.php">Business Owner</a> 
               </li>
               <li>
                  <a href="news.php" >News & Events</a> 
               </li>
               <li>
                  <a href="contact.php" >Contact</a> 
               </li>     
               <li class="nohover">
                  <a href="#" ><span class="spanish">SPANISH</span></a> 
               </li> 
               <li ><span class="top-social">
                     <a href="#"><img src="skin/images/facebook.png"></a>
            <a href="#"><img src="skin/images/twitter.png"></a>
            <a href="#"><img src="skin/images/youtube.png"></a>
            <a href="#"><img src="skin/images/linkedin.png"></a> </span>
               </li>
            </ul>
        </div>     
                 
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
    






    
    
    <div class="mega-menu">
        <p><a href="#" id="mproducts">Products</a></p>
        <p><a href="index.php#" id="mstory">Our Story</a></p>
        <p><a href="index.php#" id="msystem">System</a></p>

    </div>


    <div class="mobile-menu">
        <p><a href="#" id="mproducts">Products</a></p>
        <p><a href="index.php#" id="mstory">Our Story</a></p>
        <p><a href="index.php#" id="msystem">System</a></p>

    </div>



<script>
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



</script>



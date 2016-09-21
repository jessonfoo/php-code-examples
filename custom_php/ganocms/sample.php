<?php

?>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>

<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="skin/style2.css">
<link rel="stylesheet" type="text/css" href="css/cafe.css">


</head>
<style>
.image-text {
  position: absolute;
  margin-top: -185px;
  margin-left: 300px;
  width:250px;
}
</style>
<div class="wrapper" id="parallax">
    
      <!-- NAVBAR --> 
<?php include 'navbar2.php';?>

    
    <!-- Top Slider -->
    <div class="top-slider">
          <?php 
    set_data("SLIDER,location='sample'");
    $slides=collection();
    foreach ($slides as $slide)
    {
    echo '<div><img src="geadmin/'.$slide[image].'"></div>';     
    }
    
    
    ?>
     
    </div>

<div class="productover">
<img src='/~gano/ganocms/skin/images/bestselection1.png'>
</img>
<p class='image-text'>
<?php
set_data("TEXT_DATA,location='sample'");
echo data(content);
?>
</p>
</div>

    
    <div class="proform" align="center">
    <table width=1000>
        <tr>
        <td width=40%><img src="skin/images/cafe/formimage.jpg"></td>
        <td valign="top">
            <br><br>
         <!--<strong>SAMPLE PACK STARTER</strong>    
       
        <p>Email</p>
        <input type="text">
        <p>Name</p>
        <input type="text">
    
        <p>Shipping</p>
        <input type="text">
        <p>Payment</p>
        <input type="text">
      
        <br><br>
        <input type="submit" value="SUBMIT" class="subbutton">
        <br><br><br>-->
        Thank you for your interest in our premium coffee products!  We have compiled an affordable Evolution of Coffee Sample Pack just for you!  This pack contains 6 samples of our Ganoderma Lucidum-infused beverages including: GanoCafé Classic, Mocha, Hazelnut, 3-in-1, Ginseng Tongkat Ali and Schokolade. 
<br><br>
For only $10, you can order our Evolution Sample Pack by calling customer service Mon-Fri between 8:00am and 5:30pm at <strong>(626)-338-8081</strong>.  Call today, and get started on your journey to Health and Wealth!
        </td>
        
        </tr>
    </table>    
     
    </div>
         


         
    </div>

   
    
   <?php include 'footer.php';?>
    
</div>

<script src="js/animate.js"></script>

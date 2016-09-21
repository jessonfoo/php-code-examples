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
<img src='/~gano/ganocms/spanish/skin/images/bestselection_sp1.png'>
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
       ¡Gracias por tu interés en nuestros exclusivos productos de café gourmet! Hemos hecho este económico Paquete de Muestras para que lo aproveches al máximo. El paquete incluye 6 muestras de nuestras bebidas enriquecidas con Ganoderma lucidum: GanoCafé Classic, Mocha, Hazelnut, 3-in-1, Ginseng Tongkat Ali, y Schokolade.
<br><br>
Por sólo $10, puedes ordenar nuestro Paquete de Muestras “Evolución” sencillamente llamando a nuestro Departamento de Servicio al Cliente – abierto de lunes a viernes, de 8:00am a 5:30pm – al (626)-338-8081. ¡Llama hoy mismo y comienza tu camino hacia la Salud y la Riqueza! 
</td>
        
        </tr>
    </table>    
     
    </div>
         


         
    </div>

   
    
   <?php include 'footer.php';?>
    
</div>

<script src="js/animate.js"></script>

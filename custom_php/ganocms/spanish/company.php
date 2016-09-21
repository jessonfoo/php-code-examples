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
        background-image:url('skin/images/companysp3.jpg');
        background-position: 0px <?php echo $top;?>px;
        background-repeat:no-repeat;
        height:2400px;
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
        background-image:url('skin/images/2000s.jpg');
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
Desde hace 2,000 años, el Ganoderma Lucidum ha sido identificado y considerado como uno de los mejores, un remedio herbal muy beneficioso. 
          <span class="expandbutton">
            <div class="expand" align="left">
Esta “hierba milagrosa” ha sido ampliamente utilizada a lo largo de muchas regiones en diferentes países, pero es mejor conocida entre las culturas asiáticas. Contiene más de 150 antioxidantes y 200 fitonutrientes. El hongo fue atribuido con propiedades terapéuticas, y se ha utilizado en el tratamiento de innumerables enfermedades y condiciones.

          </div>
          <span class="rm">Leer Más</span>
      </span>
  </div>

  <div class="text-ds" id="content2" align="left">
El fundador de Gano Excel, el Sr. Leow Soon Seng, comenzó investigando la manera más eficiente de cultivar el Ganoderma Lucidum y la forma más potente para lograr sus efectos terapéuticos. 
    <span class="expandbutton">
        <div class="expand" align="left"> 
Sus años de investigación valieron la pena, ya que perfeccionó la fabricación y el proceso de extracto que se utiliza para llevar el Ganoderma Lucidum en los productos a millones de clientes cada año.

       </div>
       <span class="rm">Leer Más</span>
   </span>
</div>

<div id="content3-video" align="left">
        <iframe width="420" height="270" src="http://www.youtube.com/embed/2bK9ah8Pi8U?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="text-d" id="content3" align="left">
    Sus años de investigación valieron la pena, ya que perfeccionó la fabricación y el proceso de extracto que se utiliza para llevar el Ganoderma Lucidum en los productos a millones de clientes cada año.

<!--     <span class="expandbutton"> -->
<!--         <div class="expand" align="left"> -->
<!-- <!&#45;&#45; Additional Content Not Provided &#45;&#45;> -->
<!--         </div> -->
<!--         <span class="rm">Leer Más</span> -->
<!--     </span> -->
</div>

<div id="content4" class="text-ds" align="left">
    Gano Excel es el único proveedor de Ganoderma Lucidum en el mundo que sea dueño 
    <span class="expandbutton">
        <div class="expand" align="left">
         de sus propias instalaciones de producción. Los hongos son cultivados y cosechados dentro de unos invernaderos enormes a un clima controlado, donde cada variable es controlado cuidadosamente y su pureza es garantizada. Le garantizamos la calidad y la pureza, desde la plantación de la siembra inicial espora hasta la mesa del consumidor.

      </div>
      <span class="rm">Leer Más</span>
  </span>
</div>

<div id="content5" class="text-ds" align="left">
    Los productos de Gano Excel son enriquecidos con el Ganoderma Lucidum patentado de Gano Excel. Gano Excel ofrece productos de alta calidad 
    <!-- Desde su inicio, Gano Excel se ha expandido en 70 diferentes países en últimas dos décadas. Gano Excel es propetario y opera la plantación -->
    <span class="expandbutton">
        <div class="expand" align="left">
         sin comprometer su sabor. Con nuestro proceso patentado, nos aseguramos de que cada vez que usted tome una taza de café de Gano Excel, ¡siempre esté tan bueno como recién hecho!

            <!-- de Ganoderma Lucidum completamente orgánico más grande del mundo. -->
        </div>
        <span class="rm">Leer Más</span>
    </span>
</div>

<div id="content6" class="text-ds" align="left">
Como el pionero original en llevar los beneficios del Ganoderma Lucidum al Occidente, Gano Excel fue el primero en introducir 
    <span class="expandbutton">
        <div class="expand" align="left">
          el suplemento a los Estados Unidos y a el resto de Norteamérica. A pesar de que hoy en día tenemos varios competidores "copycat", Gano Excel sigue siendo el líder en el mercado y el único proveedor que controla sus productos de principio a fin, desde su producción hasta la comercialización.

        </div>
        <span class="rm">Leer Más</span>
    </span>
</div>

<div id="content7" class="text-ds" align="left">
    Gano Excel se compromete a nunca pagar millones a las empresas de medios y publicidad, Gano Excel decidió que es mejor 
    <span class="expandbutton">
        <div class="expand" align="left">
          pagarle a sus clientes para COMPARTIR nuestro producto. ¡Vea cómo puede usted beneficiarse de la oportunidad de Gano Excel!

      </div>
      <span class="rm">Leer Más</span>
  </span>
</div>

<div id="content8" class="text-d" align="left">
    Gano Excel lanza la campaña de La Evolución del Café y sus pilares fundamentales, y las ventas suben alcanzando cifras récord.
    <!-- <span class="expandbutton"> -->
    <!--     <div class="expand" align="left"> -->
    <!--     </div> -->
    <!--     <span class="rm">Leer Más</span> -->
    <!-- </span> -->
</div>

<div id="content9" class="text-ds" align="left">
    Gano Excel lanza nuevos productos y abre centros de distribución, estratégicamente ubicados en los ESTADOS UNIDOS 
    <span class="expandbutton">
        <div class="expand" align="left">
(Irwindale, Rialto, Fresno, Las Vegas, Phoenix, Dallas, Denver).
      </div>
      <span class="rm">Leer Más</span>
  </span>
</div>

<div id="content10" class="text-d" align="left">
  <ul style="margin-bottom:0px;">
<li>El café es el segundo producto principal en el mundo- 2 billones de tazas de café se consumen cada día en el mundo. </li>
<li>La industria de la Salud y Bienestar están actualmente valorados en $200 billones de dólares en ingresos anuales y se proyecta alcanzar $1 trillón en los próximos años.
</li></ul>
 <span class="expandbutton">
  <div class="expand" align="left">
<ul style="margin-top:0px;">
<li>Los negocios en casa han creado a más millonarios que cualquier otra industria. </li>
<li>Las ventas al por menor se han convertido en una industria de trillones de dólares.</li>
<li>El Mercadeo en Red es la prueba de recesión y es una industria global de $155 billones de dólares.</li>
<li>Celebrando más de 20 años cambiando vidas exitosamente. </li>
<li>Más de 150 años de experiencia en liderazgo corporativo.</li>
<li>Más de 500,000 afiliados globalmente y en crecimiento.</li>
<li>La primera y la mejor compañía en traer Ganoderma Lucidum.</li>
<li>Millones de dólares en comisiones pagadas. </li>
<li>Y... el mercado Estadounidense acaba de comenzar. </li>
<li>El tiempo de actuar... es AHORA.</li>
</ul>
  </div>
  <span class="rm">Leer Más</span>
</span>
</div>

</div>
 <div id="clickpro" style="left:50%;width:600px;height:200px;position:absolute;top:840px;">
     <img src="skin/images/blank.gif" usemap="#promap">
 </div>
</div>

<map name="promap">
  <area shape="rect" coords="0,0,90,100" href="productview.php?id=7" >
  <area shape="rect" coords="90,0,180,100" href="productview.php?id=2" >
  <area shape="rect" coords="180,0,270,100" href="productview.php?id=3" >
<area shape="rect" coords="270,0,360,100" href="productview.php?id=4" >
<area shape="rect" coords="360,0,430,100" href="productview.php?id=6" >
<area shape="rect" coords="430,0,520,100" href="productview.php?id=8" >
<area shape="rect" coords="520,0,600,100" href="productview.php?id=9" >
  <area shape="rect" coords="0,100,90,200" href="productview.php?id=16" >
  <area shape="rect" coords="90,100,180,200" href="productview.php?id=12" >
  <area shape="rect" coords="180,100,270,200" href="productview.php?id=15" >
<area shape="rect" coords="270,100,360,200" href="productview.php?id=13" >
<area shape="rect" coords="360,100,430,200" href="productview.php?id=14" >
<area shape="rect" coords="430,100,520,200" href="productview.php?id=10" >
<area shape="rect" coords="520,100,600,200" href="productview.php?id=11" >
</map>

<script>

<?php

for ($i=1;$i<=10;$i++)
{
$p='p'.$i;    
set_data("COMPANY,position='$p'");
if (data(text)<>''){
?>    
$('#content<?php echo $i;?>').html('<?php echo data(text);?><?php if ($i<>3 && $i<>8){set_data("COMPANY,position='$p"."r'");?><span class="expandbutton"><div class="expand" align="left"><?php echo data(text);?></div><span class="rm">READ MORE</span></span><?php }?>');
<?php    
}

    
}

?>

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

        if (status=='Leer Más'){
            $(this).find('.rm').html('Cerrar');
        } else {
            $(this).find('.rm').html('Leer Más');
        }


    });



</script><br>
<table width=100% cellpadding=0 cellspacing=0>
<tr>
<td width=50% style="background-image:url('ogb.png');background-size: auto 222px;"></td>
<td ><a href="sample.php"><img src="skin/images/evopacksp.png" id="evo" height=222px onmouseover="skin/images/evopackhoversp2.jpg" onmouseout="skin/images/evopacksp.png"></a></td>

<td width=50% style="background-image:url('ogb.png');background-size: auto 222px;"></td>

</tr>
</table>

<?php include "footer.php";?>

<script>
    $('#evo').mouseover(function(){
    $(this).attr("src", 'skin/images/evopackhoversp2.jpg');
    });
        $('#evo').mouseout(function(){
    $(this).attr("src", 'skin/images/evopacksp.png');

    });
</script>

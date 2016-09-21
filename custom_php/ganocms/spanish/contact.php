<?php

?>

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/parallax.js"></script>
  <link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="skin/style2.css">
<link rel="stylesheet" type="text/css" href="css/contact2.css">
</head>

<body>

<style type="text/css">

#cboxes td p{

font-size:14px;    
}    
</style>    

<div class="wrapper" > 
  <?php include "navbar2.php";?>	
    <!-- content -->
      <div style="height:90%;background:url(img/contact/contactmap.jpg) no-repeat 50% 0%;background-size:contain;width:100%;" class="content-container" align="center">
  <div class="ge-contact">    					    	
    <table	align="center" id="cboxes" width=1024>
     <tr>
      <td class="cols-3 gec-col" valign="top"><h3>Contáctanos</h3>
                    <p>
                      <b><u>La Sede Corporativa</u></br>
                      Irwindale, CA</b></br>
                      (626) - 480 - 7550
                    </br>	4828 4th Street, Irwindale, CA 91706
                    </p>
                    <p>
                       <b><u>Centros de Apoyo Corporativo</u></br>
                      Rialto, CA</b></br>
                      223 South Riverside Ave, Rialto, CA 92376
                    </p>

                    <p>
                      <b>Fresno, CA</b></br>
                      (559) - 892 - 0727</br>
                      3632 West Shaw Avenue, Fresno, CA 93711
                    </p>


                    <p>
                    <b>	Phoenix, AZ</b></br>
                      (480) - 336 - 2988</br>
                      3415 W. Glendale Ave, Phoenix, AZ 85051
                    </p>


                    <p>
                      <b>Las Vegas, NV</b></br>
                      (702) - 800 - 2668</br>
                      4712 West Sahara Ave #2</br>
                      Las Vegas, NV 89102
                    </p>

                    <p>
                    <b>	Dallas, TX </b></br>
                      (214) - 466 - 7477</br>
                      3560 Forest Ln </br>
                      Dallas TX, 75234
                    </p>


                    <p>
                    <b>	Denver, CO </b></br>
                      (303) - 468 - 8654</br>
                      4621 Peoria St. Suite H</br>
                      Denver, CO 80239
                    </p></td>     
</div>
<div class="ge-contact">
     <td class="cols-3 twit-col" valign="top">
<!-- <img src="img/contact/twitter.png"> -->
<div class="twitter-container">
<a class="twitter-timeline" href="https://twitter.com/ganoexcel" data-widget-id="589209632482021376">Tweets by @ganoexcel</a>
</div>
<!-- <h3>twitter</h3> -->
</div>
<div class="ge-contact">     
<td class="cols-3 fb-col" valign="top"><h3 style="color:white;">Buscanos en:</h3>
  <a href="<?php echo $fblink;?>"><img src="skin/images/ifacebook.png"></a> 
  <a href="<?php echo $twlink;?>"><img src="skin/images/itwitter.png"></a>
  <a href="<?php echo $inlink;?>"><img src="skin/images/iinstagram.png"></a>
  <a href="<?php echo $lilink;?>"><img src="skin/images/ilinkedin.png"></a>
  <a href="<?php echo $ytlink;?>"><img src="skin/images/iyoutube.png"></a>
  
<!-- <h3>facebook</h3> -->
</div>
      </tr>
      </table>
</div>


    <!-- jesson html end -->
<br><br><br><br><br><br><br><br><br><br><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


  <!--jesson js begin-->
 <!-- <script src="js/animate.js"></script>-->
</div>   
</body>
<?php include "footer.php" ?>




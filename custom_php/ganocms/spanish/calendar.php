<?php
setlocale(LC_TIME, 'es_ES'); 
?>
<style type="text/css">
.cal td {
        font-weight:bold;
        cursor:pointer;
    }
.popup {
        display:none;
        color:#BD6A2E;
        padding:10px;
        position:absolute;
        left:calc(50% - 320px);
        top:448px;
        width:300px;
        height:400px;
        background-color:#dadada;
}    
</style>
<?php

$d=date('n');
switch ($d) {
case 1:
    $sdate='ENERO';
    break;
case 2:
    $sdate='FEBRERO';
    break;
case 3:
    $sdate='MARZO';
    break;
case 4:
    $sdate='ABRIL';
    break;
case 5:
    $sdate='MAYO';
    break;
case 6:
    $sdate='JUNIO';
    break;
case 7:
    $sdate='JULIO';
    break;
case 8:
    $sdate='AGOSTO';
    break;
case 9:
    $sdate='SEPTIEMBRE';
    break;
case 10:
    $sdate='OCTUBRE';
    break;
case 11:
    $sdate='NOVIEMBRE';
    break;
case 12:
    $sdate='DICIEMBRE';
    break;
    
    
}



$month=strtoupper($sdate);

$row=0;
for ($d=1;$d<=date('t');$d++)
{
    
    $dw=date('w',mktime(0,0,0,date('n'),$d,date('Y')));
    if ($dw==0)$row++;
    $day[$row][$dw]=$d;
}




?>

<div style="width:500px;height:237px;background-image:url('skin/images/caltexture.jpg');">

    <div style="padding:10px;">
<span style="color:#FFFFFF;font-size:23px;"><?php echo $month.' '.date('Y');?></span>       
</div>
<div style="padding:5px;width:490px;height:20px;background-color:#9d0000;" >
<table width=100% align=center>
<tr>
<td width=71 align=center>
<p style="color:white;">S</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">M</p>  
</td>    
<td width=71 align=center>
<p style="color:white;">T</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">W</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">T </p>   
</td>    
<td width=71 align=center>
<p style="color:white;">F</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">S</p>    
</td>    

</tr> 
</table>
<span class="cal">

<table width=100% align=center>




<tr>
<td width=71 align=center>
<p style="color:white;"><?php echo $day[0][0];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[0][1];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[0][2];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[0][3];?></p>    
</td>  
<td width=71 align=center>
<p style="color:white;"><?php echo $day[0][4];?></p>  
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[0][5];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[0][6];?></p>  
</td>    

</tr> 

<tr>
<td width=71 align=center>
<p style="color:white;"><?php echo $day[1][0];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[1][1];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[1][2];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[1][3];?></p>    
</td>  
<td width=71 align=center>
<p style="color:white;"><?php echo $day[1][4];?></p>  
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[1][5];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[1][6];?></p>  
</td>    

</tr> <tr>
<td width=71 align=center>
<p style="color:white;"><?php echo $day[2][0];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[2][1];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[2][2];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[2][3];?></p>    
</td>  
<td width=71 align=center>
<p style="color:white;"><?php echo $day[2][4];?></p>  
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[2][5];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[2][6];?></p>  
</td>    

</tr> <tr>
<td width=71 align=center>
<p style="color:white;"><?php echo $day[3][0];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[3][1];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[3][2];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[3][3];?></p>    
</td>  
<td width=71 align=center>
<p style="color:white;"><?php echo $day[3][4];?></p>  
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[3][5];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[3][6];?></p>  
</td>    

</tr> <tr>
<td width=71 align=center>
<p style="color:white;"><?php echo $day[4][0];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[4][1];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[4][2];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[4][3];?></p>    
</td>  
<td width=71 align=center>
<p style="color:white;"><?php echo $day[4][4];?></p>  
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[4][5];?></p> 
</td>    
<td width=71 align=center>
<p style="color:white;"><?php echo $day[4][6];?></p>  
</td>    

</tr> 
</table>    
   </span> 
</div>   
</div>

<div class="popup">
   <span style="font-size:22px" id="pdate"><?php echo $sdate;?></span>
   <div class="popup2"></div>
</div>




<script>
$('.cal td').hover(function(){
   var check=$(this).find("p").html();
   if (check >= 0){
   $(this).css('background-color','#ffffff');
    $(this).find("p").css('color','#9d0000');
   
 //  console.log(check);
  if (check.indexOf(">1<") >= 0){
    }
  // alert ($(this).html());
  $('.popup').stop( true, true ).fadeIn(); 
  $('#pdate').html('<?php echo $sdate;?> '+check);
   }
   



 $.ajax({
        type: 'post',
        url: 'getevent.php',
        data: {
             thedate: '<?php echo date('Y').'-'.date('n');?>-'+check
            
        },
        success: function( data ) {
        $('.popup2').html(data);
        }
    });
    
    
    







   });





$('.cal td').mouseout(function(){
   
   $(this).css('background-color','transparent');
  $(this).find("p").css('color','#ffffff');
   $('.popup').stop( true, true ).fadeOut(); 
});


</script>
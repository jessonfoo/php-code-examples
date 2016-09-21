<?php

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
        left:calc(50% - 300px);
        top:calc(50% + 43px);
        width:300px;
        height:400px;
        background-color:#dadada;
}    
</style>


<div style="width:500px;height:237px;background-image:url('skin/images/caltexture.jpg');">

    <div style="padding:10px;">
<span style="color:#666666;font-size:23px;">APRIL 2015</span>    
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
 
</td>    
<td width=71 align=center>

</td>    
<td width=71 align=center>

</td>    
<td width=71 align=center>
<p style="color:white;">1</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">2</p>   
</td>    
<td width=71 align=center>
<p style="color:white;">3</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">4</p>    
</td>    

</tr> 


<tr>
<td width=71 align=center>
<p style="color:white;">5</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">6</p>  
</td>    
<td width=71 align=center>
<p style="color:white;">7</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">8</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">9</p>   
</td>    
<td width=71 align=center>
<p style="color:white;">10</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">11</p>    
</td>    

</tr> 


<tr>
<td width=71 align=center>
<p style="color:white;">12</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">13</p>  
</td>    
<td width=71 align=center>
<p style="color:white;">14</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">15</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">16</p>   
</td>    
<td width=71 align=center>
<p style="color:white;">17</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">18</p>    
</td>    

</tr> 

<tr>
<td width=71 align=center>
<p style="color:white;">19</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">20</p>  
</td>    
<td width=71 align=center>
<p style="color:white;">21</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">22</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">23</p>   
</td>    
<td width=71 align=center>
<p style="color:white;">24</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">25</p>    
</td>    

</tr> 
<tr>
<td width=71 align=center>
<p style="color:white;">26</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">27</p>  
</td>    
<td width=71 align=center>
<p style="color:white;">28</p>    
</td>    
<td width=71 align=center>
<p style="color:white;">29</p>   
</td>    
<td width=71 align=center>
<p style="color:white;">30</p> 
</td>    

</tr> 
</table>    
   </span> 
</div>   
</div>

<div class="popup">
   <span style="font-size:40px" id="pdate">APRIL</span> 
</div>


<script>
$('.cal td').hover(function(){
   var check=$(this).find("p").html();
   if (check >= 0){
   $(this).css('background-color','#ffffff');
    $(this).find("p").css('color','#9d0000');
   
   console.log(check);
  if (check.indexOf(">1<") >= 0){
   alert('asd'); }
  // alert ($(this).html());

   }
   
  $('.popup').stop( true, true ).fadeIn(); 
  $('#pdate').html('APRIL '+check);
   });

$('.cal td').mouseout(function(){
   
   $(this).css('background-color','transparent');
  $(this).find("p").css('color','#ffffff');
   $('.popup').stop( true, true ).fadeOut(); 
});


</script>
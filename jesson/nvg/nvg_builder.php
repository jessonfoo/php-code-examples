<?php

function create_form($id,$ajax,$response)
{
    
global $formend;
global $specify;
global $table;

echo '<form id="'.$id.'" class="'.$id.'" enctype="multipart/form-data" method="POST" action="">';    

$formend='</form><script>$("#'.$id.'").submit(function() {

    var url = "ajax/'.$ajax.'"; 
var formData = new FormData($(this)[0]);

    $.ajax({
           type: "POST",
            url: url,
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
           success: function(data)
           {
              
            
                $("#'.$response.'").html(data);  
           },
           complete: function(){
   
 
           }
         });

    return false; 
});</script>';
    
}

function end_form()
{
global $formend;    
echo $formend;    
}



function form_content($type,$params)
{
    global $con;
    global $specify;
    
    $params=explode(',',$params);
    foreach ($params as $output)
    {
    
        $output=explode(':',$output);
    
        switch ($output[0]){
            
        case "text":
            
            if ($type=='label'){
            echo '<label id="label_'.$output[1].' for="'.$output[1].'">'.$output[2].'</label>';   
            $output[2]='';
            }
            echo '<input type="text" name="'.$output[1].'" id="'.$output[1].'" placeholder="'.$output[2].'"';
            if ($specify<>'') echo'value="'.data($output[1]).'"';
            echo '>';
            break;
        
         case "password":
            
            if ($type=='label'){
            echo '<label id="label_'.$output[1].' for="'.$output[1].'">'.$output[2].'</label>';   
            $output[2]='';
            }
            echo '<input type="password" name="'.$output[1].'" id="'.$output[1].'" placeholder="'.$output[2].'">';
            break;
            
        case "submit":  
            
            echo '<input type="submit" id="'.$output[1].'" name="'.$output[1].'" value="'.$output[2].'">';  
            break;
        }  
        $cnt++;
    }
        
    
}


function list_header($name,$params,$titles)
{

echo '<div class="'.$name.'">';
$vars=explode(',',$params);
$titles=explode(',',$titles);

$cnt=0;

foreach ($titles as $newtitles)
{
echo '<span class="'.$vars[$cnt].'">'.$newtitles.'</span>';    
$cnt++;
    
}
echo '</div>';    
    
}    

function show_list($name,$params,$added)
{
    global $con;
    global $specify;
    global $table;
    
    $params=explode(',',$params);
    $added=explode(',',$added);

    
    $newcol=collection();
    echo '<ul class="'.$name.'">';
    foreach ($newcol as $output)
    {
        echo '<li>';
        foreach ($params as $vars)
        {
            echo '<span class="'.$vars.'">'.$output[$vars].'</span>';
        
            //custom vars
        }
        
        
        foreach ($added as $buttons)
        {
            switch ($buttons){
            
            case 'edit':
            echo '<span class="edit"><a href="index.php?p=action&m=edit'.$name.'&id='.$output[id].'">EDIT</a></span>';    
            break;
            
            case 'view':
            echo '<span class="view"><a href="index.php?p=action&m=view'.$name.'&id='.$output[id].'">VIEW</a></span>';    
            break;
              
            case 'delete':
            echo '<span class="delete"><a href="index.php?p=action&m=delete'.$name.'&id='.$output[id].'" onclick="return confirm(\'Are you sure you want to delete this item?\')">DELETE</a></span>';    
            break;
            
            //custom buttons    
            }
        }
        
        echo '</li>';
    }    
    echo '</ul>';
}

function show_videos_e($vids)
{
    
foreach ($vids as $video)    
    {
        del('VIDEOS',$video[id]);
        echo '<iframe style="margin:10px;" width="150" height="130" src="https://www.youtube.com/embed/'.$video[link_req].'" frameborder="0" allowfullscreen></iframe>';
    }
}

function show_videos($vids)
{
    
foreach ($vids as $video)    
    {
       
        echo '<iframe style="margin:10px;" width="150" height="130" src="https://www.youtube.com/embed/'.$video[link_req].'" frameborder="0" allowfullscreen></iframe>';
    }
}

function attest($var,$player)
{

    $aclass="opacity:.4";
    echo '<div id="attestres'.$var.'"></div>';
    echo '<table cellpadding=10><tr><td>'.data($var).'</td><td>';
    set_data("ATTESTED,player_id=$player AND trait='$var'");
    create_form('attest'.$var,'attest.php','attestres'.$var);
    ?>
    <input type="hidden" name="player_id" value="<?php echo $player;?>">
    <input type="hidden" name="attestdate" value="<?php echo date('Y-m-d');?>">
    <input type="hidden" name="trait" value="<?php echo $var;?>">

    
    <?php
    echo '<input type="text" name="realdata" style="margin-top:15px;width:100px;" placeholder="Actual" value="'.data(realdata).'"><input type="submit" name="submit" value="Attest">';
    end_form();
    echo '</td></tr></table>';
     set_data("ABILITIES,player_id=".$player." AND newest=1"); 
}


function get_attest($var,$player)
{

    $aclass="opacity:1";
    echo '<div id="attestres'.$var.'"></div>';
    echo '<table ><tr><td>';
     if ($var<>'height') { echo data($var); } else {
           
        $feet=floor(data(height)/12);
        
        $inches=data(height)-($feet*12);
        echo $feet."'".$inches.'"';
     }     
     
     echo '</td><td>';
    set_data("ATTESTED,player_id=$player AND trait='$var'");
   
   if (data(realdata)<>''){
    ?>

<table><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:arial;font-size:16px;font-weight:bold;color:green;"><?php if ($var<>'height'){ echo data(realdata); } 
else {
  
           
        $feet=floor(data(realdata)/12);
        
        $inches=data(realdata)-($feet*12);
        echo $feet."'".$inches.'"';
     }  

?></span></td><td><img src="skin/images/listingpage.png" style="max-width:300px;" width=20></td></tr></table>
    
    <?php
   }
    //echo '<input type="text" name="realdata" style="margin-top:15px;width:100px;" placeholder="Actual" value="'.data(realdata).'"><input type="submit" name="submit" value="Attest">';

    echo '</td></tr></table>';
     set_data("ABILITIES,player_id=".$player." AND newest=1"); 
}



function del($table,$id)
{

    
$out= '<span id="a'.$table.$id.'"></span><form style="display:inline;" id="fd'.$table.$id.'" method="post">
<input type="hidden" name="id" value="'.$id.'">
<input type="hidden" name="table" value="'.$table.'">

<span class="del" style="cursor:pointer;"><img width=20 src="img/x.png" id="del'.$table.$id.'"></span></form>';
$out.='


<script>$(\'#del'.$table.$id.'\').click(function() {
var r=confirm(\'Are you sure you want to delete this item?\');
  if (r==true) {
   

    var url = "ajax/delete.php"; 
var formData = new FormData($(\'#fd'.$table.$id.'\')[0]);

    $.ajax({
           type: "POST",
            url: url,
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
           success: function(data)
           {
             
              $("#a'.$table.$id.'").html(data);  
              
           },
           complete: function(){
   
 
           }

});
}
});    

</script>
';

return $out;
}

?>
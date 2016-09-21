<?php
/*
* Template Name: accutek browse page
*/

get_header();
$con=mysqli_connect("localhost","accuteki_word02e","IXVLdB2a8kKo","accuteki_wordpress02e");
if (mysqli_connect_errno($con)) {echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
?>
<div class="full-width" style="background-size:cover;background:url(<?php get_img($texture);?>);">
  <div class="container full-width p-rel" style="min-height:157px;background-size:contain;background-image:url(<?php get_img($banner);?>);">
    <p style="left:30px; bottom:-30px;" class="f-play fs-42 color-white p-abs">Browse Accutek</p>
  </div>
</div>
<div class="container w-1200">
 
  <div class="him full-width mh-500" style="background:white;">
    <div class="container pb-50 w-1200">
      <div style="width:1200px;margin:50px 0px 50px 0px !important;background:#E5E7E8;border-radius:8px;" class="row-fluid a-left bg-white">
        <div class="a-left span12 p-30">
          <?php
            $type=$_GET[ptype];
            switch ($type) {
                
            case "24":
            $typev="Maintenance Kits";
            break;    
            
               case "25":
            $typev="Transfer Kits";
            break;   
                
              case "26":
             $remove[]="gear";
             $remove[]="locker";
              $typev="Fusers";
     
              break;
              case "27":
            $remove[]="rollers";  
             $typev="Roller Kits";
            break;
            
            
            case "28":
                 $typev="Printers";
                break;
                
                       case "30":
                 $typev="Other Parts";
                break;
                
                       case "31":
                 $typev="Toner";
                break;    
                
            
            case "29":
                 $typev="Accessories";
                $find[]="envelope";
                $find[]="sheet tray";
             //   $find[]="jet";
                $remove[]="fixing film";
                $remove[]="pressure roller";
                
                $remove[]="pickup";
             //   $find[]="jetdirect";
                                  
                                         $type2[]="maint";
                    $type2[]="mante";
           
                break;
                
                 case "30":
                 $remove[]="envelope";
                $remove[]="sheet tray";
                $remove[]="memory";
                $remove[]="jet";
                $remove[]="hard drive";
                
                break;     
                
                
            }    
          
          
          
       switch($_GET[step]){
     case "brand":
     ?>
     <style type="text/css">
         .brands{
             display:inline-block;
             padding:20px;
             background-color:white;
             margin:20px;
          
         }
     </style>

     
     <h1>Select a Manufacturer</h1>
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=hp&step=model<?php if ($_GET[ptype]==30)echo '&step=result';?>"><div class="brands"><img src="<?php echo get_site_url(); ?>/hp.png" width=110></div></a>
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=lexmark&step=model<?php if ($_GET[ptype]==30)echo '&step=result';?>"><div class="brands"><img src="<?php echo get_site_url(); ?>/lexmark.jpg" width=230></div></a>
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=canon&step=model<?php if ($_GET[ptype]==30)echo '&step=result';?>"><div class="brands"><img src="<?php echo get_site_url(); ?>/canon.png" width=230></div></a>
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=xerox&step=model<?php if ($_GET[ptype]==30)echo '&step=result';?>"><div class="brands"><img src="<?php echo get_site_url(); ?>/xerox.jpg" width=230></div></a>
     <?php
     break;
     case "model":
    ?>
        <p> 
     <?php
     echo $typev.' > '.strtoupper($_GET[pbrand]);
     ?>
     </p>
    <?php
    echo '<h1>Select a Model</h1>';
    
    if( $_GET[ptype]<>300 && $_GET[ptype]<>209){
         
                     $brand=$_GET[pbrand];
              $type=$_GET[ptype];
              switch ($type) {
                 case "29":
          //     $type2[]="envelope";
                //$type2[]="sheet tray";
       // $type2[]="jetdirect";
       
       $type2=array('paper delivery assembly','delivery assembly','paper input assembly','paper pick up roller','separation pad','fixing film','transfer belt','compatible film','compatible drum');
       
       
                break;     
                 
                 
                 case "26":
                     $type2[]="fuser";
                     $type2[]="furser";

                 
                     break;
                     
                      case "24":
                     $type2[]="maint";
                    $type2[]="mante";
                     
                     break;
        
                      case "27":
                          $type2[]="maint";
                     $type2[]="paper";
                      $type2[]="delivery";
                    $type2[]="roll";
                    
                     
                     break;                     
                                           case "25":
                     $type2[]="image";
                     $type2[]="trans";
                
                     
                     break;
                     
                     case "30":
               
                    break;     
    
                     
                     
                     case "31":
                        
                         $type2[]='se';
                    $type2[]='mage';
                 
                    $type2[]='cyan';
                    $type2[]='yell';
                    $type2[]='blac';
                       $type2[]='comp';
                    break;     
              }
       
              $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$type ");
              $count = 0;
    
              while($row = mysqli_fetch_array($result)) {
                $proid= $row[object_id];
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%' AND post_title LIKE '%$model%' order by post_title");
               // $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%'  order by post_title");

                while($rowx = mysqli_fetch_array($resultx)) {
$rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);

                 
                 
                 if ($_GET[ptype]==31){
                 $pos=strpos(strtolower($rowx[post_title]),'for');
                 
                 
                 
                 
                 $modelx=substr($rowx[post_title],($pos+4));
                 
                 
                  foreach ($type2 as $type3){
 $pos2=strpos(strtolower($modelx),$type3);
 if ($pos2>0)break;
     
 }                 
     if ($pos2>0)$modelx=substr($modelx,0,($pos2-1));
                 
                 
                 $modely = ltrim($modelx);
                                 $modely=str_replace('Compatable','',$modely);

                 $models[]=str_replace('HP ','',$modely);   
                 $check=str_replace('HP ','',$modely);
  
                     
                 } else {
 
 //this one check models
 foreach ($type2 as $type3){
 
 $pos=strpos(strtolower($rowx[post_title]),$type3);
 if ($pos>0)break;
     
 }                
 
 if ($pos>0){
 
                 $modelsz=substr($rowx[post_title],0,($pos-1));
                //garbage
                
                $modelsz=str_replace('upper','',$modelsz);
                $modelsz=str_replace('UPPER','',$modelsz);
                
                $modelsz=ltrim($modelsz);
        $modelsz=rtrim($modelsz);

if (strpos($modelsz,'DesignJet')>0)
{
    $djm[]=$modelsz;
} else {
                $models[]=$modelsz; }    
                 }
                     $pos=0;
                 }
                 
                  if ($_GET[ptype]==30)$models[]=$rowx[post_title];    
                }
              }
              
    
         

    //print_r($models);
    $models=array_unique($models);
    sort($models);
    if ($_GET[ptype]=='24' && $_GET[pbrand]=='hp') echo '<h2>HP LaserJet</h2>';
    echo '<div style="vertical-align: top;width:380px;display:inline-block;">';
       
       
   

    //printers---------------------------------------------------------
    if ($_GET[ptype]==28){
        echo'<div style="vertical-align: top;width:500px;display:inline-block;">';
    foreach ($models as $model)
    {
        $model=str_replace('Fuser','', $model);
    
    
       
       $qprinter=strpos(strtolower($model),'q54');
         $printer=strpos(strtolower($model),'00');
if ($printer>0)$np=substr(strtolower($model),$printer-2,2);
   
         
       if ($printer>0){
             $printer2=strpos(strtolower($model),'000');
       $mod=substr($model,0,$printer);
       if ($printer2>0)  { $mod=substr($model,0,$printer+1);
       $np=substr(strtolower($model),$printer2-1,2);
           
       }       
       }
       if ($printer>0 && $qprinter<1){
       //echo 'ck'.$np;
	   $modw=str_replace(' ','',$mod);
        if ($modw<>$modcheck){   
        echo '<a href="?ptype='.$_GET[ptype].'&pbrand='.$_GET[pbrand].'&pmodel='.$mod.'&step=result">'.$mod.'00 Series</a><br>';
        $modcheck=str_replace(' ','',$mod);
        $count ++;
        //if (($count/40)==floor($count/40))echo'</div><div style="vertical-align: top;width:350px;display:inline-block;">';
       } }  else {
           
              $pc=strpos(strtolower($model),$np);
              if ($pc<1){
               echo '<a href="?ptype='.$_GET[ptype].'&pbrand='.$_GET[pbrand].'&pmodel='.$model.'&step=result">'.$model.'</a><br>'; 
              }
                  
            }
           
       
    }
    echo '</div>';
    } else {
   
    foreach ($models as $model)
    {
         $model=str_replace('Fuser','', $model);
         
         $count ++;
        if (($count/40)==floor($count/40))echo'</div><div style="vertical-align: top;width:380px;display:inline-block;">';
    $modelx =str_replace(' ','',$model);
    if ($modelcheck3<>$modelx){
       if ($model<>'Lexmark'){
       
        echo 'a<a href="?ptype='.$_GET[ptype].'&pbrand='.$_GET[pbrand].'&pmodel='.$model.'&step=result">'.$model.'</a><br>';
    $modelcheck3=str_replace(' ','',$model);}
	}
        
    }
}
    
    if ($_GET[ptype]=='24' && $_GET[pbrand]=='hp') echo '</div><div style="margin-top:-70px;vertical-align: top;width:380px;display:inline-block;"><h2>HP DesignJet</h2>';
    echo '<div style="vertical-align: top;width:380px;display:inline-block;">';
    foreach ($djm as $model)
    {
	if ($model<>$modelcheck2){
         $count ++;
        if (($count/40)==floor($count/40))echo'</div><div style="vertical-align: top;width:380px;display:inline-block;">';
        echo '<a href="?ptype='.$_GET[ptype].'&pbrand='.$_GET[pbrand].'&pmodel='.$model.'&step=result">'.$model.'</a><br>';
    $modelcheck2=$model;
    }    
    }
    
             ?>
  </div>
    
               </div><br><br>            <!-- <div style="width:1000px;" class="f-play">
                Your Search Produced <?php echo $count;?> results.
                </div>-->
              <?php
    }
    else{
            echo '<div style="vertical-align: top;width:380px;display:inline-block;">';
   $con2=mysqli_connect("localhost","accutek_wrdp1","a8Z2GxnQEY4e8Jl","accutek_support");    
    $result2 = mysqli_query($con2,"SELECT * FROM $_GET[pbrand]");
while($row2 = mysqli_fetch_array($result2))
        {         $count ++;
        if (($count/40)==floor($count/40))echo'</div><div style="vertical-align: top;width:380px;display:inline-block;">';
            echo '<a href="?ptype='.$_GET[ptype].'&pbrand='.$_GET[pbrand].'&pmodel='.$row2[model].'&step=result">'.$row2[model].'</a><br>';
        }
       
       
       
       
       
               if ($_GET[ptype]==290)
               {
                   
                                   $brand=$_GET[pbrand];
              $type=$_GET[ptype];     
                   
                   
                             $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=29 ");
              $count = 0;
    
              while($row = mysqli_fetch_array($result)) {
                $proid= $row[object_id];
               // $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%' AND post_title LIKE '%$model%' order by post_title");
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%'  order by post_title");

                while($rowx = mysqli_fetch_array($resultx)) {
$rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);
$message = explode(' ', $rowx[post_title], 3);
$models[]=$message[0].' '.$message[1];
                 

 
 //this one check models
 foreach ($type2 as $type3){

 $pos=strpos(strtolower($rowx[post_title]),$type3);
 if ($pos>0)break;
     
 }                
 
 if ($pos<0){
 
                 $modelsz=substr($rowx[post_title],0,($pos-1));
                //garbage
                
                $modelsz=str_replace('upper','',$modelsz);
                $modelsz=str_replace('UPPER','',$modelsz);
                
                $modelsz=ltrim($modelsz);
        $modelsz=rtrim($modelsz);

if (strpos($modelsz,'DesignJet')>0)
{
    $djm[]=$modelsz;
} else {
                $models[]=$modelsz; }    
                 }
                     $pos=0;
                 }
                 
                 
                }
              }






              
 $models=array_unique($models);
    sort($models);
   // if ($_GET[pbrand]=='hp') echo '<h2>HP LaserJet</h2>';
    echo '<div style="vertical-align: top;width:380px;display:inline-block;">';              
              
              
      foreach ($models as $model)
    {
         $model=str_replace('Fuser','', $model);
         
         $count ++;
        if (($count/40)==floor($count/40))echo'</div><div style="vertical-align: top;width:380px;display:inline-block;">';
    $modelx =str_replace(' ','',$model);
    if ($modelcheck3<>$modelx){
       if ($model<>'Lexmark'){
       
        echo '<a href="?ptype='.$_GET[ptype].'&pbrand='.$_GET[pbrand].'&pmodel='.$model.'&step=result">'.$model.'</a><br>';
    $modelcheck3=str_replace(' ','',$model);}
	}
        
    
    
       // if ($_GET[pbrand]=='hp') echo '</div><div style="margin-top:-70px;vertical-align: top;width:380px;display:inline-block;"><h2>HP DesignJet</h2>';

              
              
              
              
               
              
               }
               
               
               
       
       
          if ($count==0)echo '<p>No Products Available</p>';
    }
    break;
         
      case "result":
        echo '<h1>Products Available</h1>'; 

              $brand=$_GET[pbrand];
              $model=$_GET[pmodel];
              $type=$_GET[ptype];
              
              if ($_GET[ptype]==30){
              $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=30 OR term_taxonomy_id=29");
              } else 
              {
              $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$type");
    
              }
              $count = 0;
              while($row = mysqli_fetch_array($result)) {
                $proid= $row[object_id];
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%' AND post_title LIKE '%$model%' order by post_title");
                while($rowx = mysqli_fetch_array($resultx)) {
$rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);
                $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$proid AND meta_key='_regular_price'");
                while($rowx2 = mysqli_fetch_array($resultx2)) {
                $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';
                
                $count++;
                
                //check otheritems
          
                foreach ($remove as $rem)
                {
                   
                    $fnd=strpos(strtolower($rowx[post_title]),$rem);
                    if ($fnd>0){
                        $checkit=1;
                        break;
                    }
                }
                
                if ($_GET[ptype]=='29')
                {
            
                foreach ($find as $find2)
                {

                    $fndx=strpos(strtolower($rowx[post_title]),$find2);
                    if ($fndx>0){
                   //    echo $find2; 
                        $foundit=1;
                        break;
                    }
                }    
                    
                    
                    
                    
                    if ($foundit==1){$op[]= '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].' <strong> - $'.$price.'</strong></a></p>';}
               $foundit=0; 
                } else {
                
                if ($_GET[ptype]<>29){
                  if ($price>0 && $checkit==0)$op[]= '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].' <strong> - $'.$price.'</strong></a></p>';
               $checkit=0;}
                }
                }
              }}
 
              
              
              sort($op);
              
              foreach ($op as $o)
              {
                  echo $o;
              }
              
           
              if ($_GET[ptype]==29)
              {
                   $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$type");
              $count = 0;
              while($row = mysqli_fetch_array($result)) {
                $proid= $row[object_id];
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%' AND post_title LIKE '%jetdirect%' order by post_title");
                while($rowx = mysqli_fetch_array($resultx)) {
                                    $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$proid AND meta_key='_regular_price'");
                while($rowx2 = mysqli_fetch_array($resultx2)) {
                $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';}
$rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);
               echo '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].' <strong> - $'.$price.'</strong></a></p>';
                }
              
                  
              }
              
              
              $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$type");
                            while($row = mysqli_fetch_array($result)) { 
                $proid= $row[object_id];
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%' AND post_title LIKE '%hard drive%' order by post_title");
                while($rowx = mysqli_fetch_array($resultx)) {
                                                        $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$proid AND meta_key='_regular_price'");
                while($rowx2 = mysqli_fetch_array($resultx2)) {
                $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';}
$rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);
               echo '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].' <strong> - $'.$price.'</strong></a></p>';
                }
              
                  
              }
              
              $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$type");
                            while($row = mysqli_fetch_array($result)) {
                $proid= $row[object_id];
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%' AND post_title LIKE '%memory%' order by post_title");
                while($rowx = mysqli_fetch_array($resultx)) {
                                                        $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$proid AND meta_key='_regular_price'");
                while($rowx2 = mysqli_fetch_array($resultx2)) {
                $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';}
$rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);
               echo '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].' <strong> - $'.$price.'</strong></a></p>';
                }
              
                  
              }
              
              
              }
              
              ?>
              
              
              <!--
                            <p class="f-play">
               Your Search Produced <?php echo $count;?> results.
                </p>-->
              <?php
        break;
        case "":
           
            break;
       } 
         
         

         
         
         
         
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/app.js">
    </script>
    <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/HimController.js"></script>
  </div>
  <?php get_footer();?>


<?php
/*
* Template Name: accutek browse page 2
*/

get_header();
$con=mysqli_connect("localhost","accuteki_word02e","IXVLdB2a8kKo","accuteki_wordpress02e");
if (mysqli_connect_errno($con)) {echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
?>
<style type="text/css">
    .results p {
        line-height:15px;
    }
</style>

<div class="full-width" style="background-size:cover;background:url(<?php get_img($texture);?>);">
  <div class="container full-width p-rel" style="min-height:157px;background-size:contain;background-image:url(<?php get_img($banner);?>);">
    <p style="left:30px; bottom:-30px;" class="f-play fs-42 color-white p-abs">Browse Accutek</p>
  </div>
</div>
<div class="container w-1200">
 
  <div class="him full-width mh-500" style="background:white;">
    <div class="container pb-50 w-1200">
      <div style="width:1200px;margin:50px 0px 50px 0px !important;background:#E5E7E8;border-radius:8px;" class="row-fluid a-left bg-white">
        <div class="a-left span12 p-30 results">
          <?php
          
          function array_msort($array, $cols)
{
    $colarr = array();
    foreach ($cols as $col => $order) {
        $colarr[$col] = array();
        foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
    }
    $eval = 'array_multisort(';
    foreach ($cols as $col => $order) {
        $eval .= '$colarr[\''.$col.'\'],'.$order.',';
    }
    $eval = substr($eval,0,-1).');';
    eval($eval);
    $ret = array();
    foreach ($colarr as $col => $arr) {
        foreach ($arr as $k => $v) {
            $k = substr($k,1);
            if (!isset($ret[$k])) $ret[$k] = $array[$k];
            $ret[$k][$col] = $array[$k][$col];
        }
    }
    return $ret;

}
          
          
          
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
         
                          $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[ptype]");
      while($row = mysqli_fetch_array($result)) {
          $bt=$row[name];
      }
      
      
      
      echo '<h3 style="margin-top:-20px;">'.$bt;
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
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=1717&step=model"><div class="brands"><img src="<?php echo get_site_url(); ?>/hp.png" width=110></div></a>
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=1718&step=model"><div class="brands"><img src="<?php echo get_site_url(); ?>/lexmark.jpg" width=230></div></a>
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=1720&step=model"><div class="brands"><img src="<?php echo get_site_url(); ?>/canon.png" width=230></div></a>
     <a href="?ptype=<?php echo $_GET[ptype];?>&pbrand=1719&step=model"><div class="brands"><img src="<?php echo get_site_url(); ?>/xerox.jpg" width=230></div></a>
     <?php
     break;
     case "model":
         
    if ($_GET[ptype]=='')
    {
      
                     $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[pbrand]");
      while($row = mysqli_fetch_array($result)) {
          $bt=$row[name];
      }
        
        
      $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$_GET[pbrand]");
      while($row = mysqli_fetch_array($result)) {
     
     
      $objs[]=$row[object_id];
        }
        
        foreach ($objs as $o)
        {
      $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where object_id=$o");
      while($row = mysqli_fetch_array($result)) {
            
    if ($row[term_taxonomy_id]==$_GET[pbrand])$isbrand=1;
            }
            
       if ($isbrand==1){
       $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where object_id=$o");
      while($row = mysqli_fetch_array($result)) {
            
                       if($row[term_taxonomy_id]>40 && $row[term_taxonomy_id]<>'1717' && $row[term_taxonomy_id]<>'1718' && $row[term_taxonomy_id]<>'1719' && $row[term_taxonomy_id]<>'1720') $models[]=$row[term_taxonomy_id];

            }    
       
           
       }
       $isbrand=0;
            
            
        }
            if ($_GET[pbrand]=='1717') $place='HP';
         if ($_GET[pbrand]=='1718') $place='Lexmark';
          if ($_GET[pbrand]=='1720') $place='Canon';
           if ($_GET[pbrand]=='1719') $place='Xerox';
        
        //echo '<h2>'.$bt.'</h2>';
        echo '<h3 style="margin-top:-20px;">'.$bt.'</h3>';    
    } else {
             
         
         
        
                 $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[ptype]");
      while($row = mysqli_fetch_array($result)) {
          $bt=$row[name];
      }
        
        
      $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$_GET[ptype]");
      while($row = mysqli_fetch_array($result)) {
     
     
      $objs[]=$row[object_id];
        }
        
        foreach ($objs as $o)
        {
      $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where object_id=$o");
      while($row = mysqli_fetch_array($result)) {
            
    if ($row[term_taxonomy_id]==$_GET[pbrand])$isbrand=1;
            }
            
       if ($isbrand==1){
       $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where object_id=$o");
      while($row = mysqli_fetch_array($result)) {
            
                       if($row[term_taxonomy_id]>40 && $row[term_taxonomy_id]<>'1717' && $row[term_taxonomy_id]<>'1718' && $row[term_taxonomy_id]<>'1719' && $row[term_taxonomy_id]<>'1720') $models[]=$row[term_taxonomy_id];

            }    
       
           
       }
       $isbrand=0;
        
            
        }
                    if ($_GET[pbrand]=='1717') $place='HP';
         if ($_GET[pbrand]=='1718') $place='Lexmark';
          if ($_GET[pbrand]=='1720') $place='Canon';
           if ($_GET[pbrand]=='1719') $place='Xerox';
        
        //echo '<h2>'.$bt.'</h2>';
        echo '<h3 style="margin-top:-20px;">'.$bt.' > '.$place.'</h3>';
        
    }


        
      
        $models=array_unique($models);
        
        foreach ($models as $m)
        {
             $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$m");
      while($row = mysqli_fetch_array($result)) {
            
            $mods[]=array("name" => $row[name],"id" => $row[term_id]);

        }}
        
        asort($mods);
        echo '<div style="display:inline-block;vertical-align:top;width:250px;padding:5px;">';
                foreach ($mods as $m2)
        {
        
            if (strpos($m2[name],'Series')<1 && strpos($m2[name],'Direct')<1 && strpos($m2[name],'emory')<1 && strpos($m2[name],'Feeder')<1 && strpos($m2[name],'Series')<1){
            echo '<p><a href="?ptype='.$_GET[ptype].'&pbrand='.$_GET[pbrand].'&pmodel='.$m2[id].'&step=result">'.$m2[name].'</a></p>';
            if ($count==30 || $count==60 || $count==90){
                 echo '</div><div style="display:inline-block;vertical-align:top;width:250px;padding:5px;">';
                 
            }
            $count++;}
        }
        echo '</div>';
        
        

               
               
               
       
       
          if ($count==0)echo '<p>No Products Available</p>';
    
    break;
         
      case "result":
          
          if ($_GET[ptype]==''){
            if ($_GET[pbrand]=='1717') $place='HP';
         if ($_GET[pbrand]=='1718') $place='Lexmark';
          if ($_GET[pbrand]=='1720') $place='Canon';
           if ($_GET[pbrand]=='1719') $place='Xerox';
          

                           $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[pmodel]");
      while($row = mysqli_fetch_array($result)) {
          $bt2=$row[name];
      }
      
      
        echo '<h3 style="margin-top:-20px;"> '.$place.' > '.$bt2.'</h3>';
           ?>
          <h4><a href="?ptype=24&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Maintenance Kits</a></h4>
          <h4><a href="?ptype=25&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Transfer Kits</a></h4> 
          <h4><a href="?ptype=26&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Fusers</a></h4> 
          <h4><a href="?ptype=27&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Roller Kits</a></h4> 
          <h4><a href="?ptype=28&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Printers and MFP's</a></h4> 
          <h4><a href="?ptype=29&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Accessories</a></h4> 
          <h4><a href="?ptype=30&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Other Parts</a></h4> 
          <h4><a href="?ptype=31&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Toner</a></h4>           
           <?php
           
              
          } else {
          
          
        if ($_GET[ptype]=='29'){
        
          if ($_GET[pbrand]=='1717') $place='HP';
         if ($_GET[pbrand]=='1718') $place='Lexmark';
          if ($_GET[pbrand]=='1720') $place='Canon';
           if ($_GET[pbrand]=='1719') $place='Xerox';
          
                           $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[ptype]");
      while($row = mysqli_fetch_array($result)) {
          $bt=$row[name];
      }
      
                           $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[pmodel]");
      while($row = mysqli_fetch_array($result)) {
          $bt2=$row[name];
      }
      
      
        echo '<h3 style="margin-top:-20px;">'.$bt.' > '.$place.' > '.$bt2.'</h3>';    
            
        ?>    
       <h4><a href="?ptype=1725&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Envelope Feeder & Paper Tray</a></h4>
       <h4><a href="?ptype=1723&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Jet-Direct Card & Hard Drives</a></h4>
       <h4><a href="?ptype=1724&pbrand=<?php echo $_GET[pbrand];?>&pmodel=<?php echo $_GET[pmodel];?>&step=result">Memory</a></h4>
       
       <?php     
            
        }  else {
          
          
        if ($_GET[pbrand]=='1717') $place='HP';
         if ($_GET[pbrand]=='1718') $place='Lexmark';
          if ($_GET[pbrand]=='1720') $place='Canon';
           if ($_GET[pbrand]=='1719') $place='Xerox';
          
                           $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[ptype]");
      while($row = mysqli_fetch_array($result)) {
          $bt=$row[name];
      }
      
                           $result = mysqli_query($con,"SELECT * FROM wp_rmvd_terms where term_id=$_GET[pmodel]");
      while($row = mysqli_fetch_array($result)) {
          $bt2=$row[name];
      }
      
      
        echo '<h3 style="margin-top:-20px;">'.$bt.' > '.$place.' > '.$bt2.'</h3>';
        $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$_GET[pmodel]");
      while($row = mysqli_fetch_array($result)) {
      
           $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where object_id=$row[object_id] AND term_taxonomy_id=$_GET[ptype]");
      while($rowx = mysqli_fetch_array($resultx)) {
      $models[]=$rowx[object_id];
      }      
      }

      
      foreach ($models as $mod){
      $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$mod");
      while($rowx = mysqli_fetch_array($resultx)) {
      
       $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$mod AND meta_key='_regular_price'");
       while($rowx2 = mysqli_fetch_array($resultx2)) {
        $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';
       }
       
       $res[]=array("name" => $rowx[post_title],"price" => $price, "guid" =>$rowx[guid]);
       
       
      }}
      
      asort($res);
      
      foreach ($res as $r)
      {
         $r[guid]=str_replace('50.87.170.52','accutekimaging.com',$r[guid]); 
         echo '<p><a href="'.$r[guid].'">'.$r[name].' <strong> - $'.$r[price].'</strong></a></p>';
      }
      
          }
          }
             
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


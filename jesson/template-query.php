<?php
/*
* Template Name: accutek query Page
*/
get_header();

$con=mysqli_connect("localhost","accuteki_word02e","IXVLdB2a8kKo","accuteki_wordpress02e");
if (mysqli_connect_errno($con)) {echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
?>
<div class="full-width" style="background-size:cover;background:url(<?php get_img($texture);?>);">
  <div class="container full-width p-rel" style="min-height:157px;background-size:contain;background-image:url(<?php get_img($banner);?>);">
    <p style="left:30px; bottom:-30px;" class="f-play fs-42 color-white p-abs">Search Results</p>
  </div>
</div>
<div class="container w-1200">
  <div class="row-fluid bg-lblue br-8" style="  margin-top: 8px;">
    <h3 class="span2 color-white pl-10 mt-15 mb-10 fs-18 lh-1 upcase f-play d-ib" style="white-space:nowrap;margin-top:20px;">product search</h3>
    <div class="span10 plr-30 lh-1 upcase f-play d-ib">
      <form id="ps-form" class="color-white f-play ng-pristine ng-valid" action="<?php echo get_site_url();?>/shop-query/" method="post">
        <div class="row-fluid">
          <label style="display:inline-flex;width:7%;" class="ps-label" for="ptype"> Product: </label>
          <span style="display:inline-flex;width:14%;">
            <select name="ptype" id="cat1" class="selector" title="">
              <option value="24">Maintenance Kits</option>
              <option value="25">Transfer Kits</option>
              <option value="26">Fusers</option>
              <option value="27">Roller Kits</option>
              <option value="28">Printers &amp; MFP's</option>
              <option value="29">Acessories</option>
              <option value="30">Other Parts</option>
              <option value="31">Toner</option>
            </select>
          </span>
          <label for="pbrand" style="display:inline-flex;width:7%;"> Brand: </label>
          <span style="display:inline-flex;width:14%;">
            <select name="pbrand" id="cat2" class="selector">
              <option value="">ANY</option>
              <option value="hp">HP</option>
              <option value="lexmark">Lexmark</option>
              <option value="canon">Canon</option>
              <option value="xerox">Xerox</option>
            </select>
          </span>
          <label for="pmodel" style="display:inline-flex;width:7%;"> Model: </label>
          <span style="display:inline-flex;width:14%;"><input type="text" name="pmodel" >
          </span>
          <label for="pnumber" style="display:inline-flex;width:7%;">Part Number: </label>
          <span style="display:inline-flex;width:14%;">
            <input type="text" name="pnumber" >
          </span>
          <input type="submit" name="submit" class="p-rel" value="true" style="display: inline-flex; width: 75px; height: 25px; margin-top: -11px; background: rgba(0, 0, 0, 0);color:transparent;z-index:99999999999999999999999;">
          <i class="fa fa-search fa-2x color-white t-0 l-0 p-rel"></i>
        </div>
      </form>
    </div>
  </div>
  <div class="him full-width mh-500" style="background:white;">
    <div class="container pb-50 w-1200">
      <div style="width:1200px;margin:50px 0px 50px 0px !important;background:#E5E7E8;border-radius:8px;" class="row-fluid a-left bg-white">
        <div class="a-left span12 p-30">
          <?php
          if (isset($_POST[submit])){
            if ($_POST[pnumber]==''){
              $brand=$_POST[pbrand];
              $model=$_POST[pmodel];
              $type=$_POST[ptype];
              $result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$type");
              $count = 0;
              while($row = mysqli_fetch_array($result)) {
                $proid= $row[object_id];
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE '%$brand%' AND post_title LIKE '%$model%'");
                while($rowx = mysqli_fetch_array($resultx)) {
                $count ++;
                
                
                       $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$proid AND meta_key='_regular_price'");
       while($rowx2 = mysqli_fetch_array($resultx2)) {
        $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';
       }
                
                $rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);
                  if ($rowx[post_title]<>'')echo '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].'<strong> - $'.$price.'</strong></a></p>';
                }
              }
                ?>
                <p class="f-play">
                Your Search Produced <?php echo $count;?> results.
                </p>
                <?php

            } else {
             ///===========new

              $pnumber=$_POST[pnumber];
               $rc=0;
              $result = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where meta_value LIKE '%$pnumber%'");
              while($row = mysqli_fetch_array($result)) {
                $proid= $row[post_id];
                $resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid");
               
                while($rowx = mysqli_fetch_array($resultx)) {
                  $rc++;
                       $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$proid AND meta_key='_regular_price'");
       while($rowx2 = mysqli_fetch_array($resultx2)) {
        $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';
       }
                
                $rowx[guid]=str_replace('50.87.170.52','accutekimaging.com',$rowx[guid]);
                   if ($rowx[post_title]<>'')$op[]= '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].'<strong> - $'.$price.'</strong></a></p>';
                }
                
                
                
                
                
             
              }
              
              
               //   $con2=mysqli_connect("localhost","accuteki_test","test123","accuteki_test");

if (mysqli_connect_errno($con2)) {echo "Failed to connect to MySQL: " . mysqli_connect_error(); }



//$result = mysqli_query($con2,"SELECT * FROM product where match(product_desc) against ('$pnumber')");
$result = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where post_content LIKE '%$pnumber%'");
while($row = mysqli_fetch_array($result))
{

//echo $row[product_sku];

                  $rc++;
                       $resultx2 = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where post_id=$row[ID] AND meta_key='_regular_price'");
       while($rowx2 = mysqli_fetch_array($resultx2)) {
        $price=$rowx2[meta_value];
if ($price=='')$price='Call for pricing';
       }
                
                $row[guid]=str_replace('50.87.170.52','accutekimaging.com',$row[guid]);
                  
                  if ($row[post_title]<>'')$op[]= '<p><a href="'.$row[guid].'">'.$row[post_title].'<strong> - $'.$price.'</strong></a></p>';
                
                
             
              
               
}   
                 
$op=array_unique($op);
asort($op);
foreach ($op as $o)
{
    if ((strpos($o,'content')<1) && (strpos($o,'auto')<1))echo $o;
}
            
            
            //-----------
          }}
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/app.js">
    </script>
    <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/HimController.js"></script>
  </div>
  <?php get_footer();?>


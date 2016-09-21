<?php
/*
 * Template Name: accutek descripadd
 */
get_header();
error_reporting(E_ALL);
ini_set('display_errors', '1');
//wp_set_object_terms(3642, array('hp','test','cannon'), 'product_tag');

$con=mysqli_connect("localhost","accuteki_test","test123","accuteki_test");
$con2=mysqli_connect("localhost","accuteki_word02e","IXVLdB2a8kKo","accuteki_wordpress02e");

if (mysqli_connect_errno($con2))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT * FROM product limit 500,2000");
while($row = mysqli_fetch_array($result))
{
$sku=$row[product_sku];
echo '<p>'.$sku.'</p>';
if ($sku<>''){



$resultzz = mysqli_query($con2,"SELECT * FROM wp_rmvd_postmeta where meta_key='_sku' AND meta_value='$sku'");
while($rowzz = mysqli_fetch_array($resultzz))
{
    $pid=$rowzz[post_id];

    echo $pid;
}


unset($tags);

}


$resultzz = mysqli_query($con,"SELECT * FROM product where product_sku='$sku' ");
while($rowzz = mysqli_fetch_array($resultzz))
{
    $pdes=$rowzz[product_desc];

    //echo $pdes;
}

//mysqli_query($con2,"UPDATE wp_rmvd_posts SET post_content='$pdes' where ID=$pid");

$pdes='';
$pid='';
    
}

?>

<?php get_footer();?>

<?php
/*
 * Template Name: accutek addtag
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
  
$result = mysqli_query($con,"SELECT * FROM product limit 2500,500");
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

$resultx = mysqli_query($con,"SELECT * FROM product_category_xref where product_id=$row[product_id]");
while($rowx = mysqli_fetch_array($resultx))
{

$resultx3 = mysqli_query($con,"SELECT * FROM category where category_id='$rowx[category_id]'");
while($rowx3 = mysqli_fetch_array($resultx3))
{
  //  echo '<p>-->'.$rowx3[category_name].'</p>';
 $at=str_replace(', ','/',$rowx3[category_name]);
 $tags[]=$at;
    $resultx4 = mysqli_query($con,"SELECT * FROM category_xref where category_child_id='$rowx3[category_id]'");
while($rowx4 = mysqli_fetch_array($resultx4))
{
    $resultx5 = mysqli_query($con,"SELECT * FROM category where category_id='$rowx4[category_parent_id]'");
while($rowx5 = mysqli_fetch_array($resultx5))
{
  //  echo '<p>---->'.$rowx5[category_name].'</p>';
     $at2=str_replace(', ','/',$rowx5[category_name]);
 $tags[]=$at2;
    
    
    //    wp_set_object_terms($pid, $rowx5[category_name], 'product_tag');
}
}    
 
 
 
  $resultx4y = mysqli_query($con,"SELECT * FROM category_xref where category_child_id='$rowx5[category_id]'");
while($rowx4y = mysqli_fetch_array($resultx4y))
{
    $resultx5y = mysqli_query($con,"SELECT * FROM category where category_id='$rowx4y[category_parent_id]'");
while($rowx5y = mysqli_fetch_array($resultx5y))
{
  //  echo '<p>---->'.$rowx5[category_name].'</p>';
     $at2y=str_replace(', ','/',$rowx5y[category_name]);
 $tags[]=$at2y;
    
    
    //    wp_set_object_terms($pid, $rowx5[category_name], 'product_tag');
}
}     
 
 
 
 
 
 
}
}
$alltags=implode(',',$tags);
echo $pid.'-'.$alltags;

wp_set_object_terms($pid, $tags, 'product_tag');

$alltags='';
}

}





?>

<?php get_footer();?>

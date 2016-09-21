<?php
/*
 * Template Name: Home Page
 */
get_header();
?>
<style type="text/css">
    .button {
        background-color:#159EE0;
    }

    .products-grid .product .product-name {
    text-overflow: none;
    white-space:normal;

    }
	.selector{
		margin-top:0 !important;
	}
    .products-grid.product-count-5 .product {
    	width:210px;
    }
    input, select{
	    width:100%;
    }
    #type-input.hs-input{
	    vertical-align: baseline;
    }
    .hs-input , .hs-label{
	    vertical-align: middle;
    }
    #model-input input{
	    height: 36px;
    margin-bottom: 0;
    }
    #part-input input{
	    height:36px;
	     margin-bottom: 0;
    }
    i#search-icon{
	    top:5px !important;
    }
    @media screen and (max-width:979px) and (min-width:801px){
	    body > div.page-wrapper > div.full-width.bg-lblue.mh-30 > div > div > div.span4.p-abs.t-0.r-0{
		    width:50%;
	    }
    }
    @media screen and (min-width:1117px){
	    span#part-input{
		    width:18%;
	    }
	    span#model-input{
		    width:18%;
	    }
    }
    @media screen and (max-width:1115px) and (min-width:980px){
	    #ps-form > div > span:nth-child(2){
		    width:19% !important;
	    }
	    #ps-form > div > span:nth-child(4){
		    width:16% !important;
	    }
	    #search-cons{
		    margin-top:5px;
	    }
    }
    #product-label{
	    display:-webkit-inline-flex;width:7%;
    }
    #type-input{
	    display:-webkit-inline-flex;width:14%;
    }
    #brand-label{
	    display:-webkit-inline-flex;width:7%;
    }
    #brand-input{
	    display:-webkit-inline-flex;width:14%;
    }
    #model-label{
	    display:-webkit-inline-flex;width:7%;
    }
    #model-input{
	    display:-webkit-inline-flex;width:14%;
    }
    #part-label{
	    display:-webkit-inline-flex;width:15%;vertical-align: middle;
    }
    #part-input{
	    display:-webkit-inline-flex;width:14%;
    }
    @media screen and (max-width:979px){
	    select#cat1.selector{
		    margin:0;
	    }
	    label.ps-label.hs-label{
		    top:0;
		    left:0;
		    margin-left:0;
	    }
	     label[for="pmodel"].hs-label{
		    margin-left:0px;
	    }
	    label[for="pnumber"].hs-label{
		    display: block !important;
    width: 100% !important;
    position: relative !important;
    margin-left:0;
	    }
	    .hs-label{
		    display: block !important;
    width: 100% !important;
    position: relative !important;
    margin-top:5px;
	    }
	    .hs-input {
    display: block !important;
    width: 100% !important;
}
select#cat2{
	margin:0;
}
#model-input input{
	margin:0;
}
#search-tit{
	width:100% !important;
	margin-bottom:0;
	margin-left:20px;
}
#search-cons{
	width:100% !important;
	margin-left:0 !important;
}
#s-btn-tool{
	width:100% !important;
}
#search-icon{
	    width: 100%;
    margin-top: -10px;
    margin-bottom: 10px;
}
#search-icon:before{
	margin-left:45%;
}

    }

    @-moz-document url-prefix() {
  select {
     width:166px;
  }
  label{
	  display:inline-block !important;
  }
  input{
	  width:146px;
  }
  label[for="pnumber"]{
	  margin-left:8px;
  }
  #s-btn-tool{
	  width:55px !important;
  }
  select#cat2{
	  margin-top:4px;
  }
  .fa.fa-search.fa-2x{
	  top:6px;
  }
}


</style>
<?php
$con=mysqli_connect("localhost","accuteki_word02e","IXVLdB2a8kKo","accuteki_wordpress02e");
if (mysqli_connect_errno($con)) {echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
?>
<div class="home" ng-controller="HomeController">
	<div class="full-width" style="background:url(<?php get_img('bg.png');?>);">
		<div class="container">
			<?php echo do_shortcode('[rev_slider home]');?>
		</div>
	</div>
	<div class="full-width">
		<div class="container">
			<div class="row-fluid p-rel">
				<service-info style="width:24.5%;margin-left:calc(2% / 3);margin-top:calc(2% / 3);margin-bottom:calc(2% / 3)" class="span3" info="service" ng-repeat="service in services"> </service-info>
			</div>
			<div class="row-fluid pt-20 pb-10 p-rel" style="background-size:cover;">
				<div class="row-fluid mb-30 bg-lblue br-8" style="  margin-top: 8px;">
					<h3 id="search-tit" class="span2 color-white pl-10 mt-15 mb-10 fs-18 lh-1 upcase f-play d-ib" style="white-space:nowrap;margin-top:20px;">product search</h3>
					<div id="search-cons" class="span10 plr-30 lh-1 upcase f-play d-ib" >

		  <form id="ps-form" class="color-white f-play" action="<?php echo get_site_url();?>/shop-query/" method="post">
						<div class="row-fluid">

              <label class="ps-label hs-label" id="product-label" for="ptype"> Product: </label>
							<span id="type-input" class="hs-input">
										<select name="ptype" id="cat1" class="selector">
											<option value="24">Maintenance Kits</option>
											<option value="25">Transfer Kits</option>
											<option value="26">Fusers</option>
											<option value="27">Roller Kits</option>
											<option value="28">Printers & MFP's</option>
											<option value="29">Acessories</option>
											<option value="30">Other Parts</option>
											<option value="31">Toner</option>
										</select>
              </span>
              <label for="pbrand" id="brand-label" class="hs-label"> Brand: </label>
              <span  id="brand-input" class="hs-input">
                <select name="pbrand" id="cat2" class="selector">
                  <option value="">ANY</option>
                  <option value="hp">HP</option>
                  <option value="lexmark">Lexmark</option>
                  <option value="canon">Canon</option>
                  <option value="xerox">Xerox</option>
                </select>
            </span>
									<label for="pmodel" id="model-label" class="hs-label"> Model: </label>
							<span id="model-input" class="hs-input"><input type="text" name="pmodel">
              </span>
              <label for="pnumber" id="part-label" class="hs-label">or Part Number: </label>
							<span id="part-input" class="hs-input">
                <input type="text" name="pnumber">
              </span>
                <input type="submit" id="s-btn-tool" name="submit" class="p-rel" value="true" style="display: -webkit-inline-flex; width: 75px; height: 25px; margin-top: -11px; background: rgba(0, 0, 0, 0);color:transparent;z-index:99999999999999999999999;">
                  <i id="search-icon" class="fa fa-search fa-2x color-white t-0 l-0 p-rel"></i>
                </input>

            </div>
								<!-- <input type="submit" name="submit" value="Submit"> -->
      </form>
<!--
24 Maintenance Kits
25 HP Transfer Kits
26 Fusers
27 Roller Kits
28 HP Printers & MFP's
29 HP Accessories
30 Other Parts
31 Toner

-->
<?php
//echo get_user_role();
if (isset($_POST[submit])){
	if ($_POST[pnumber]==''){
		$brand=$_POST[pbrand];
		$model=$_POST[pmodel];
		$type=$_POST[ptype];
		$result = mysqli_query($con,"SELECT * FROM wp_rmvd_term_relationships where term_taxonomy_id=$type");
		while($row = mysqli_fetch_array($result))
		{
			$proid= $row[object_id];
			$resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid AND post_title LIKE'%$brand%' AND post_title LIKE '%$model%'");
			while($rowx = mysqli_fetch_array($resultx))
			{
				echo '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].'</a></p>';

			}
		}
	}
	else
	{
		$pnumber=$_POST[pnumber];


		$result = mysqli_query($con,"SELECT * FROM wp_rmvd_postmeta where meta_value LIKE '%$pnumber%'");
		while($row = mysqli_fetch_array($result))
		{
			$proid= $row[post_id];
			$resultx = mysqli_query($con,"SELECT * FROM wp_rmvd_posts where ID=$proid");
			while($rowx = mysqli_fetch_array($resultx))
        { echo '<p><a href="'.$rowx[guid].'">'.$rowx[post_title].'</a></p>'; }
		}
	}
}
?>
<!-- <form action="<?php echo get_site_url();?>/product&#45;category/"> -->
<!-- <select name="cat1" class="selector" id="cat1"> -->
<?php
			// $cats=gcbpid(0);
			//
			// 			echo '<option value="">Select Option</option>';
      //
			// foreach ($cats as $cat)
			// {
			// echo '<option value="'.$cat -> woocommerce_term_id.'">'.$cat->name.'</option>';
			//
			// $newcat=$cat -> woocommerce_term_id;
			// $subcats=gcbpid($newcat);
			//
			// 	foreach ($subcats as $sc)
			// 	{
			// 	$op[$newcat].='<option value="'.$sc -> woocommerce_term_id.'">'.$sc->name.'</option>';
			//
			// 	$newcat2=$sc -> woocommerce_term_id;
			// 	$subcats2=gcbpid($newcat2);
			//
			//
			// 	foreach ($subcats2 as $sc2)
			// 	{
			// 	$check[$newcat2]=1;
			// 	$op[$newcat2].='<option value="'.$sc2 -> name.'">'.$sc2->name.'</option>';
			// 	}
			//
			// 	}
			//
			//
			// }
			//
			//
			//
			//
			//
?>
<!-- </select> -->
<?php
// foreach ($op as $key=>$id)
// 			{
// 			$theclass="selector2";
//
// 			if ($check[$key]==1)$theclass="selector3";
// 			echo '<select class="'.$theclass.'" name="cat'.$key.'" id="cat'.$key.'" style="display:none;">';
// 			echo '<option value="">Select Option</option>';
// 			echo $id;
// 			echo '</select>';
// 			}
?>
<!-- <select disabled="disabled"  class="selector2 def"> -->
<!-- <option>Select Option</option> -->
<!-- </select> -->
<!--  -->
<!-- <select disabled="disabled" class="selector3 def"> -->
<!-- <option>Select Option</option> -->
<!-- </select> -->
<!-- <a href="" id="gobutton" class="f&#45;r"><img src="<?php // get_img($search);?>"></a>			 -->
<!-- </form> -->





</div>
</div>
<div class="row-fluid mb-20 a-center" id="home-categories">
	<?php
	gmd($ink,'/browse/?ptype=24&step=brand','Maintenance Kits');
	gmd($laptop,'/browse/?ptype=25&step=brand','Transfer Kits');
	gmd($gears,'/browse/?ptype=26&step=brand','Fusers');
	gmd($roller,'/browse/?ptype=27&step=brand','Roller Kits');
	?>
</div>
<div class="row-fluid mb-30 a-center" id="home-categories">
	<?php
	gmd($printers,'/browse/?ptype=28&step=brand',"Printers & MFP's");
	gmd($access,'/browse/?ptype=29&step=brand','Accessories');
	gmd($other,'/browse/?ptype=30&step=brand','Other Parts');
	gmd($toner,'/browse/?ptype=31&step=brand','Toner');
	?>
</div>
<!--
<div class="row-fluid mb-20 a-center">
  <?php
  gml( 'img/42xxmk.JPG' ,"/browse/?ptype=24&step=brand","Maintainence Kits");
  gml( 'img/A2W80A.png', "/browse/?ptype=25&step=brand","Transfer Kits");
  gml( 'img/42xxmk.JPG' , "/browse/?ptype=26&step=brand");
  gml( 'img/42xxmk.JPG' ,"/browse/?ptype=27&step=brand","Roller Kits");
  ?>
</div>
<div class="row-fluid mb-30 a-center">
  <?php
  gml($ink,"/browse/?ptype=28&step=brand","Printers & MFP's");
  gml($laptop,"/browse/?ptype=29&step=brand","Accessories");
  gml('img/42xxmk.JPG',"/browse/?ptype=30&step=brand","Other Parts");
  gml('img/toners.jpg',"/browse/?ptype=31&step=brand","Toner");
  ?>
</div>
-->
</div>
<div style="width:calc(100% - 4px);" class="row-fluid f-play  mb-30 ptb-30 bg-lgrey br-8">
	<div class="span8 pl-30 a-left">
		<p class="fs-14 lh-1-5 f-play">
			<strong class="fs-18">Welcome to Accutek Imaging Resource Inc. </strong>
      <br><br>
Accutek is an industry leader for quality laser printers and printer replacement parts in HP, Lexmark and other brands. Our team of industry professionals share over 50 years of printer experience and are happy to assist you with all your printer needs, and our entire operation team work together and strive to provide you with the fast and quality service you deserve!
      <br><br>
Our vision is to help our customer find the right parts at the right price right now with 100% reliability -
     Satisfaction Guaranteed
</p>
		<a style="margin-right:15px;" href="<?php echo get_site_url();?>/about-us" class="color-white a-center bg-red ptb-10 br-4 w-175 f-r">
			Learn More <img style="margin-right:-15px;" class="ml-10" src="<?php get_img($whiteArrow);?>">
		</a>
	</div>
	<div class="span4">
		<img src="<?php get_img($welcome);?>">
	</div>
</div>
</div>
<div class="container ">
	<div class="row-fluid bg-lblue br-t-8">
		<h3 class="color-white ml-30 mt-10 mb-10 lh-1 upcase f-play">Featured Products</h3>
	</div>
	<div style="width:calc(100% - 4px);" class="row-fluid mb-30 pt-30 bg-lgrey border-lgrey br-b-8">
		<span class="">
			<?php $values = get_post_custom_values('content_2');
			$shortcode_output = do_shortcode($values[0]);
			print $shortcode_output;
            // echo get_post_meta(get_the_ID(), 'content_2', 1 ); ?>
          </span>
        </div>
      </div>
      <div align=center class="f-r w-700">
      	<div class="a-left h-auto mw-700">
      	</div>
      </div>
      <!-- ag-mods -->
<!--
-->
<!-- ag-controllers-->
<!--
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/HomeController.js"></script>
  -->
  <!-- ag-directives -->
<!--
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/directives/serviceInfo.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/directives/previouslyAssisted.js"></script>
  -->
</div>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/app.js"> </script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/HomeController.js"></script>
<style>
	/* .et-mega-search form .button { */
		/*   position: absolute; */
		/*   top: 0; */
		/*   right: 6px; */
		/*   background-size:contain; */
		/*   background: url(<?php get_img('search.png');?>) no-repeat center; */
		/*   background-color: transparent !important; */
		/*   text-indent: -99999px; */
		/*   font-size: 0; */
		/*   text-align: left; */
		/*   padding-left:20px; */
		/*   padding-right:20px; */
		/*   width: 50px; */
		/*   padding: 0; */
		/*   height: 40px; */
		/*   border: 0; */
		/*   -webkit-transition: none; */
		/*   -moz-transition: none; */
		/*   -ms-transition: none; */
		/*   -o-transition: none; */
		/*   transition: none; */
		/* } */

@media screen and (max-width:800px){
	#ps-form > div > i{
		background: rgb(188, 35, 44);
    display: block;
    margin-bottom: 20px;
    text-align: center;
    padding: 5px 0;
    font-size:25px;
	}
	form#ps-form > div > input[type=submit]{
		margin-bottom: 0px !important;
	}
	#ps-form > div > i:after{
		content: "Search";
    color: rgb(255, 255, 255);
    font-size: 27px;
    vertical-align: middle;
    font-family: 'play';
    text-transform: capitalize;
	}
	#ps-form > div > i:before{
		display:none;
	}
	body > div.page-wrapper > div.full-width.bg-lblue.mh-30 > div > div > div.span3 > p{
		margin-bottom: 0 !important;
	}
	.logo-with-menu div #logo-span{
		width:100%;
		margin:0;
	}
	.logo-with-menu #logo-span > a:nth-child(1) > img:nth-child(1) {
    width: 70% !important;
    height: auto !important;
    margin:60px 0 30px;
    overflow: auto;
	}
	body > div.page-wrapper > div.boxed-content.m-0 > div.main-nav.visible-desktop > div > div > div > div.span4.p-abs.r-0.b-0{
	width: 100%;
    position: relative !important;
    margin: 0;
	}
	body > div.page-wrapper > div.boxed-content.m-0 > div.main-nav.visible-desktop > div > div > div > div.span4.p-abs.r-0.b-0 > img{
		float:none !important;
		margin:0 !important;
	}
	body > div.page-wrapper > div.boxed-content.m-0 > div.main-nav.visible-desktop > div > div > div > div.span4.p-abs.r-0.b-0 > div{
		padding-left:0;
	}
	body > div.page-wrapper > div.boxed-content.m-0 > div.header-wrapper.header-type-Accutek.Imaging{
		margin-left: 30px;
	}
	body > div.home > div:nth-child(2) > div:nth-child(1) > div.row-fluid.pt-20.pb-10.p-rel > div.row-fluid.mb-30.bg-lblue.br-8 > div{
		width:100% !important;
		background: rgb(21, 158, 224);
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;

	}
	#ps-form > div > label:nth-child(7){
		width:17% !important;
	}
	body > div.home > div:nth-child(2) > div:nth-child(1) > div.row-fluid.pt-20.pb-10.p-rel{
		padding-top:0 !important;
	}
}
</style>
	<?php get_footer();?>


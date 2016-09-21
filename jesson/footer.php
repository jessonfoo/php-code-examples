<?php $ft = '';
$ft       = apply_filters('custom_footer_filter', $ft);?>
<?php global $etheme_responsive;?>
<?php if (is_active_sidebar('prefooter')):?>
<div class="prefooter prefooter-<?php echo $ft;?>">
  <div class="container">
    <div class="double-border">
<?php if (!is_active_sidebar('prefooter')):?>
        <?php //if($fd) etheme_footer_demo('prefooter'); ?>
      <?php  else :?>
        <?php dynamic_sidebar('prefooter');?>
      <?php endif;?>
</div>
  </div>
</div>
<?php endif;?>
<?php if (is_active_sidebar('footer1')):?>
  <div class="footer-top footer-top-<?php echo $ft;?>">
    <div class="container">
      <div class="double-border">
<?php if (!is_active_sidebar('footer1')):?>
          <?php if ($fd) {
	etheme_footer_demo('footer1');
}
?>
</div>
      </div>
    </div>
<?php  else :?>
    <?php dynamic_sidebar('footer1');?>
  <?php endif;?>
</div>
</div>
</div>
<?php endif;?>
<?php if (is_active_sidebar('footer2') || $fd):?>
  <footer class="footer footer-bottom-<?php echo $ft;?>">
    <div class="container">
<?php if (!is_active_sidebar('footer2')):?>
        <?php if ($fd) {
	etheme_footer_demo('footer2');
}
?>
      <?php  else :?>
        <?php dynamic_sidebar('footer2');?>
      <?php endif;?>
    <?php endif;?>
        <div id="true-footer" ng-controller="FootController" style="padding-top:0px;padding-bottom:0px;" align=center class="foot copyright b-0 color-white copyright-<?php echo $ft;?> mlr-a">
            <!-- <span class="row&#45;fluid b&#45;10 mtb&#45;10 p&#45;abs l&#45;0"> -->
              <!-- <span class="a&#45;left f&#45;l pl&#45;10 color&#45;dgrey"> -->
        <!-- <img class="w&#45;1200 a&#45;center b&#45;0" style='margin&#45;top:&#45;30px;' align=center src="<?php echo get_site_url();?>/wp&#45;content/uploads/rainbow_bar.jpg"> -->
              <!-- </span> -->
            <!-- </span> -->
            <div class="nl-top" style="background:url(<?php echo get_site_url();?>/wp-content/uploads/bg.png) repeat-x;">
          <div class="container">
          <?php include 'partials/_aFooter.php' ;?>
            <!-- <div class="row&#45;fluid pb&#45;50" > -->
            <!--   <div class="span7 pl&#45;30 pt&#45;20"> -->
            <!--     <div class="row&#45;fluid"> -->
            <!--       <h3 class="upcase pl&#45;10 f&#45;play color&#45;lblue"> Customer Support</h3> -->
            <!--     </div> -->
            <!--     <div class="row&#45;fluid"> -->
            <!--       <div class="span4"> -->
            <!--         <ul class="li&#45;ndec pl&#45;10"> -->
            <!--           <li class="pb&#45;10 li&#45;ndec a&#45;left color&#45;white fs&#45;14 f&#45;play" ng&#45;repeat="csolink in csoLinks" info="csoLink"> -->
            <!--             <a class="color&#45;white a&#45;left f&#45;play" href="<?php echo get_site_url();?>{{csoLink.link}}">{{csolink.title}}</a>  -->
            <!--           </li> -->
            <!--         </ul> -->
            <!--       </div> -->
            <!--       <div class="span4"> -->
            <!--         <ul class="li&#45;ndec pl&#45;10"> -->
            <!--           <li class="pb&#45;10 li&#45;ndec a&#45;left color&#45;white fs&#45;14 f&#45;play" ng&#45;repeat="cstwLink in cstwLinks" info="cstwLink"> -->
            <!--             <a class="color&#45;white a&#45;left f&#45;play" href="<?php echo get_site_url();?>{{cstwLink.link}}">{{cstwLink.title}}</a>  -->
            <!--           </li> -->
            <!--         </ul> -->
            <!--       </div> -->
            <!--       <div class="span4"> -->
            <!--         <ul class="li&#45;ndec pl&#45;10"> -->
            <!--           <li class="pb&#45;10 li&#45;ndec a&#45;left color&#45;white fs&#45;14 f&#45;play" ng&#45;repeat="csthLink in csthLinks" info="csthLink"> -->
            <!--             <a class="color&#45;white a&#45;left f&#45;play" href="<?php echo get_site_url();?>{{csthLink.link}}">{{csthLink.title}}</a>  -->
            <!--           </li> -->
            <!--         </ul> -->
            <!--       </div> -->
            <!--     </div> -->
            <!--   </div> -->
            <!--   <div class="span4 offset1 pt&#45;20"> -->
            <!--     <div class="row&#45;fluid"> -->
            <!--       <h3 class="upcase pl&#45;10 f&#45;play color&#45;lblue"> get in contact</h3> -->
            <!--     </div> -->
            <!--     <div class="row&#45;fluid"> -->
            <!--       <ul class="li&#45;ndec pl&#45;10"> -->
            <!--       <li class="pb&#45;10 li&#45;ndec a&#45;left color&#45;white fs&#45;14 f&#45;oswald" ng&#45;repeat="contactLink in contactLinks" info="contactLink"><a class="color&#45;white a&#45;left f&#45;oswald" href="{{contactLink.link}}"><img class="pr&#45;20" src="<?php echo get_site_url();?>/wp&#45;content/uploads/{{contactLink.icon}}">{{contactLink.title}}</a> </li> -->
            <!--           <li class="pb&#45;10 li&#45;ndec a&#45;left color&#45;white fs&#45;14 f&#45;play"> -->
            <!--           Follow Us: -->
            <!--           <a class="pl&#45;10 color&#45;white a&#45;left f&#45;play" ng&#45;repeat="smLink in smLinks" info="smlink" href="{{smLink.link}}"><img style="max&#45;width:35px;" ng&#45;src="<?php echo get_site_url();?>{{smLink.icon}}"></a>  -->
            <!--           </li> -->
            <!--       </ul> -->
            <!--     </div> -->
            <!--   </div> -->
            <!-- </div> -->
          </div>
          </div>
            <span class="bg-lblue row-fluid p-abs l-0" style="padding-top:10px; padding-bottom:10px;bottom: 0px !important;">
              <span style="top:5px;" class="a-center pl-15 color-white">
                Accutek Imaging© 2015 | All Rights Reserved | Web Design By <a class="color-white" href="http://www.northvillagegroup.com/"> North Village Group</a>.
              </span>
            </span>
          </div>
  </div>
</footer>
</div> <!-- page wrapper -->
  </div>
</div>
<!--         <div class="p&#45;rel mh&#45;400 full&#45;width" style="background&#45;size:cover !important;background:url(<?php echo get_site_url();?>/wp&#45;content/uploads/midbg.jpg) 50% 0% no&#45;repeat;"> -->
<!--           <div class="container"> -->
<!--             <div class="row&#45;fluid mt&#45;30"> -->
<!--               <div class="span4"> -->
<!--                 <h1 class="f&#45;oswald upcase color&#45;white">Our LINks</h1> -->
<!--                 <div class="row&#45;fluid"> -->
<!--                   <div class="span6"> -->
<!--                     <ul class="li&#45;nd fs&#45;16 lh&#45;2"> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> overview </a></li> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> pricing</a></li> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> specials </a></li> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> gift certificates</a></li> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> staff</a></li> -->
<!--                       <li><a class="f&#45;oswald upcase color&#45;white" href="#"> faq </a></li> -->
<!--                     </ul> -->
<!--                   </div> -->
<!--                   <div class="span6"> -->
<!--                     <ul class="li&#45;nd fs&#45;16 lh&#45;2"> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> other services </a></li> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> skydive perris </a></li> -->
<!--                       <li><a class="f&#45;oswald caps color&#45;white" href="#"> account</a></li> -->
<!--                     </ul> -->
<!--                   </div> -->
<!--                 </div> -->
<!--               </div> -->
<!--               <div class="span8"> -->
<!--                 <h1 class="f&#45;oswald upcase color&#45;white">Located at the entrance to the drop zone</h1> -->
<!--                 <div class="row&#45;fluid"> -->
<!--                   <div class="span4"> -->
<!--                     <p class="fs&#45;16 f&#45;oswald upcase color&#45;white lh&#45;1_5"> -->
<!--                     2091 Goetz Road <br> Perris, CA 92570&#45;9315 <br> Toll Free +1 (800) 832&#45;8818 <br> &#38;nbsp; &#38;nbsp; &#38;nbsp;  &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; &#38;nbsp; +1 (951) 940&#45;4290 <br> Email: <a class="td&#45;n fs&#45;16 color&#45;white f&#45;oswald" href="mailto:tunneltime@skydiveperris.com">tunneltime@skydiveperris.com</a> <br></br> Normal operating hours <br> weekdays 9am &#45; 5pm <br> weekends 8am &#45; 6pm -->
<!--                     </p> -->
<!--                   </div> -->
<!--                   <div class="span7"> -->
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.901264709567!2d&#45;117.22168459999999!3d33.7632172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc9f757401ca31%3A0x13ca8cb5a26a479b!2s2091+Goetz+Rd%2C+Perris%2C+CA+92570!5e0!3m2!1sen!2sus!4v1436835866934" width="454" height="230" frameborder="0" style="border:0" allowfullscreen></iframe> -->
<!--                   </div> -->
<!--                 </div> -->
<!--               </div> -->
<!--             </div> -->
<!--           </div> -->
<!--         </div> -->
<!-- <div class="copyright h&#45;40 p&#45;abs b&#45;0 full&#45;width copyright&#45;<?php echo $ft;?>"> -->
<!--   <span class="row&#45;fluid p&#45;rel h&#45;18 mt&#45;n10"> -->
<!--   <a class="footer&#45;link color&#45;white" id="careers" href="<?php echo get_site_url();?>/careers/">Careers</a> | -->
<!--   <a class="footer&#45;link color&#45;white" id="terms"   href="<?php echo get_site_url();?>/terms&#45;conditions/">Terms &#38; Conditions</a> | -->
<!--   <a class="footer&#45;link color&#45;white" id="legal"   href="<?php echo get_site_url();?>/legal/">Legal</a> | -->
<!--   <a class="footer&#45;link color&#45;white" id="about"   href="<?php echo get_site_url();?>/about&#45;us/">About Us</a> | -->
<!--   <a class="footer&#45;link color&#45;white" id="faq"     href="<?php echo get_site_url();?>/faq/">FAQ</a> -->
<!--   </span> -->
<!--   <span class="row&#45;fluid mt&#45;10 p&#45;abs b&#45;0 l&#45;0"> -->
<!--     StickyBuds © 2015 | All Rights Reserved | Web Design By <a class="color&#45;white" href="http://www.northvillagegroup.com/"> North Village Group</a>. -->
<!--   </span> -->
<!-- </div> -->
<!-- ag-mods
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/app.js"> </script>
 ag-controllers-->
<!--
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/FootController.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/directives/FootList.js"></script>
-->
<!-- ag-directives -->
<!--    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/directives/serviceInfo.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/directives/previouslyAssisted.js"></script>
-->
<?php do_action('after_page_wrapper');?>
<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */
wp_footer();
?>
<script>
if (!$){
  var $ = function(a){return jQuery(a);}
}
   // var $ = function(selector, [startNode]) { [Command Line API] }
</script>
<!-- <script src="//code.jquery.com/jquery&#45;1.11.3.min.js"></script> -->
<?php include 'js/gzn-functions.js';?>
<?php include 'js/gzn.js';?>
<sript src='js/shop.js' type="text/javascript">
</body>

</html>


<script>
    jQuery('#shipping_method_0_use_my_shipper').click(function(){

    });
jQuery('#use_my_shipper').css('display','block');
jQuery('.vfb-submit').css('background-color','#666666');


 setTimeout(function(){
      jQuery('#shipping_method').delay(10000).append('<br><font color="red">Enter shipping address to view more options</font>');
       jQuery('.shipping_note').attr('placeholder','Please specify shipping method e.g. Ground, 2nd Day, Next Day Air..');

    },4000);

    jQuery('#mob-placeholder .fa').on('click', function(){
	    jQuery('#mob-menu').toggleClass('give-h');
    });
</script>
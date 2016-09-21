<?php
/**
 * Template Name: Support Page
 */
get_header();
generalBannerTop('USSV Support');
?>

  <div align=center class="full-width">
    <div class="a-left h-700 w-1100 over-f-h mb-30">
  <?php while (have_posts()):the_post();
  the_content();
  endwhile;?>
  <div class="f-airborne">
    <h1 class="f-airborne">INTRODUCTION</h1>

    <p class="f-airborne"> US Specialty Vehicles and Ford Motor Company thank you for selecting one of our quality vehicles.  Our commitment to you and your vehicle begins with quality protection and service.  </p>
    <p class="f-airborne"> When you need warranty repairs, USSV would like you to return to it for that service if it pertains to body panels.  For any Powertrain or Ford component you can take the vehicle to any Ford Motor Company dealership authorized for warranty repairs.  Certain warranty repairs require special training though, so not all dealers are authorized to perform all warranty repairs.  That means that, depending on the warranty repair needed, the vehicle may need to be taken to another dealer.  
      For detailed warranty information you can visit <a class="color-black" href="www.ford.com">www.ford.com</a> or <a class="color-black" href="www.customersaskford.com">www.customersaskford.com </a>
      You can also contact US Specialty Vehicles at 866-812-6480.
    </p>
    <h2 class="f-airborne"> KNOW WHEN YOUR WARRANTY BEGINS </h2>
    <p class='f-airborne'>Your Warranty Start Date is the day you take delivery of your new vehicle or the day it is first put into service (for example, as a dealer demonstrator), whichever occurs first.  </p>

    <h2 class="f-airborne">CHECK YOUR VEHICLE</h2>
     <p class='f-airborne'> We try to check vehicles carefully at the assembly plant and we usually correct any issues before the vehicle is sold.  Occasionally though something may slip past us, and a customer may find that a vehicle was damaged before he or she took delivery.  If you see any damage when you receive your vehicle, notify USSV within one week.  </p>
    <h2 class="f-airborne">QUICK REFERENCE:  WARANTY COVERAGE</h2>
      <p class='f-airborne'>This chart gives a general summary of your warranty coverage provided by Ford Motor Company under the New Vehicle Limited Warranty and US Specialty Vehicles.
      For each type of coverage, the chart shows two measures: </p>
    <ul>
      <li>•Years in service</li>
      <li>•Miles driven</li>
      </ul>
      <p class="f-airborne">
      The measure that occurs first determines how long your coverage lasts.  For example:  Your Bumper to Bumper Coverage lasts for three years – unless you drive more than 36,000 miles before three years elapse.  In that case, your coverage ends at 36,000 miles.
        </p>

    </div>
  <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="my-account-link hidden-desktop">&nbsp;</a>
  </div>
</div>
<?php get_footer();?>


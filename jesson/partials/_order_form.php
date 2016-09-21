<div class="order-container full-width">
  <div class="mw-450 f-r border-g mr-50">
      <h2 class="f-airborne mt-30 w-350 ml-25 a-left bb-d-g">Place Your inquiry</h2>
      <form name="contact_form" class="a-center pb-30 ml-25" id="contact_form" enctype="text/plain" action="MAILTO:" method="GET" novalidate="novalidate">
        <span class="pb-50 bb-g">
          <label class="w-350 f-airborne a-left" for='name'>name</label>
          <input type="text"     name="name"    id="name"    class="input mt-10 border-g f-l w-400 mlr-0">
          <label class="w-350 f-airborne a-left" for='email'>email</label>
          <input type="email"    name="email"   id="email"   class="input mt-10 border-g f-l w-400  mlr-0"> 
          <label class="w-350 f-airborne a-left" for='lastname'>last name</label>
          <input type="text"     name="lastname" id="subject" class="input mt-10 w-400 f-l  mlr-0 border-g">
          <label class="w-350 f-airborne a-left" for='phone'>phone</label>
          <input type="tel" name="phone" id="phone" class="input mt-10 w-400 f-l mlr-0 va-t border-g" rows=5 > <br><br><br>
        </span>
        <span class="mt-35 bt-g"> 
          <img onclick="formActiveClass('#cash');"  mouseover="this.src=''" mouseout="this.src=''" class="cash-img" id="cash" src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/cash.jpg" data-value="cash">
          <img onclick="formActiveClass('#check');" mouseover="this.src=''" mouseout="this.src=''" class="check-img" id="check" src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/check.jpg" data-value="check">
          <img onclick="formActiveClass('#card');"  mouseover="this.src=''" mouseout="this.src=''" class="card-img" id="card" src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/card.jpg" data-value="card">
          <img onclick="formActiveClass('#echeck');"mouseover="this.src=''" mouseout="this.src=''" class="echeck-img" id="echeck" src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/echeck.jpg" data-value="echeck">
          <img onclick="formActiveClass('#more');"  mouseover="this.src=''" mouseout="this.src=''" class="more-img" id="more" src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/more.jpg" data-value="more">
          <input type="hidden" id="image-value" name="payment_type" value="">  
        <span>
          <button type="submit" class="ml-n25 bg-yellow h-50 fs-24 mt-20 mw-250 f-airborne bold button button-primary button-large">SEND</button> 
      </form>
  </div>
</div>

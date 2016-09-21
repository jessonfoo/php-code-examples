<script type="text/javascript">

function activeClassH(str){
	var a = $('.active');
	var b = $(str);
	a.removeClass('active').addClass('hidden');
	b.addClass('active').removeClass('hidden');
};
var addBorder = function(str){
	var a = $('.border-y');
	var b = $(str);
	a.removeClass('border-y').addClass('pad-2');
	b.addClass('border-y').removeClass('pad-2');
};
var galleryChange = function(str) {
 $('#active-image').attr('src',str); 
};

var formActiveClass = function(str){
  var check = '/wp-content/uploads/2015/05/check.jpg';
  var cash = '/wp-content/uploads/2015/05/cash.jpg';
  var card = '/wp-content/uploads/2015/05/card.jpg';
  var echeck = '/wp-content/uploads/2015/05/echeck.jpg';
  var checkH = '/wp-content/uploads/2015/05/check_hover.jpg';
  var cashH = '/wp-content/uploads/2015/05/cash_hover.jpg';
  var cardH = '/wp-content/uploads/2015/05/card_hover.jpg';
  var echeckH = '/wp-content/uploads/2015/05/echeck_hover.jpg';
  var more = '/wp-content/uploads/2015/05/more.jpg';
  var moreH = '/wp-content/uploads/2015/05/more_hover.jpg';


	var a = $('form > span > img.active');
	var b = $(str);
  if (a.hasClass('cash-img')) {
    a[0].src = cash; 
  } if (a.hasClass('check-img')) {
    a[0].src = check; 
  } if (a.hasClass('card-img')) { 
    a[0].src = card; 
  } if (a.hasClass('echeck-img')) { 
    a[0].src = echeck; 
  } if (a.hasClass('more-img')){ 
    a[0].src = more; 
  }
	a.removeClass('active');
	b.addClass('active');
	var ah = $('form > span > img.active');
  if (ah.hasClass('cash-img'))   {
    ah[0].src = cashH; 
  } if (ah.hasClass('check-img'))  {
    ah[0].src = checkH; 
  } if (ah.hasClass('card-img'))   { 
    ah[0].src = cardH; 
  } if (ah.hasClass('echeck-img')) {
    ah[0].src = echeckH; 
  } if (ah.hasClass('more-img'))   {
    ah[0].src = moreH; 
  }
};
var addSelectionBorder = function(str){
	var a = $('.border-y');
	var b = $(str);
  var c = $('.order-head-image > .active');
  var opt1 = $('.co1');
  var opt2 = $('.co2');
  var opt3 = $('.co3');
	a.removeClass('border-y').addClass('pad-2');
	b.addClass('border-y').removeClass('pad-2');
  c.addClass('hidden').removeClass('active');
  if (b.hasClass('opt1')) {
    opt1.removeClass('hidden').addClass('active');
  }
  if (b.hasClass('opt2')) {
    opt2.removeClass('hidden').addClass('active');
  }
  if (b.hasClass('opt3')) {
    opt3.removeClass('hidden').addClass('active');
  }
};

</script>

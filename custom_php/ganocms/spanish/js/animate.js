// JavaScript Document

$('.nav-link').mouseover(function(){
   $('.mega-menu').stop( true, true ).fadeIn();
});

$('.mega-menu').mouseover(function(){
   $('.mega-menu').stop( true, true ).fadeIn(0);
});

$('.nav-link').mouseout(function(){
   $('.mega-menu').delay(1000).stop( true, true ).fadeOut();
});
$('.mega-menu').mouseout(function(){
   $('.mega-menu').delay(1000).stop( true, true ).fadeOut();
});



$(window).load(function() { 
  $('.top-slider').slick({
   autoplay:true,
   arrows:false
  });
});
 
 
////$(window).load(function() { 
//  $('#slide-3').slick({
//   autoplay:false,
//   arrows:false

 // });
//});
  
 
$(window).load(function() { 
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 0
			});
		});
		

		
$(window).load(function() { 

        var $window = $(window);
	var scrollTime = 1.2;
	var scrollDistance = 170;

	$window.on("mousewheel DOMMouseScroll", function(event){

		event.preventDefault();	

		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);

		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,
				overwrite: 5							
			});

	});
});		
var do5=0;
var do2=0;
var do4=0;
var do8=0;
var do7=0;
var do6=0;
var bgpos=0;
//
$(window).scroll(function(){
var eTop = $('#slide-2').offset().top; //get the offset top of the element
var position2=(eTop - $(window).scrollTop()); //position of the ele w.r.t window

eTop = $('#slide-1').offset().top; //get the offset top of the element
var positionxx=(eTop - $(window).scrollTop()); //position of the ele w.r.t window

eTop = $('#slide-3').offset().top; //get the offset top of the element
var position3=(eTop - $(window).scrollTop()); //position of the ele w.r.t window
eTop = $('#slide-4').offset().top; //get the offset top of the element
var position4=(eTop - $(window).scrollTop()); //position of the ele w.r.t window
eTop = $('#slide-7').offset().top; //get the offset top of the element
var position7=(eTop - $(window).scrollTop()); //position of the ele w.r.t window
eTop = $('#slide-8').offset().top; //get the offset top of the element
var position8=(eTop - $(window).scrollTop()); //position of the ele w.r.t window


eTop = $('#slide-6').offset().top; //get the offset top of the element
var position6=(eTop - $(window).scrollTop()); //position of the ele w.r.t window

eTop = $('#slide-5').offset().top; //get the offset top of the element
var positions5=(eTop - $(window).scrollTop()); //position of the ele w.r.t window

if (positions5<=400 && do5!=1)
{
    
$( ".slide5bg2" ).fadeIn( 1000 );
  
$( ".slide5bg2b" ).fadeIn( 1000 );
    do5=1;
 
}

if (positionxx<70)
{
var pp=(positionxx-70);
$('.slide1bg').css('background-position','50% '+pp+'px');    
}

if (positionxx>=70)
{
var pp=(positionxx-70);
$('.slide1bg').css('background-position','center');    
}

var positionx=($(window).scrollTop()); //position of the ele w.r.t window


if (positionx==0){
//   var do2=0;
//var do4=0;
//var do8=0; 
}

if (position6<=500 && do6!=1)
{
    $( "#compplan" ).fadeIn( 1000 );
    do6=1;
}


if (position2<=500 && do2!=1)
{
    $( "#s2c" ).fadeIn( 2000 );
    do2=1;
}

if (position7<=800 && do7!=1)
{
    $( "#bmap" ).fadeIn( 2000 );

     //$( "#usa" ).delay(500).fadeIn( 2000 );
   $( "#mapc" ).delay(1000).fadeIn( 2000 );


    do7=1;
}


if (position4<=500 && do4!=1)
{

    $( "#s41" ).fadeIn( 1000 );
    $( "#s41b" ).fadeIn( 1000 );
    $( "#s42" ).delay(500).fadeIn( 1000 );
    $( "#s43" ).delay(1000).fadeIn( 1000 );
    $( "#s43b" ).delay(1000).fadeIn( 1000 );
    $( "#s44" ).delay(1500).fadeIn( 1000 );
    $( "#s45" ).delay(2000).fadeIn( 1000 );
    $( "#s45b" ).delay(2000).fadeIn( 1000 );
    $( "#s46" ).delay(2500).fadeIn( 1000 );    
    
    do4=1;
}



if (position8<=1200 && do8!=1)
{

 $( "#box" ).fadeIn(500);
   $( "#gs" ).fadeIn(500);  
    
    do8=1;
}
    
});


$('#gs').mouseover(function(){
    
this.src="skin/images/gssp2.jpg";
    
});


$('#gs').mouseout(function(){
    
this.src="skin/images/gssp.jpg";
    
});
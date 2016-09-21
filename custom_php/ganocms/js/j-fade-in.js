// $(function() {
//     $(window).scroll( function(){


//         $('.fadeInBlock').each( function(i){

//             var bottom_of_object = $(this).position().top + $(this).outerHeight();
//             var bottom_of_window = $(window).scrollTop() + $(window).height();

//             /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
//             bottom_of_window = bottom_of_window + 300;

//             if( bottom_of_window > bottom_of_object ){

//                 $(this).animate({'opacity':'1'},500);

//             }
//         });

//     });
// });

fInBlock = $(".fadeInBlock").fadeTo(0, 0.05);

$(window).scroll(function(d,h) {
    fInBlock.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $('.timeline-container').scrollTop() + $('.container').height();
        if (a < b) $(this).fadeTo(500,1);
    });
});

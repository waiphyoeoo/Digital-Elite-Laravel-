$(window).on('load', function() {
    $('#status').fadeOut(3000);
    $('#preloader').delay(1100).fadeOut(1000);
});

$(document).ready(function() {

    // sticky nav
    $('.js--home--section').waypoint(function(direction) {
        if (direction === 'down') {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: 'bottom-in-view'
    
    });
    //mobile nav
$('.js--mobile-nav-icon').click(function() {
    $('.js--main-nav').slideToggle(200);
    console.log('hello');

    if ($('.js--mobile-nav-icon i').hasClass('fa-bars')) {
        $('.js--mobile-nav-icon i').removeClass('fa-bars');
        $('.js--mobile-nav-icon i').addClass('fa-xmark');
    } else {
        $('.js--mobile-nav-icon i').removeClass('fa-xmark');
        $('.js--mobile-nav-icon i').addClass('fa-bars');
    }
    
})
    // scroll effect  
        $("a.smooth-scroll").click(function(event) {
            event.preventDefault();
            var select_id = $(this).attr('href');
            $("html,body").animate({
                    scrollTop: $(select_id).offset().top - 64,
                }, 1250),
                "easeInOutExpo"
        })
});


  
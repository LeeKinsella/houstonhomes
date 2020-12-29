$(function () {
        
//    $('#testimonialsCarousel').carousel({
//        interval: false
//    });
//    $('#testimonialsCarouselTablet').carousel({
//        interval: false
//    });
//    $('#testimonialsCarouselMobile').carousel({
//        interval: false
//    });
    
    var isDesktop = $(window).width() > 767;
    
    $(window).scroll(function() {
        if (isDesktop) {
            var scroll = $(window).scrollTop();
            $('.jumbotron .background').css('top', '0' + (scroll / 1.8) + 'px');
        }
        if ($(window).scrollTop() != 0) {
            $('nav').addClass('stuck');
        } else {
            $('nav').removeClass('stuck');
        }
    });
    
    $('#searchbox').click(function() {
        $('.search-container').addClass('active');
        $('.header-container').removeClass('active');
        $('.ui-autocomplete-input').focus();
    });
    
    $('#search-box i').click(function() {
        $('.search-container').removeClass('active');
        $('.header-container').addClass('active');
        $('.ui-autocomplete-input').blur();
    });

});

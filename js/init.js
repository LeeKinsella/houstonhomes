$(function () {
        
    $('.carousel').carousel({
        interval: false
    });
    
    $(window).scroll(function() {
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

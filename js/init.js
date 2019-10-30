(function ($) {
    $(function () {
        $('.parallax').parallax();
        $('.sidenav-trigger').click(function() {
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $('.sidenav').css("transform", "translateX(0%)");
            } else {
                $('.sidenav').css("transform", "translateX(-105%)");
            }
        });
        $('.down-arrow').click(function() {
            window.scrollTo({
                top: $('.container > .section').offset().top,
                left: 0,
                behavior: 'smooth'
            });
        });

    });
})(jQuery);
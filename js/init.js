$(function () {
    $('#testimonialsCarousel').carousel();
    $(window).scroll(function() {
        if ($(window).scrollTop() != 0) {
            $('nav').addClass('stuck');
        } else {
            $('nav').removeClass('stuck');
        }
    });
//    $('.header').height($(window).height());
//    fetch("../header.html")
//      .then(response => {
//        return response.text();
//      })
//      .then(data => {
//        document.querySelector("header").innerHTML = data;
//      });
//    fetch("../footer.html")
//      .then(response => {
//        return response.text();
//      })
//      .then(data => {
//        document.querySelector("footer").innerHTML = data;
//      });
//    $('.sidenav-trigger span').click(function(e) {
//        console.log(e);
//        e.preventDefault();
//        $(this).toggleClass('open');
//        if ($(this).hasClass('open')) {
//            $('.sidenav').css("transform", "translateX(0%)");
//        } else {
//            $('.sidenav').css("transform", "translateX(-105%)");
//        }
//    });
//    $('.down-arrow').click(function() {
//        window.scrollTo({
//            top: $('.container > .section').offset().top,
//            left: 0,
//            behavior: 'smooth'
//        });
//    });
//    window.setTimeout(function() {
//        $('.parallax').parallax();
//    });

});

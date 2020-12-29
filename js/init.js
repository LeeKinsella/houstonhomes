$(function () {
    
    fetch("../header.html")
      .then(response => {
        return response.text();
      })
      .then(data => {
        document.querySelector("nav").innerHTML = data;
        
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
        
        setLink('.header-container');
      });
    
    fetch("../footer.html")
      .then(response => {
        return response.text();
      })
      .then(data => {
        document.querySelector("footer").innerHTML = data;
        
        setLink('.footer-container');
      });
    
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
    
    $('*').contents().each(function() {
        if(this.nodeType === Node.COMMENT_NODE) {
            $(this).remove();
        }
    });

});

function setLink(selector) {
    $(selector + ' .nav-link-dynamic').each(function() {
        var path = $(this).attr('href');
        var currentPagePath = window.location.pathname;
        $(this).attr('href', (currentPagePath == path ? '#' : path));
    });
}

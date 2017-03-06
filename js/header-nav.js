    $(window).scroll(function() {
        if ($(this).scrollTop() > 130) {
            $('.header-fixed').css('display', 'block');
        }
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() < 130) {
            $('.header-fixed').css('display', 'none');
        }
    });
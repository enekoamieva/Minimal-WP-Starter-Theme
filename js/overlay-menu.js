jQuery(function ($) {
    /* Puedes usar $ con seguridad para hacer referencia a jQuery */

    function openNav() {
        $('#myNav').css('width', '100%');
        $('.open-nav').css('display', 'none');
    }

    function closeNav() {
        $('#myNav').css('width', '0');
        $('.open-nav').css('display', 'inherit');
    }

    $('.open-nav').on('click', openNav);
    $('.close-nav').on('click', closeNav);


});

jQuery(document).ready(function ($) {

    var width = $(window).width();

    if (width < 1025) {
        $('.open-nav').css('display', 'inherit');
        $('.main-navigation-hide').css('display', 'none');

    } else {
        $('.open-nav').css('display', 'none');
        $('.main-navigation-hide').css('display', 'inherit');
    }


    $(window).resize(function () {

        var width = $(window).width();

        if (width < 1025) {
            $('.open-nav').css('display', 'inherit');
            $('.main-navigation-hide').css('display', 'none');

        } else {
            $('.open-nav').css('display', 'none');
            $('.main-navigation-hide').css('display', 'inherit');
        }
    });


});

$(function () {

    $(".slider__inner, .news__content_slider").slick({
        nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
        prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
        infinite: false,

    });

    $(".header__btn_menu").on('click', function () {
        $(".menu ul").slideToggle();
    })

    $("select").styler();

});
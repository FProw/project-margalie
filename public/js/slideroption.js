$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1,
        nav: false,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        center: true,
        margin: 10,
    });
});
$(document).ready(function () {
    $(".flexslider").flexslider({
        animation: "slide",

        controlNav: false,
        directionNav: true,
        smoothHeight: true,
    });
});

$(function(){
    var realFooter = $(".real-footer").outerHeight();
    $(".footer-white").css("height",realFooter);
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
    var swiper = new Swiper(".amazing-offers", {
        slidesPerView: 4,
        spaceBetween: 4,
        breakpoints: {
            330: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 24,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

$(function () {
    // alert("hi");
    $("#navbars").on("click",function(e){
        $("header").toggleClass("active");
        $("header>ul").toggleClass("active");
        $("#navclose").toggleClass("active");
        e.preventDefault();
    });
    $("#navclose").on("click",function(e){
        $("#navclose").toggleClass("active");
        $("header").toggleClass("active");
        $("header>ul").toggleClass("active");

    });
    $("#navCatBtn").on("click",function(e){      
        $("#navCatBtn").toggleClass("active");
        e.preventDefault();
    });
    var realFooter = $(".real-footer").outerHeight();
    $(".footer-white").css("height",realFooter);
    var swiper = new Swiper(".main-carousel", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
    });
    var swiper = new Swiper(".amazing-offers", {
        slidesPerView: 4,
        spaceBetween: 4,
        breakpoints: {
            300: {
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



    
    // var swiper = new Swiper(".offers", {
    //     slidesPerView: 1,
    //     spaceBetween: 0,
    //     breakpoints: {
    //         250: {
    //             slidesPerView: 1.5,
    //             spaceBetween: 0,
    //         },
    //         300: {
    //             slidesPerView: 2,
    //             spaceBetween: 0,
    //         },
    //         400: {
    //             slidesPerView: 2.5,
    //             spaceBetween: 0,
    //         },
    //         450: {
    //             slidesPerView: 3,
    //             spaceBetween: 0,
    //         },
    //         560: {
    //             slidesPerView: 3.5,
    //             spaceBetween: 0,
    //         },
    //         600: {
    //             slidesPerView: 4,
    //             spaceBetween: 0,
    //         },
    //         720: {
    //             slidesPerView: 4.5,
    //             spaceBetween: 0,
    //         },
    //         800: {
    //             slidesPerView: 5,
    //             spaceBetween: 0,
    //         },
    //         885: {
    //             slidesPerView: 5.5,
    //             spaceBetween: 0,
    //         },
    //         930: {
    //             slidesPerView: 6,
    //             spaceBetween: 0,
    //         },
    //         1024: {
    //             slidesPerView: 5,
    //             spaceBetween: 24,
    //         },
    //         1116: {
    //             slidesPerView: 5.5,
    //             spaceBetween: 24,
    //         },
    //         1170: {
    //             slidesPerView: 6,
    //             spaceBetween: 24,
    //         },
    //         1320: {
    //             slidesPerView: 6.5,
    //             spaceBetween: 24,
    //         },
    //     },
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    // });
    // var swiper = new Swiper(".favorites", {
    //     slidesPerView: 2.5,
    //     spaceBetween: 0,
    //     breakpoints: {
    //         300: {
    //             slidesPerView: 3,
    //             spaceBetween: 0,
    //         },
    //         350: {
    //             slidesPerView: 3.5,
    //             spaceBetween: 0,
    //         },
    //         400: {
    //             slidesPerView: 4,
    //             spaceBetween: 0,
    //         },
    //         450: {
    //             slidesPerView: 4.5,
    //             spaceBetween: 0,
    //         },
    //         500: {
    //             slidesPerView: 5,
    //             spaceBetween: 0,
    //         },
    //         560: {
    //             slidesPerView: 5.5,
    //             spaceBetween: 0,
    //         },
    //         600: {
    //             slidesPerView: 6,
    //             spaceBetween: 0,
    //         },
    //         660: {
    //             slidesPerView: 6.5,
    //             spaceBetween: 0,
    //         },
    //         700: {
    //             slidesPerView: 7,
    //             spaceBetween: 0,
    //         },
    //         760: {
    //             slidesPerView: 7.5,
    //             spaceBetween: 0,
    //         },
    //         800: {
    //             slidesPerView: 8,
    //             spaceBetween: 0,
    //         },
    //         860: {
    //             slidesPerView: 8.5,
    //             spaceBetween: 0,
    //         },
    //         900: {
    //             slidesPerView: 9,
    //             spaceBetween: 0,
    //         },
    //         960: {
    //             slidesPerView: 9.5,
    //             spaceBetween: 0,
    //         },
    //         1000: {
    //             slidesPerView: 10,
    //             spaceBetween: 0,
    //         },
    //         1024: {
    //             slidesPerView: 6,
    //             spaceBetween: 24,
    //         },
    //         1024: {
    //             slidesPerView: 6,
    //             spaceBetween: 24,
    //         },
    //         1080: {
    //             slidesPerView: 6.5,
    //             spaceBetween: 24,
    //         },
    //         1120: {
    //             slidesPerView: 7,
    //             spaceBetween: 24,
    //         },
    //         1240: {
    //             slidesPerView: 7.5,
    //             spaceBetween: 24,
    //         },
    //         1280: {
    //             slidesPerView: 8,
    //             spaceBetween: 24,
    //         },
    //     },
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    // });
    // var swiper = new Swiper(".best-sellings", {
    //     slidesPerView: 1,
    //     spaceBetween: 0,
    //     breakpoints: {
    //         450: {
    //             slidesPerView: 1.5,
    //             spaceBetween: 0,
    //         },
    //         550: {
    //             slidesPerView: 2,
    //             spaceBetween: 0,
    //         },
    //         780: {
    //             slidesPerView: 2.5,
    //             spaceBetween: 0,
    //         },
    //         880: {
    //             slidesPerView: 3,
    //             spaceBetween: 0,
    //         },
    //         1024: {
    //             slidesPerView: 3.5,
    //             spaceBetween: 20,
    //         },
    //         1070: {
    //             slidesPerView: 4,
    //             spaceBetween: 20,
    //         },
    //     },
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    // });
})
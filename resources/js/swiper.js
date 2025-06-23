import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const swiper = new Swiper(".js-swiper-container", {
    // Optional parameters
    autoplay: {
        delay: 4000,
    },
    speed: 500,
    loop: true,
    effect: "fade",

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});

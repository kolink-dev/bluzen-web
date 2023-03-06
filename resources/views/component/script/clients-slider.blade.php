<script>
// ------------ clients sliders Start-----------
$(document).ready(function() {
    let SwiperBottom = new Swiper('.clients-slider5 .swiper-container', {
        spaceBetween: 0,
        centeredSlides: true,
        slidesPerView: 6,
        speed: 6000,
        autoplay: {
            delay: 1,
        },
        loop: true,
        allowTouchMove: false,
        disableOnInteraction: true,
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 6,
            }
        }
    });
});
// ------------ clients sliders End-----------
</script>
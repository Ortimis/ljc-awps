class Carousel {

    constructor() {
        this.init();
    }

    init() {
        $( '#aktuelles-wrapper' ).slick({
            dots: true,
            arrows: false,
            autoplay: true,
            speed: 500,
            cssEase: 'linear',
            slidesToShow: 3,
        });
    }
}

export default Carousel;

/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */

// Import libraries
import 'slick-carousel';
import 'vide';
//import 'magnific-popup'; 

// Import custom modules
import App from './modules/app.js';
//import Carousel from './modules/carousel.js';

const app = new App();
//const carousel = new Carousel();
$('#aktuelles-wrapper').slick({
    dots: true,
    infinite: false,
    arrows: false,
    autoplay: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1520,
            settings: {
                slidesToShow: 2,
                arrows: false
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});

var videobutton = document.getElementById('videobutton');
if (videobutton) {
    videobutton.addEventListener('click', function () {

        //Add Modal
        var modal = document.createElement('div');
        modal.classList.add('modal');
        modal.id ="modal";

        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube.com/embed/hdcYpmZ-Hik?rel=0';
        iframe.frameBorder = 0;
        iframe.allow = 'autoplay; encrypted-media';

        modal.appendChild(iframe);
        document.body.appendChild(modal);
        setTimeout(function(){
            modal.classList.add('modal-open');
        }, 1);

        //Remove Modal
        modal.addEventListener('click', function(){
            document.body.removeChild(modal);
        });

    });
}

/* $(window).load(function () {
    var f = document.createElement('iframe');
    f.src = "https://www.youtube.com/embed/hdcYpmZ-Hik";
    f.width = 1000;
    f.height = 500;
    $('body').append(f);
}); */

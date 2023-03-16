var input = document.querySelector(".tel-input")

if (input) {
    var iti = intlTelInput(input, {
        initialCountry: "us",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/14.0.1/js/utils.js"
    });
}

var swiper = new Swiper(".book__swiper", {
    speed: 600,
    slidesPerView: 1,
    slidesPerSlide: 1,
    loop: true,
    navigation: {
        nextEl: ".book__pagination-next",
        prevEl: ".book__pagination-prev",
    },
});

var swiper2 = new Swiper(".logos__swiper", {
    speed: 600,
    slidesPerView: 3,
    slidesPerSlide: 1,
    spaceBetween: 20,
    autoplay: {
        delay: 5000,
    },
    loop: true,
});

document.querySelectorAll('a[href^="#"]').forEach(trigger => {
    trigger.onclick = function (e) {
        e.preventDefault();
        let hash = this.getAttribute('href');
        let target = document.querySelector(hash);
        let headerOffset = 100;
        let elementPosition = target.offsetTop;
        let offsetPosition = elementPosition - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    };
});

// header mob menu

const menuBtn = document.querySelector('.header__menu-btn');
const menuLinks = document.querySelectorAll('.header__menu a');
const headerBtn = document.querySelector('.header__btn');
const menu = document.querySelector('.header__menu');
const documentElem = document.querySelector('body');
let menuState = false;
menuBtn.addEventListener('click', function (e) {
    e.preventDefault();
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
    headerBtn.classList.toggle('active');
    if (menuState) {
        documentElem.style.overflow = 'scroll';
    } else {
        documentElem.style.overflow = 'hidden';
    }
    menuState = !menuState;
});


menuLinks.forEach((elem) => {
    elem.addEventListener('click', function () {
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
        headerBtn.classList.toggle('active');
        if (menuState) {
            documentElem.style.overflow = 'scroll';
        } else {
            documentElem.style.overflow = 'hidden';
        }
        menuState = !menuState;
    });
})
let howItWorksText = new Swiper(".how-it-works-text", {

    slidesPerView: 1,
    //freeMode: true,
    watchSlidesProgress: true,
    direction: 'horizontal',

    breakpoints: {
        570: {
            slidesPerView: 3,
            spaceBetween: 10,
            direction: 'verical',
            autoHeight: true,
        }
    }
});
const swiperTester = new Swiper('.how-it-works-tester', {
    centeredSlides: true,
    slidesPerView: 1,
    loop: false,
    navigation: {

        nextEl: '.how-it-works-nextel',
        prevEl: '.how-it-works-prevel',
    },
    pagination: true,
    grabCursor: true,

    autoplay: false,


    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    thumbs: {
        swiper: howItWorksText,
    },
    slidesPerView: 1,
    spaceBetween: 0,
    direction: 'horizontal',
    568: {

        direction: 'vertical',
    }

});
// Swipers
let swiper = new Swiper('[data-swiper=features]', {
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 16,
    allowTouchMove: true,
    loop: true,
    navigation: {
        nextEl: '[data-swiper=next-features]',
        prevEl: '[data-swiper=prev-features]',
    },
    breakpoints: {
        // when window width is >= 767px
        767: {
            slidesPerView: 2.5,
            spaceBetween: 15
        }
    }
});

let swiperSecond = new Swiper('[data-swiper=plans]', {
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 16,
    allowTouchMove: true,
    loop: false,
    navigation: {
        nextEl: '[data-swiper=next-plans]',
        prevEl: '[data-swiper=prev-plans]',
    },
    breakpoints: {
        // when window width is >= 767px
        767: {
            slidesPerView: 2,
            spaceBetween: 0
        }
    }
});

//"how it is work" section toggle switcher
/*const pointList = document.querySelectorAll('.point-wrap');
const pointImg = document.querySelectorAll('.point-img');

pointList.forEach((item) => {
  item.addEventListener('click', () => {
    const currentElement = item;
    const previousElement = document.querySelector('.point-wrap.active');

    previousElement.classList.remove('active');
    currentElement.classList.add('active');


   pointImg.forEach((pointItem) => {
      if (currentElement.dataset.name === pointItem.dataset.name) {
        pointItem.classList.add('active');
      } else {
        pointItem.classList.remove('active');
      }
    });
  })
});*/

//Users review section switch
const usersList = document.querySelectorAll('.user-item');
const reviewVideos = document.querySelectorAll('.video-wrap');

usersList.forEach((item) => {
    item.addEventListener('click', () => {
        const currentElement = item;
        const previousElement = document.querySelector('.user-item.active');

        previousElement.classList.remove('active');
        currentElement.classList.add('active');

        reviewVideos.forEach((review) => {
            if (currentElement.dataset.name === review.dataset.name) {
                review.classList.add('active');
            } else {
                review.classList.remove('active');
            }
        });
    })
});

//FAQ section switch
const questionList = document.querySelectorAll('.item-wrap');

questionList.forEach((item) => {
    item.addEventListener('click', () => {
        const currentElement = item;
        const previousElement = document.querySelector('.item-wrap.opened');

        previousElement.classList.remove('opened');
        currentElement.classList.add('opened');
    });
});

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="{{asset('asset/logo/favicon-32.webp')}}" rel="shortcut icon" type="image/x-icon">
    <link href="{{asset('asset/logo/favicon-256.webp')}}" rel="apple-touch-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JuggernautAi') }}</title>

    <link href="{{config('app.url')}}" rel="canonical">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">

    <script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('set', 'developer_id.dZGVlNj', true);gtag('config', 'G-SWPVTHD633');</script>
    <script type="text/javascript">!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.agent='plwebflow';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('consent', 'revoke');fbq('init', '1898791196850');fbq('track', 'PageView');</script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css" rel="stylesheet" type="text/css">
    <style>
        /* Hide webflow badge */
        .w-webflow-badge { display: none !important; }

        /* Scroll */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-thumb { background: #ccc;}
        ::-webkit-scrollbar-track { background: #fff;}
    </style>

    <style>
        .how-it-works-content {
            opacity: 0.4
        }
        .swiper-slide-thumb-active .how-it-works-content{
            opacity: 1
        }
    </style>
</head>
<body>
<div class="body">
    <div class="page-wrapper is-home">
        <div class="global-styles w-embed"><style>
                /* Animation of input when focus */
                input::-webkit-input-placeholder, textarea::-webkit-input-placeholder { transition: .2s; }
                input:-moz-placeholder, textarea:-moz-placeholder { transition: .2s; }
                input::-moz-placeholder, textarea::-moz-placeholder { transition: .2s; }
                input:-ms-input-placeholder, textarea:-ms-input-placeholde { transition: .2s; }
                input:focus:-ms-input-placeholder, textarea:focus:-ms-input-placeholde { opacity: 0; }
                input:focus::-moz-placeholder, textarea:focus::-moz-placeholder { opacity: 0; }
                input:focus:-moz-placeholder, textarea:focus:-moz-placeholder { opacity: 0; }
                input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder { opacity: 0; }
                /* Disabled display of border when focus on element */
                *:focus { outline: 0; }
                /* Make text look crisper and more legible in all browsers */
                body {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                    font-smoothing: antialiased;
                    text-rendering: optimizeLegibility;
                    padding-right: 0px !important;
                }
                /* Focus state style for keyboard navigation for the focusable elements */
                *[tabindex]:focus-visible,
                input[type="file"]:focus-visible {
                    outline: 0.125rem solid #4d65ff;
                    outline-offset: 0.125rem;
                }
                /* Get rid of top margin on first element in any rich text element */
                .w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
                    margin-top: 0 !important;
                }
                /* Get rid of bottom margin on last element in any rich text element */
                .w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
                    margin-bottom: 0 !important;
                }
                /* Prevent all click and hover interaction with an element */
                .pointer-events-off { pointer-events: none; }
                /* Enables all click and hover interaction with an element */
                .pointer-events-on { pointer-events: auto; }
                /* Make sure containers never lose their center alignment */
                .container-medium,.container-small, .container-large {
                    margin-right: auto !important;
                    margin-left: auto !important;
                }

                a,
                .w-input,
                .w-select,
                .w-tab-link,
                .w-nav-link,
                .w-dropdown-btn,
                .w-dropdown-toggle,
                .w-dropdown-link {
                    color: inherit;
                    text-decoration: inherit;
                    font-size: inherit;
                }

                /* Apply "..." after 3 lines of text */
                .text-style-3lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                }
                /* Apply "..." after 2 lines of text */
                .text-style-2lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                }
                /* Adds inline flex display */
                .display-inlineflex { display: inline-flex; }
                /* These classes are never overwritten */
                .hide {
                    display: none !important;
                }
                @media screen and (max-width: 991px) {
                    .hide, .hide-tablet {
                        display: none !important;
                    }
                }
                @media screen and (max-width: 767px) {
                    .hide-mobile-landscape{
                        display: none !important;
                    }
                }
                @media screen and (max-width: 479px) {
                    .hide-mobile{
                        display: none !important;
                    }
                }

                .margin-0 { margin: 0rem !important; }
                .padding-0 { padding: 0rem !important; }
                .spacing-clean {
                    padding: 0rem !important;
                    margin: 0rem !important;
                }
                .margin-top {
                    margin-right: 0rem !important;
                    margin-bottom: 0rem !important;
                    margin-left: 0rem !important;
                }
                .padding-top {
                    padding-right: 0rem !important;
                    padding-bottom: 0rem !important;
                    padding-left: 0rem !important;
                }
                .margin-right {
                    margin-top: 0rem !important;
                    margin-bottom: 0rem !important;
                    margin-left: 0rem !important;
                }
                .padding-right {
                    padding-top: 0rem !important;
                    padding-bottom: 0rem !important;
                    padding-left: 0rem !important;
                }
                .margin-bottom {
                    margin-top: 0rem !important;
                    margin-right: 0rem !important;
                    margin-left: 0rem !important;
                }
                .padding-bottom {
                    padding-top: 0rem !important;
                    padding-right: 0rem !important;
                    padding-left: 0rem !important;
                }
                .margin-left {
                    margin-top: 0rem !important;
                    margin-right: 0rem !important;
                    margin-bottom: 0rem !important;
                }
                .padding-left {
                    padding-top: 0rem !important;
                    padding-right: 0rem !important;
                    padding-bottom: 0rem !important;
                }
                .margin-horizontal {
                    margin-top: 0rem !important;
                    margin-bottom: 0rem !important;
                }
                .padding-horizontal {
                    padding-top: 0rem !important;
                    padding-bottom: 0rem !important;
                }
                .margin-vertical {
                    margin-right: 0rem !important;
                    margin-left: 0rem !important;
                }
                .padding-vertical {
                    padding-right: 0rem !important;
                    padding-left: 0rem !important;
                }

                /*Fluid responsive */
                html { font-size: 1rem; }
                @media screen and (max-width: 1600px) and (min-width: 992px) {
                    html { font-size: 1vw; }
                }
                @media screen and (max-width: 991px) and (min-width: 768px) {
                    html { font-size: 1.2vw; }
                }

                /*Show text inside point wrap
                .point-wrap.active .point-text {
                  opacity: 100%;
                  display: block;
                }*/

                /*Show text inside FAQ*/
                .item-wrap.opened .answer-wrap {
                    height: auto;
                }

                .item-wrap.opened .answer-wrap .text-size-small.is-answer {
                    opacity: 100%;
                    transform: translate(0, 0);
                }

                .item-wrap.opened .minus-line {
                    opacity: 60%;
                }

                .item-wrap.opened .vertical-line {
                    opacity: 0%;
                }

                /*Active state for users review*/
                .user-item.active .user-name {
                    color: #98FEFA;
                }

                .user-item.active .user-avatar-wrap {
                    border-color: #CBFEF8;
                }

                .posts-highlighted-item:first-child {
                    grid-row: 1/3;
                }

                .posts-highlighted-item:first-child .highlighted-post {
                    height: 100%;
                    min-width: 49.6rem;
                    padding: 3.5rem 4.5rem;
                }

                .posts-highlighted-item:first-child .heading-h4.is-post-name {
                    font-size: 2.5rem;
                    max-width: 100%;
                }

                /* Scrollbar none visible */
                .categories-wrap {
                    overflow-x: auto;
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }

                ::-webkit-scrollbar {
                    width: 0px;
                    height: 0px;
                }

                ::-webkit-scrollbar-track {
                    background: transparent;
                }

                ::-webkit-scrollbar-thumb {
                    background: transparent;
                }

                ::-webkit-scrollbar-thumb:hover {
                    background: transparent;
                }

                /** hero preview **/
                @media screen and (min-width: 570px) {
                    [data-hero-preview]:not(:nth-child(1)) {
                        display: none;
                    }
                }

                @media screen and (max-width: 569px) {
                    [data-hero-preview]:not(:nth-child(2)) {
                        display: none;
                    }
                }

                @media screen and (min-width: 570px) {
                    .two-images {
                        display: flex;
                        column-gap: 1.5rem;
                    }
                }

                @media screen and (max-width: 569px) {
                    .two-images {
                        flex-direction: column;
                        row-gap: 1.5rem;
                    }
                }

                input[type="file"] {
                    display: none;
                }

                /** Close button in header mobile **/
                @media screen and (max-width: 768px) {
                    .nav-bar__m-button.w-nav-button.w--open .nav-bar_m-button-close-icon {
                        display: block;
                    }

                    .nav-bar__m-button.w-nav-button.w--open .nav-bar__m-button-icon {
                        display: none;
                    }
                }

                /** State for input inside form **/
                .subscribe-input:not(:placeholder-shown) {
                    color: white;
                }

                /** Current page in pagination **/
                .page-number.w--current {
                    background: #CBFEF8;
                    color: #05051B;
                }

                /** Stiles for video inside article **/
                @media screen and (min-width: 569px) {
                    .post-video {
                        height: 29rem;
                    }
                }

                @media screen and (max-width: 568px) {
                    .post-video {
                        height: 11.5rem;
                    }
                }
            </style></div>
        <div class="header">
            @include('frontend.layout.partials.navbar')
        </div>
        <main class="main">
            @yield('content')
        </main>
        @include('frontend.layout.partials.footer')

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>{{--<script src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/js/webflow.43f390dd2.js" type="text/javascript"></script>--}}
{{--<script>--}}
{{--    window.intercomSettings = {--}}
{{--        api_base: "https://api-iam.intercom.io",--}}
{{--        app_id: "o1s2q3y6"--}}
{{--    };--}}
{{--</script>--}}
<script>
    (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/o1s2q3y6';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" type="text/javascript"></script>
<style>
    /* Style modal */
    .remodal-overlay { background: rgba(34, 36, 38, 0.9); }
    .remodal { transform: scale(1) !important; }
    .remodal-wrapper {
        padding: 0px;
        overflow: hidden;
        -webkit-transform: translate(0,0);
        -ms-transform: translate(0,0);
        transform: translate(0,0);
    }
</style>
<script>
    SmoothScroll({
        animationTime    : 800, // [ms]
        stepSize         : 100, // [px]
        accelerationDelta : 50,  // 50
        accelerationMax   : 3,   // 3
        touchpadSupport   : false,
    })

    // update current year of copyright in footer
    $(() => {
        $('[data-copyright-year]').html(new Date().getFullYear());
    });
</script>
<style>
    .coupon-info {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: min-content;
    }
</style>
<script>
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
</script>

<script>
    // Get a reference to the input field and the button
    const couponInput = document.getElementById("couponCode");
    const redirectButton = document.getElementById("redirectButton");

    // Add a click event handler to the button
    redirectButton.addEventListener("click", redirectToNewUrl);

    // Add a key press event handler for the input field
    couponInput.addEventListener("keydown", function(event) {
        // Check if the pressed key is Enter (key code 13)
        if (event.keyCode === 13) {
            // Call the function to redirect to the new URL
            redirectToNewUrl();
        }
    });

    function redirectToNewUrl() {
        // Get the value entered in the input field
        const enteredCode = couponInput.value;

        // Check if the entered code is not empty
        if (enteredCode) {
            // Build a new URL by appending the entered code to the original link
            const baseUrl = "http://my.juggernautai.app/register?coupon=";
            const newUrl = baseUrl + enteredCode;

            // Redirect the user to the new URL
            window.location.href = newUrl;
        } else {
            // Handle the case where the entered code is empty
            // You can add your logic here if needed
        }
    }
</script>
</body>
</html>

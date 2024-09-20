@extends('frontend.layout.index')

@push('css')
    <link rel="stylesheet" href="{{asset('asset/css/how-it-work.css')}}">
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
    <style>
        .coupon-info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: min-content;
        }
    </style>
@endpush

@section('content')
    <section class="section mod--hero">
        <div class="container mod--hero">
            <div class="hero-left">
                <div class="hero-top"><h1 class="heading-h1 margin-bottom-32">The Smartest Program For You</h1>
                    <div class="text-size-medium text-color-grey-c is-hero-text">We deliver principle-based coaching
                        through cutting-edge technology to help you get the best results of your life
                    </div>
                </div>
                <div class="users-info-wrap">
                    <div class="users-avatars">
                        <div class="avatar-wrap"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f49_user-avatar2.png"
                                loading="lazy" alt=""></div>
                        <div class="avatar-wrap is-2"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f4b_user-avatar1.png"
                                loading="lazy" alt=""></div>
                        <div class="avatar-wrap is-2"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f4a_user-avatar3.png"
                                loading="lazy" alt=""></div>
                    </div>
                    <div class="users-text-wrap">
                        <div class="users-number heading-h3 text-color-bluelight">140k+</div>
                        <div class="users-text">users</div>
                    </div>
                </div>
            </div>
            <div class="hero-right">
                <div class="hero-top is-right">
                    <div class="text-size-regular text-color-grey-c margin-bottom-32">JuggernautAI is like having the
                        best coach in the world with you during every training session, helping you reach your true
                        potential
                    </div>
                    <a href="#choose-plan" class="button is-home-hero w-button">Start Your Free Trial</a></div>
                <div class="rating-wrap"><img
                        src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ecc_loading%2001.svg"
                        loading="lazy" alt="icon loading">
                    <div class="text-size-regular is-rating"><span class="subtitle-m text-color-bluelight">4.9</span>
                        AppStore &amp; Google Play Rating
                    </div>
                </div>
            </div>
            <img
                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed5_sportsman-1.webp"
                loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 31vw, 37vw"
                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed5_sportsman-1-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed5_sportsman-1-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed5_sportsman-1-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed5_sportsman-1.webp 1190w"
                alt="sportsman" class="img-abs-hero-1"><img
                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f48_Screen_hero.png"
                loading="lazy" alt="" class="img-abs-hero-2"></div>
    </section>
    <section class="section">
        <div class="container">
            <div class="subtitle-s text-color-bluelight margin-bottom-16">WHO WE ARE</div>
            <h2 class="heading-h2 margin-bottom-80 is-who">Since 2009, Juggernaut has been your trusted training
                resource, helping tens of thousands of athletes <span class="text-color-blue">reach their goals</span>.
                From beginners to World Champions, JuggernautAI can help you.</h2></div>
        <img
            src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1.webp"
            loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 92vw, 94vw"
            srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1-p-1600.webp 1600w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1-p-2000.webp 2000w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1-p-2600.webp 2600w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed6_tournament-1.webp 2784w"
            alt="tournament" class="img-home is-desktop"><img
            src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2a_who-img-mob.webp"
            loading="lazy" sizes="(max-width: 479px) 95vw, (max-width: 754px) 93vw, (max-width: 767px) 702px, 100vw"
            srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2a_who-img-mob-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2a_who-img-mob.webp 702w"
            alt="tournament" class="img-home is-mob"></section>
    <section data-w-id="e56b6010-cb83-e654-be21-aaa0c44fde8c" class="section it-work">
        <div class="container is-how-it">
            <div class="heading-top margin-bottom-48"><h2 class="heading-h3">How it works</h2><a
                    href="https://my.juggernautai.app/register/" class="button is-transparent is-desktop w-button">Get
                    Started</a></div>
            <div class="info-wrap">
                <div class="info-col is-1"><img class="point-img is-1"
                                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edd_how-img-1.webp"
                                                alt="app on the screen" data-name="point-1" sizes="100vw" loading="lazy"
                                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edd_how-img-1-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edd_how-img-1-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edd_how-img-1-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edd_how-img-1.webp 1232w"
                                                style="will-change: transform; transform: translate3d(-180%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><img
                        class="point-img is-2"
                        src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ede_how-img-2.webp"
                        alt="app on the screen" data-name="point-2" sizes="100vw" loading="lazy"
                        srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ede_how-img-2-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ede_how-img-2-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ede_how-img-2-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ede_how-img-2.webp 1232w"
                        style="will-change: transform; transform: translate3d(-180%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><img
                        class="point-img is-3"
                        src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edf_how-img-3.webp"
                        alt="app on the screen" data-name="point-3" sizes="100vw" loading="lazy"
                        srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edf_how-img-3-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edf_how-img-3-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edf_how-img-3-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9edf_how-img-3.webp 1232w"
                        style="will-change: transform; transform: translate3d(0%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                </div>
                <div class="info-col"><a data-name="point-1" href="#" class="point-wrap is-1 w-inline-block"
                                         style="border-color: rgb(255, 255, 255); will-change: opacity; opacity: 0.25;">
                        <div class="heading-h4">Tell our system all about yourself <br>and your goals</div>
                        <div class="point-text is-1" style="will-change: width, height; height: 0rem;">
                            <div class="text-size-regular text-color-grey-c is-how is-1"
                                 style="will-change: transform; transform: translate3d(0px, -100%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                Tell our system all about yourself and your goals including gender, age, size, strength,
                                experience, recovery, and so much more. From then on our proprietary algorithms will
                                work towards building <br>the smartest program for you
                            </div>
                        </div>
                    </a><a data-name="point-2" href="#" class="point-wrap is-2 w-inline-block"
                           style="border-color: rgb(255, 255, 255); will-change: opacity; opacity: 0.25;">
                        <div class="heading-h4">Individualized programming made specifically for your goals</div>
                        <div class="point-text is-2" style="will-change: width, height; height: 0rem;">
                            <div class="text-size-regular text-color-grey-c is-how is-2"
                                 style="will-change: transform; transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                JuggernautAI uses your feedback to create a program specifically for your needs. Our
                                system finds the right amount of work you need to progress, optimal training frequency,
                                periodization style personalized to you and exercises specifically targeted at your weak
                                points
                            </div>
                        </div>
                    </a><a data-name="point-3" href="#" class="point-wrap is-3 w-inline-block"
                           style="border-color: rgb(203, 254, 248); will-change: opacity; opacity: 1;">
                        <div class="heading-h4">Adjustments Every Step of the Way</div>
                        <div class="point-text is-3" style="will-change: width, height; height: 15rem;">
                            <div class="point-content"
                                 style="will-change: transform; transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                <div class="text-size-regular text-color-grey-c">With every JuggernautAI workout, the
                                    app learns from your feedback to create the best program for you
                                </div>
                                <ul role="list" class="info-list">
                                    <li class="info-list-item">Set to Set</li>
                                    <li class="info-list-item">Day to Day</li>
                                    <li class="info-list-item">Week to Week</li>
                                    <li class="info-list-item">Block to Block</li>
                                    <li class="info-list-item is-last">Program to Program</li>
                                </ul>
                            </div>
                        </div>
                    </a></div>
            </div>
            <a href="#" class="button is-transparent is-mob w-button">Get Started</a></div>
    </section>
    <section class="section"><h3 class="heading-9">How it works</h3>
        <div class="container how-it-works-container">
            <div class="div-block-2">
                <div
                    class="swiper swiper-how-it-works how-it-works-tester w-dyn-list swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div role="list" class="swiper-wrapper w-dyn-items" id="swiper-wrapper-768a8452d773a153"
                         aria-live="polite" style="cursor: grab;">
                        <div role="group" class="swiper-slide w-dyn-item swiper-slide-active" aria-label="1 / 3"
                             style="width: 701px;"><img alt="" loading="lazy"
                                                        src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12c18662797983f0a2c3_653a0fc479ec415433fc9edd_how-img-1.webp"
                                                        sizes="(max-width: 767px) 89vw, (max-width: 991px) 52vw, 49vw"
                                                        srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12c18662797983f0a2c3_653a0fc479ec415433fc9edd_how-img-1-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12c18662797983f0a2c3_653a0fc479ec415433fc9edd_how-img-1-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12c18662797983f0a2c3_653a0fc479ec415433fc9edd_how-img-1-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12c18662797983f0a2c3_653a0fc479ec415433fc9edd_how-img-1.webp 1232w"
                                                        class="swiper-slide-image"></div>
                        <div role="group" class="swiper-slide w-dyn-item swiper-slide-next" aria-label="2 / 3"
                             style="width: 701px;"><img alt="" loading="lazy"
                                                        src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12f5162fb4d61e1cea10_653a0fc479ec415433fc9ede_how-img-2.webp"
                                                        sizes="(max-width: 767px) 89vw, (max-width: 991px) 52vw, 49vw"
                                                        srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12f5162fb4d61e1cea10_653a0fc479ec415433fc9ede_how-img-2-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12f5162fb4d61e1cea10_653a0fc479ec415433fc9ede_how-img-2-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12f5162fb4d61e1cea10_653a0fc479ec415433fc9ede_how-img-2-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a12f5162fb4d61e1cea10_653a0fc479ec415433fc9ede_how-img-2.webp 1232w"
                                                        class="swiper-slide-image"></div>
                        <div role="group" class="swiper-slide w-dyn-item" aria-label="3 / 3" style="width: 701px;"><img
                                alt="" loading="lazy"
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a132de81572cfdc718832_653a0fc479ec415433fc9edf_how-img-3.webp"
                                sizes="(max-width: 767px) 89vw, (max-width: 991px) 52vw, 49vw"
                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a132de81572cfdc718832_653a0fc479ec415433fc9edf_how-img-3-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a132de81572cfdc718832_653a0fc479ec415433fc9edf_how-img-3-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a132de81572cfdc718832_653a0fc479ec415433fc9edf_how-img-3-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/657a132de81572cfdc718832_653a0fc479ec415433fc9edf_how-img-3.webp 1232w"
                                class="swiper-slide-image"></div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
            <div class="div-block-3">
                <div
                    class="swiper how-it-works-text w-dyn-list swiper-initialized swiper-verical swiper-autoheight swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                    <div role="list" class="swiper-wrapper how-it-works-text-wrapper w-dyn-items"
                         id="swiper-wrapper-2e2bedf4e4f49008" aria-live="polite"
                         style="height: 193px; transform: translate3d(0px, 0px, 0px);">
                        <div role="group"
                             class="swiper-slide how-it-works-text-slide w-dyn-item swiper-slide-visible swiper-slide-fully-visible swiper-slide-active swiper-slide-thumb-active"
                             aria-label="1 / 3" style="height: 193.333px; margin-bottom: 10px;">
                            <div class="how-it-works-content">
                                <div class="div-block-4"><h4 class="heading-8">Tell our system all about yourself and
                                        your goals</h4>
                                    <div class="rich-text-block-2 w-richtext"><p>From then on our proprietary algorithms
                                            will work towards building the smartest program for you</p></div>
                                </div>
                            </div>
                        </div>
                        <div role="group"
                             class="swiper-slide how-it-works-text-slide w-dyn-item swiper-slide-visible swiper-slide-fully-visible swiper-slide-next"
                             aria-label="2 / 3" style="height: 193.333px; margin-bottom: 10px;">
                            <div class="how-it-works-content">
                                <div class="div-block-4"><h4 class="heading-8">Individualized programming made
                                        specifically for your goals</h4>
                                    <div class="rich-text-block-2 w-richtext"><p>Our system finds the right amount of
                                            work you need to progress, optimal training frequency, periodization style
                                            personalized to you and exercises specifically targeted at your weak
                                            points</p></div>
                                </div>
                            </div>
                        </div>
                        <div role="group" class="swiper-slide how-it-works-text-slide w-dyn-item swiper-slide-visible"
                             aria-label="3 / 3" style="height: 193.333px; margin-bottom: 10px;">
                            <div class="how-it-works-content">
                                <div class="div-block-4"><h4 class="heading-8">Adjustments Every Step of the Way</h4>
                                    <div class="rich-text-block-2 w-richtext"><p>With every JuggernautAI workout, the
                                            app learns from your feedback to create the best program for you. </p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="div-block-5">
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                              role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                                                                    role="button" aria-label="Go to slide 3"></span>
                    </div>
                    <div class="swiper-nav__arrow is-left how-it-works-prevel swiper-button-disabled" tabindex="-1"
                         role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-768a8452d773a153"
                         aria-disabled="true"></div>
                    <div class="swiper-nav__arrow is-right how-it-works-nextel" tabindex="0" role="button"
                         aria-label="Next slide" aria-controls="swiper-wrapper-768a8452d773a153"
                         aria-disabled="false"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-feature">
        <div class="container is-features">
            <div class="left-col"><h3 class="heading-h3 is-features">Start Seeing Results</h3>
                <div class="swiper-nav">
                    <div data-swiper="prev-features" class="swiper-nav__arrow is-left" tabindex="0" role="button"
                         aria-label="Previous slide" aria-controls="swiper-wrapper-74ed51bbe194bb104"></div>
                    <div data-swiper="next-features" class="swiper-nav__arrow is-right" tabindex="0" role="button"
                         aria-label="Next slide" aria-controls="swiper-wrapper-74ed51bbe194bb104"></div>
                </div>
            </div>
            <div data-swiper="features"
                 class="swiper mod--reviews swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-74ed51bbe194bb104" aria-live="polite">
                    <div class="swiper-slide mod--reviews is-features swiper-slide-active" role="group"
                         aria-label="1 / 6" style="width: 342.6px; margin-right: 15px;" data-swiper-slide-index="0">
                        <div class="swiper__slide-content mod--reviews"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee0_slider-img-1-1.webp"
                                loading="lazy"
                                sizes="(max-width: 479px) 97vw, (max-width: 767px) 94vw, (max-width: 991px) 24vw, 28vw"
                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee0_slider-img-1-1-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee0_slider-img-1-1-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee0_slider-img-1-1.webp 900w"
                                alt="tournament" class="img-slide"><h4 class="heading-h4 margin-bottom-16">Powerlifting
                                &amp; Powerbuilding</h4>
                            <div class="text-size-medium text-color-grey-c">Whether you are wanting to increase your
                                powerlifting total or work on your bodybuilding goals, we have a program for you
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-features swiper-slide-next" role="group" aria-label="2 / 6"
                         style="width: 342.6px; margin-right: 15px;" data-swiper-slide-index="1">
                        <div class="swiper__slide-content mod--reviews"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed7_slider-photo-2.webp"
                                loading="lazy"
                                sizes="(max-width: 479px) 97vw, (max-width: 767px) 94vw, (max-width: 991px) 24vw, 28vw"
                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed7_slider-photo-2-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed7_slider-photo-2-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed7_slider-photo-2.webp 900w"
                                alt="tournament" class="img-slide"><h4 class="heading-h4 margin-bottom-16">Community
                                Support</h4>
                            <div class="text-size-medium text-color-grey-c">All JuggernautAI users get exclusive access
                                to our private facebook community where you can ask questions and get form feedback from
                                fellow members
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-features" role="group" aria-label="3 / 6"
                         style="width: 342.6px; margin-right: 15px;" data-swiper-slide-index="2">
                        <div class="swiper__slide-content mod--reviews"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed9_slider-photo-4.webp"
                                loading="lazy"
                                sizes="(max-width: 479px) 97vw, (max-width: 767px) 94vw, (max-width: 991px) 24vw, 28vw"
                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed9_slider-photo-4-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed9_slider-photo-4-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed9_slider-photo-4.webp 900w"
                                alt="tournament" class="img-slide"><h4 class="heading-h4 margin-bottom-16">300+
                                Exercises</h4>
                            <div class="text-size-medium text-color-grey-c">With over 250 exercises in our database,
                                with videos and coaching cues to help you every step of the way. Something missing?
                                Simply create your own instantly
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-features" role="group" aria-label="4 / 6"
                         style="width: 342.6px; margin-right: 15px;" data-swiper-slide-index="3">
                        <div class="swiper__slide-content mod--reviews"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed8_slider-photo-3.webp"
                                loading="lazy"
                                sizes="(max-width: 479px) 97vw, (max-width: 767px) 94vw, (max-width: 991px) 24vw, 28vw"
                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed8_slider-photo-3-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed8_slider-photo-3-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ed8_slider-photo-3.webp 900w"
                                alt="tournament" class="img-slide"><h4 class="heading-h4 margin-bottom-16">Meet Day
                                Advisor</h4>
                            <div class="text-size-medium text-color-grey-c">Want to know how to have the perfect
                                powerlifting meet? Our advisor takes all your JuggernautAI training into account to
                                calculate your attempts for the most successful meet
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-features" role="group" aria-label="5 / 6"
                         style="width: 342.6px; margin-right: 15px;" data-swiper-slide-index="4">
                        <div class="swiper__slide-content mod--reviews"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef7_slider-img-7.webp"
                                loading="lazy"
                                sizes="(max-width: 479px) 97vw, (max-width: 767px) 94vw, (max-width: 991px) 24vw, 28vw"
                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef7_slider-img-7-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef7_slider-img-7-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef7_slider-img-7.webp 900w"
                                alt="tournament" class="img-slide"><h4 class="heading-h4 margin-bottom-16">Tools</h4>
                            <div class="text-size-medium text-color-grey-c">We provide a wide range of tools to assist
                                you with your training. From a warm up planner with plate math to RPE&nbsp;calculator,
                                we've got you covered.
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-features" role="group" aria-label="6 / 6"
                         style="width: 342.6px; margin-right: 15px;" data-swiper-slide-index="5">
                        <div class="swiper__slide-content mod--reviews"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee2_slider-img-6.webp"
                                loading="lazy"
                                sizes="(max-width: 479px) 97vw, (max-width: 767px) 94vw, (max-width: 991px) 24vw, 28vw"
                                srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee2_slider-img-6-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee2_slider-img-6-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ee2_slider-img-6.webp 900w"
                                alt="tournament" class="img-slide"><h4 class="heading-h4 margin-bottom-16">In-Depth
                                History</h4>
                            <div class="text-size-medium text-color-grey-c">With over 250 exercises in our database,
                                with videos and coaching cues to help you every step of the way. Something missing?
                                Simply create your own instantly
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>
    <section class="section">
        <div class="container is-more">
            <div class="subtitle-s is-capital margin-bottom-16">And so much more...</div>
            <div class="more-text-wrap"><h2 class="heading-h2 is-more">JuggernautAI is the highest rated strength
                    training app and we are committed to always improving it to help you reach <span
                        class="text-color-bluelight">your goals</span>.</h2><a
                    href="https://my.juggernautai.app/register/" class="button is-who w-button">Get Started</a></div>
        </div>
    </section>
    <section id="choose-plan" class="section">
        <div class="container">
            <div class="coupon-info-wrapper">
                <div class="coupon-info"><img
                        src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f47_icon-close.svg"
                        loading="lazy" data-w-id="db0c2fd6-209e-cee0-3974-533e06479ccc" alt="" class="icon-close">
                    <div class="popup-tittle"><h3 class="heading-h3 text-align-center">Enter coupon code</h3>
                        <p class="text-size-regular text-align-center text-color-grey-c is-popup">Enter your coupon code
                            at checkout form but if you use it, then the trial period will not be available for you.</p>
                    </div>
                    <div class="popup-input">
                        <div class="form-block w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-2"
                                  data-wf-page-id="653a0fc479ec415433fc9e8f"
                                  data-wf-element-id="db0c2fd6-209e-cee0-3974-533e06479cd4" aria-label="Email Form">
                                <input class="form-input is-popup w-input" maxlength="256" name="name" data-name="Name"
                                       placeholder="Your code" type="text" id="couponCode"></form>
                            <div class="w-form-done" tabindex="-1" role="region" aria-label="Email Form success">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email Form failure">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                        <a id="redirectButton" href="#" class="button is-popup w-button">Send</a></div>
                </div>
            </div>
            <div class="heading-top margin-bottom-32"><h3 class="heading-h3">Choose the right plan for you</h3>
                <div data-w-id="db0c2fd6-209e-cee0-3974-533e06479ce1" class="coupon-btn is-desktop">
                    <div class="coupon-text">Enter coupon code</div>
                </div>
            </div>
            <div class="plans-wrap">
                <div class="plan-wrap"><h1 class="subtitle-s">Monthly</h1>
                    <div class="div-block-6">
                        <div class="plan-price is-2">$34<span class="plan-price-grey"> 99</span></div>
                    </div>
                    <ul role="list" class="plans-list">
                        <li class="plan-item-list">2 week free trial</li>
                        <li class="plan-item-list">Totally individualized Powerlifting &amp; Powerbuilding training
                            plan
                        </li>
                        <li class="plan-item-list">Program that adjusts to your feedback</li>
                        <li class="plan-item-list">Over 300 detailed exercise technique videos</li>
                        <li class="plan-item-list">Supportive community of fellow athletes and coaches</li>
                        <li class="plan-item-list">Weekly video Q&amp;A with Juggernaut Coaches</li>
                        <li class="plan-item-list disabled">2 months free</li>
                        <li class="plan-item-list disabled">30 min 1 on 1 consultation with Juggernaut Head Coach, Chad
                            Wesley Smith ($150 value)
                        </li>
                        <li class="plan-item-list disabled">6 free online seminars ($1800 value)</li>
                        <li class="plan-item-list disabled">Squat, Bench and Deadlift Manuals e-books ($81 value)</li>
                    </ul>
                    <a href="https://my.juggernautai.app/register?product=monthly"
                       class="button is-transparent w-button">Start Your Free Trial</a></div>
                <div class="plan-wrap is-recomended"><h1 class="subtitle-s">Yearly</h1>
                    <div>
                        <div class="plan-price is-2">$349<span class="plan-price-grey promotional-price"> 99</span>
                        </div>
                        <div class="plan-price is-2 original-price">$2,450.88</div>
                    </div>
                    <ul role="list" class="plans-list">
                        <li class="plan-item-list">2 week free trial</li>
                        <li class="plan-item-list">Totally individualized Powerlifting &amp; Powerbuilding training
                            plan
                        </li>
                        <li class="plan-item-list">Program that adjusts to your feedback</li>
                        <li class="plan-item-list">Over 300 detailed exercise technique videos</li>
                        <li class="plan-item-list">Supportive community of fellow athletes and coaches</li>
                        <li class="plan-item-list">Weekly video Q&amp;A with Juggernaut Coaches</li>
                        <li class="plan-item-list highlighted">2 months free</li>
                        <li class="plan-item-list highlighted">30 min 1 on 1 consultation with Juggernaut Head Coach,
                            Chad Wesley Smith ($150 value)
                        </li>
                        <li class="plan-item-list highlighted">6 free online seminars ($1800 value)</li>
                        <li class="plan-item-list highlighted">Squat, Bench and Deadlift Manuals e-books ($81 value)
                        </li>
                    </ul>
                    <a href="https://my.juggernautai.app/register?product=yearly" class="button w-button">Start Your
                        Free Trial</a>
                    <div class="recomend-block">recommended</div>
                </div>
            </div>
            <div data-swiper="plans"
                 class="swiper mod--plans swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper is-plans" id="swiper-wrapper-31cec330110885e10" aria-live="polite"
                     style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper-slide mod--plans swiper-slide-active" role="group" aria-label="1 / 2"
                         style="width: 712px;">
                        <div class="plan-wrap"><h1 class="subtitle-s">Monthly</h1>
                            <div class="plan-price is-2">$34<span class="plan-price-grey"> 99</span></div>
                            <div class="text-size-regular text-color-grey-c margin-bottom-40 is-2">$2400+ value</div>
                            <ul role="list" class="plans-list">
                                <li class="plan-item-list">2 week free trial</li>
                                <li class="plan-item-list">Totally individualized Powerlifting &amp; Powerbuilding
                                    training plan
                                </li>
                                <li class="plan-item-list">Program that adjusts to your feedback</li>
                                <li class="plan-item-list">Over 300 detailed exercise technique videos</li>
                                <li class="plan-item-list">Supportive community of fellow athletes and coaches</li>
                                <li class="plan-item-list">Weekly video Q&amp;A with Juggernaut Coaches</li>
                                <li class="plan-item-list disabled">2 months free</li>
                                <li class="plan-item-list disabled">30 min 1 on 1 consultation with Juggernaut Head
                                    Coach, Chad Wesley Smith ($150 value)
                                </li>
                                <li class="plan-item-list disabled">6 free online seminars ($1800 value)</li>
                                <li class="plan-item-list disabled">Squat, Bench and Deadlift Manuals e-books ($81
                                    value)
                                </li>
                            </ul>
                            <a href="https://www.juggernautai.app/register/" class="button is-transparent w-button">Get
                                Started</a></div>
                    </div>
                    <div class="swiper-slide mod--plans swiper-slide-next" role="group" aria-label="2 / 2"
                         style="width: 712px;">
                        <div class="plan-wrap is-recomended"><h1 class="subtitle-s">Yearly</h1>
                            <div class="plan-price is-2">$349<span class="plan-price-grey"> 99</span></div>
                            <div class="text-size-regular text-color-grey-c margin-bottom-40">$2400+ value</div>
                            <ul role="list" class="plans-list">
                                <li class="plan-item-list">2 week free trial</li>
                                <li class="plan-item-list">Totally individualized Powerlifting &amp; Powerbuilding
                                    training plan
                                </li>
                                <li class="plan-item-list">Program that adjusts to your feedback</li>
                                <li class="plan-item-list">Over 300 detailed exercise technique videos</li>
                                <li class="plan-item-list">Supportive community of fellow athletes and coaches</li>
                                <li class="plan-item-list">Weekly video Q&amp;A with Juggernaut Coaches</li>
                                <li class="plan-item-list highlighted">2 months free</li>
                                <li class="plan-item-list highlighted">30 min 1 on 1 consultation with Juggernaut Head
                                    Coach, Chad Wesley Smith ($150 value)
                                </li>
                                <li class="plan-item-list highlighted">6 free online seminars ($1800 value)</li>
                                <li class="plan-item-list highlighted">Squat, Bench and Deadlift Manuals e-books ($81
                                    value)
                                </li>
                            </ul>
                            <a href="https://www.juggernautai.app/register/" class="button w-button">Get Started</a>
                            <div class="recomend-block">recommended</div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div data-w-id="db0c2fd6-209e-cee0-3974-533e06479d7f" class="coupon-btn is-mob">
                <div class="coupon-text">Enter coupon code</div>
            </div>
            <div class="swiper-nav is-plans">
                <div data-swiper="prev-plans"
                     class="swiper-nav__arrow is-left swiper-button-lock swiper-button-disabled" tabindex="-1"
                     role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-31cec330110885e10"
                     aria-disabled="true"></div>
                <div data-swiper="next-plans"
                     class="swiper-nav__arrow is-right swiper-button-lock swiper-button-disabled" tabindex="-1"
                     role="button" aria-label="Next slide" aria-controls="swiper-wrapper-31cec330110885e10"
                     aria-disabled="true"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="heading-top margin-bottom-48"><h2 class="heading-h3">Our benefits</h2>
                <div class="text-size-medium text-color-grey-c is-benefits">Get World Class coaching in the palm of your
                    hand
                </div>
            </div>
            <div class="benefits-wrap">
                <div class="benefits-list">
                    <div class="benefit-item">
                        <div class="benefit-icon-wrap is-1"></div>
                        <div class="benefit-text">
                            <div class="subtitle-l margin-bottom-8">Personalized Workouts</div>
                            <div class="text-size-small text-color-grey-c">Take the Guess Work Out of Your Training.
                                JuggernautAI does all the work creating and adjusting your program, so you can just
                                train hard and see results.
                            </div>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon-wrap is-2"></div>
                        <div class="benefit-text">
                            <div class="subtitle-l margin-bottom-8">Variety and Flexibility</div>
                            <div class="text-size-small text-color-grey-c">High Value Training-The JuggernautAI App
                                delivers the detailed coaching you'd expect from a 1 on 1 coach but for a fraction of
                                the price.
                            </div>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon-wrap is-3"></div>
                        <div class="benefit-text">
                            <div class="subtitle-l margin-bottom-8">Tracks and Grows with You</div>
                            <div class="text-size-small text-color-grey-c">JuggernautAI utilizes hundreds of data points
                                about your training to optimize your program. The more training you do with it, the
                                better it gets.
                            </div>
                        </div>
                    </div>
                </div>
                <img
                    src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef8_benefits-img.webp"
                    loading="lazy"
                    sizes="(max-width: 479px) 95vw, (max-width: 767px) 90vw, (max-width: 991px) 68vw, 57vw"
                    srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef8_benefits-img-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef8_benefits-img-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef8_benefits-img-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef8_benefits-img-p-1600.webp 1600w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9ef8_benefits-img.webp 1654w"
                    alt="consultation" class="img-home-2"></div>
        </div>
    </section>
    <section class="section">
        <div class="container is-review">
            <div class="left-col is-review"><h3 class="heading-h3 margin-bottom-16">What our customers say</h3>
                <div class="text-size-medium text-color-grey-c">Their experiences and satisfaction serve as a testament
                    to the quality and effectiveness of our app in helping powerlifters achieve their goals
                </div>
                <div class="users-review-wrap">
                    <div data-name="user-1" class="user-item active">
                        <div class="user-avatar-wrap"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f4b_user-avatar1.png"
                                loading="lazy" alt="" class="user-avatar"></div>
                        <div class="subtitle-m user-name">Aaron Madriaga</div>
                    </div>
                    <div data-name="user-1" class="video-wrap active"><img
                            src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp"
                            loading="lazy"
                            sizes="(max-width: 479px) 95vw, (max-width: 767px) 90vw, (max-width: 991px) 48vw, 45vw"
                            srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp 1232w"
                            alt="gradient background" class="testimonials-back">
                        <div class="video-review">
                            <div style="padding-top:56.17021276595745%" class="video-in w-video w-embed">
                                <iframe class="embedly-embed"
                                        src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FVoKGNHx-9A0&amp;display_name=YouTube&amp;url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DVoKGNHx-9A0&amp;key=96f1f04c5f4143bcb0f2e68c87d65feb&amp;type=text%2Fhtml&amp;schema=youtube"
                                        scrolling="no" title="YouTube embed" frameborder="0"
                                        allow="autoplay; fullscreen; encrypted-media; picture-in-picture;"
                                        allowfullscreen="true"></iframe>
                            </div>
                        </div>
                    </div>
                    <div data-name="user-3" class="user-item">
                        <div class="user-avatar-wrap"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f49_user-avatar2.png"
                                loading="lazy" alt="" class="user-avatar"></div>
                        <div class="subtitle-m user-name">Amanda LaCass</div>
                    </div>
                    <div data-name="user-3" class="video-wrap"><img
                            src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp"
                            loading="lazy" sizes="100vw"
                            srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp 1232w"
                            alt="gradient background" class="testimonials-back">
                        <div class="video-review">
                            <div style="padding-top:56.17021276595745%" class="video-in w-video w-embed">
                                <iframe class="embedly-embed"
                                        src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2F8mwQBfLpw5Q%3Ffeature%3Doembed&amp;display_name=YouTube&amp;url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D8mwQBfLpw5Q&amp;image=https%3A%2F%2Fi.ytimg.com%2Fvi%2F8mwQBfLpw5Q%2Fhqdefault.jpg&amp;key=96f1f04c5f4143bcb0f2e68c87d65feb&amp;type=text%2Fhtml&amp;schema=youtube"
                                        scrolling="no" allowfullscreen="" title="Amanda LaCass Testimonial"></iframe>
                            </div>
                        </div>
                    </div>
                    <div data-name="user-2" class="user-item">
                        <div class="user-avatar-wrap"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f4a_user-avatar3.png"
                                loading="lazy" alt="" class="user-avatar"></div>
                        <div class="subtitle-m user-name">Kacie Cole</div>
                    </div>
                    <div data-name="user-2" class="video-wrap"><img
                            src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp"
                            loading="lazy" sizes="100vw"
                            srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp 1232w"
                            alt="gradient background" class="testimonials-back">
                        <div class="video-review">
                            <div style="padding-top:56.17021276595745%" class="video-in w-video w-embed">
                                <iframe class="embedly-embed"
                                        src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2F1lc6UWGJ3Oo%3Ffeature%3Doembed&amp;display_name=YouTube&amp;url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D1lc6UWGJ3Oo&amp;image=https%3A%2F%2Fi.ytimg.com%2Fvi%2F1lc6UWGJ3Oo%2Fhqdefault.jpg&amp;key=96f1f04c5f4143bcb0f2e68c87d65feb&amp;type=text%2Fhtml&amp;schema=youtube"
                                        scrolling="no" allowfullscreen="" title="Kacie Cole Testimonial"></iframe>
                            </div>
                        </div>
                    </div>
                    <div data-name="user-4" class="user-item">
                        <div class="user-avatar-wrap"><img
                                src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f4c_user-avatar4.png"
                                loading="lazy" alt="" class="user-avatar"></div>
                        <div class="subtitle-m user-name">Kristin Estes</div>
                    </div>
                    <div data-name="user-4" class="video-wrap"><img
                            src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp"
                            loading="lazy" sizes="100vw"
                            srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-500.webp 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-800.webp 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%25202-p-1080.webp 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/653a0fc479ec415433fc9f2e_testimonials-back%202.webp 1232w"
                            alt="gradient background" class="testimonials-back">
                        <div class="video-review">
                            <div style="padding-top:56.17021276595745%" class="video-in w-video w-embed">
                                <iframe class="embedly-embed"
                                        src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FX_0DNykIgkc%3Ffeature%3Doembed&amp;display_name=YouTube&amp;url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DX_0DNykIgkc&amp;image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FX_0DNykIgkc%2Fhqdefault.jpg&amp;key=96f1f04c5f4143bcb0f2e68c87d65feb&amp;type=text%2Fhtml&amp;schema=youtube"
                                        scrolling="no" allowfullscreen="" title="Kristin Estes Testimonial"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="heading-top margin-bottom-48"><h3 class="heading-h3">Read our latest articles</h3><a
                    href="/blog" class="button is-transparent is-wide is-descktop w-button">Go To Blog</a></div>
            <div class="articles-wrap">
                <div class="big-card-post w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><a href="/blog/juggernautai-v2-0-is-out-now"
                                                                   class="highlighted-post is-home w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616.png"
                                    loading="lazy" alt=""
                                    sizes="(max-width: 479px) 87vw, (max-width: 767px) 85vw, (max-width: 991px) 40vw, 42vw"
                                    srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616-p-500.png 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616-p-800.png 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616-p-1080.png 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616.png 1166w"
                                    class="image-2 is-home">
                                <div class="post-content">
                                    <div class="post-category margin-bottom-16">Training</div>
                                    <h4 class="heading-h4 is-post-name margin-bottom-16">JuggernautAI v2.0 is out
                                        now</h4>
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">One of our biggest
                                        updates it out now
                                    </div>
                                </div>
                                <div class="mask"></div>
                            </a></div>
                        <div role="listitem" class="w-dyn-item"><a
                                href="/blog/5-tips-to-get-the-most-out-of-the-juggernautai-app"
                                class="highlighted-post is-home w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/64e33a27e3b32814eb204972/64e33e016227f3a62b98f0dc_article-preview-1.webp"
                                    loading="lazy" alt="" class="image-2 is-home">
                                <div class="post-content">
                                    <div class="post-category margin-bottom-16">Powerlifting</div>
                                    <h4 class="heading-h4 is-post-name margin-bottom-16">5 Tips To Get The Most Out of
                                        the JuggernautAI App</h4>
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">The JuggernautAI App
                                        is an amazing piece of technology, but it isn’t a mind reader. The app is only
                                        as effective as the information you give it
                                    </div>
                                </div>
                                <div class="mask"></div>
                            </a></div>
                    </div>
                </div>
                <div class="two-posts-wrap w-dyn-list">
                    <div role="list" class="two-posts w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><a href="/blog/juggernautai-v2-0-is-out-now"
                                                                   class="post-card is-home w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616.png"
                                    loading="lazy" alt="JuggernautAI v2.0 is out now"
                                    sizes="(max-width: 479px) 95vw, (max-width: 767px) 90vw, (max-width: 991px) 20vw, 17vw"
                                    srcset="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616-p-500.png 500w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616-p-800.png 800w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616-p-1080.png 1080w, https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/66c61ccca5052a6a5bbde504_1166x616.png 1166w"
                                    class="post-cover is-home">
                                <div class="post-content">
                                    <div class="post-category margin-bottom-16">Training</div>
                                    <div class="subtitle-l is-post-name">JuggernautAI v2.0 is out now</div>
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">One of our biggest
                                        updates it out now
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="w-dyn-item"><a
                                href="/blog/scientific-principles-of-strength-training"
                                class="post-card is-home w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/653a0fc479ec415433fc9eb2_article-preview-3.webp"
                                    loading="lazy" alt="Scientific Principles of Strength Training"
                                    class="post-cover is-home">
                                <div class="post-content">
                                    <div class="post-category margin-bottom-16">Training</div>
                                    <div class="subtitle-l is-post-name">Scientific Principles of Strength Training
                                    </div>
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">Understanding the
                                        principles upon which effective Powerlifting Programming is built is critical to
                                        being able to create effective strategies to help athletes improve their
                                        strength. To help you achieve this goal, we have put our most popular video
                                        series Scientific Principles of Strength Training all in 1 place for you, watch
                                        and learn.
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="w-dyn-item"><a href="/blog/optimizing-your-warmups"
                                                                   class="post-card is-home w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9f/653a0fc479ec415433fc9eaa_article-preview-11.webp"
                                    loading="lazy" alt="Optimizing Your Warmups" class="post-cover is-home">
                                <div class="post-content">
                                    <div class="post-category margin-bottom-16">Powerlifting</div>
                                    <div class="subtitle-l is-post-name">Optimizing Your Warmups</div>
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">When it comes to
                                        optimizing your training sessions, nothing quite beats a well-structured warm-up
                                        routine. However, not all of us are instinctively aware of how to warm up
                                        effectively without causing premature fatigue, as well as helping us hit our
                                        target weights for the day. That’s where JuggernautAI’s new Guided Warmups
                                        feature steps in, offering an intelligent solution to this common training
                                        challenge.
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
            <a href="/blog" class="button is-transparent is-wide is-mob w-button">Go To Blog</a></div>
    </section>
    <section class="section">
        <div class="container is-faq">
            <div class="left-col is-faq"><h3 class="heading-h3 margin-bottom-16">Frequently asked <br>questions</h3>
                <div class="text-size-medium text-color-grey-c">Using a workout app can provide you with numerous
                    benefits to enhance your fitness journey
                </div>
            </div>
            <div class="faq-wrap w-dyn-list">
                <div role="list" class="w-dyn-items">
                    <div role="listitem" class="collection-item-3 w-dyn-item">
                        <div class="item-wrap opened">
                            <div class="item-top">
                                <div class="subtitle-l">Is JuggernautAI for beginner or advanced lifters?</div>
                                <div class="plus-icon">
                                    <div class="minus-line"></div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="answer-wrap">
                                <div class="text-size-small text-color-grey-c is-answer w-richtext"><p>JuggernautAI is
                                        suitable for lifters of all levels and types. We have seen huge success from
                                        people totally new to powerlifting to advanced athletes who deadlift over 820lb.
                                        We do recommend that you have at least performed squats, deadlift and bench
                                        press before.</p></div>
                            </div>
                        </div>
                    </div>
                    <div role="listitem" class="collection-item-3 w-dyn-item">
                        <div class="item-wrap opened">
                            <div class="item-top">
                                <div class="subtitle-l">How do I get started?</div>
                                <div class="plus-icon">
                                    <div class="minus-line"></div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="answer-wrap">
                                <div class="text-size-small text-color-grey-c is-answer w-richtext"><p>Simply create
                                        your account <a href="https://my.juggernautai.app/register">here</a> and then
                                        download the app from the app store or google play store.</p></div>
                            </div>
                        </div>
                    </div>
                    <div role="listitem" class="collection-item-3 w-dyn-item">
                        <div class="item-wrap opened">
                            <div class="item-top">
                                <div class="subtitle-l">How many days per week is the training?</div>
                                <div class="plus-icon">
                                    <div class="minus-line"></div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="answer-wrap">
                                <div class="text-size-small text-color-grey-c is-answer w-richtext"><p>Yes, the system
                                        can handle any length of training blocks (from 4+ weeks) to specifically prepare
                                        you for your competition date. Part of this process is the system finding the
                                        right mix of Hypertrophy, Strength and Peaking phases for your needs and time
                                        frame.<br></p>
                                    <p><br></p></div>
                            </div>
                        </div>
                    </div>
                    <div role="listitem" class="collection-item-3 w-dyn-item">
                        <div class="item-wrap opened">
                            <div class="item-top">
                                <div class="subtitle-l">Can this prepare you for a specific meet date?</div>
                                <div class="plus-icon">
                                    <div class="minus-line"></div>
                                    <div class="vertical-line"></div>
                                </div>
                            </div>
                            <div class="answer-wrap">
                                <div class="text-size-small text-color-grey-c is-answer w-richtext"><p>Yes, the system
                                        can handle any length of training blocks (from 4+ weeks) to specifically prepare
                                        you for your competition date. Part of this process is the system finding the
                                        right mix of Hypertrophy, Strength and Peaking phases for your needs and time
                                        frame.<br></p>
                                    <p><br></p>
                                    <p></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{asset('asset/js/lib/swiper/how-it-work.js')}}"></script>
@endpush

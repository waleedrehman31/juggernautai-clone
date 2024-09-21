@extends('frontend.layout.index')

@section('content')
    <section class="section mod--hero is-about">
        <div class="container pricing-hero"><h1 class="heading-h1">Pricing plans</h1>
            <div class="right-col is-pricing">
                <div class="text-size-medium text-color-grey-c margin-bottom-32">We believe in providing accessible
                    and affordable options for everyone, from beginners to seasoned powerlifters
                </div>
                <div class="rating-wrap"><img
                        src="{{asset('asset/images/svg/loading 01.svg')}}"
                        loading="lazy" alt="icon loading">
                    <div class="text-size-regular is-rating"><span
                            class="subtitle-m text-color-bluelight">4.9</span> AppStore &amp; Google Play Rating
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="choose-plan" class="section">
        <div class="container">
            <div class="coupon-info-wrapper">
                <div class="coupon-info"><img
                        src="{{asset('asset/images/svg/icon-close.svg')}}"
                        loading="lazy" data-w-id="db0c2fd6-209e-cee0-3974-533e06479ccc" alt="" class="icon-close">
                    <div class="popup-tittle"><h3 class="heading-h3 text-align-center">Enter coupon code</h3>
                        <p class="text-size-regular text-align-center text-color-grey-c is-popup">Enter your coupon
                            code at checkout form but if you use it, then the trial period will not be available for
                            you.</p></div>
                    <div class="popup-input">
                        <div class="form-block w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="get"
                                  class="form-2" data-wf-page-id="653a0fc479ec415433fc9e98"
                                  data-wf-element-id="db0c2fd6-209e-cee0-3974-533e06479cd4" aria-label="Email Form">
                                <input class="form-input is-popup w-input" maxlength="256" name="name"
                                       data-name="Name" placeholder="Your code" type="text" id="couponCode"></form>
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
                        <li class="plan-item-list disabled">30 min 1 on 1 consultation with Juggernaut Head Coach,
                            Chad Wesley Smith ($150 value)
                        </li>
                        <li class="plan-item-list disabled">6 free online seminars ($1800 value)</li>
                        <li class="plan-item-list disabled">Squat, Bench and Deadlift Manuals e-books ($81 value)
                        </li>
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
                        <li class="plan-item-list highlighted">30 min 1 on 1 consultation with Juggernaut Head
                            Coach, Chad Wesley Smith ($150 value)
                        </li>
                        <li class="plan-item-list highlighted">6 free online seminars ($1800 value)</li>
                        <li class="plan-item-list highlighted">Squat, Bench and Deadlift Manuals e-books ($81
                            value)
                        </li>
                    </ul>
                    <a href="https://my.juggernautai.app/register?product=yearly" class="button w-button">Start Your
                        Free Trial</a>
                    <div class="recomend-block">recommended</div>
                </div>
            </div>
            <div data-swiper="plans" class="swiper mod--plans swiper-initialized swiper-horizontal">
                <div class="swiper-wrapper is-plans" id="swiper-wrapper-b3b3108792ba4c106a" aria-live="polite"
                     style="transition-duration: 0ms; transition-delay: 0ms;">
                    <div class="swiper-slide mod--plans">
                        <div class="plan-wrap"><h1 class="subtitle-s">Monthly</h1>
                            <div class="plan-price is-2">$34<span class="plan-price-grey"> 99</span></div>
                            <div class="text-size-regular text-color-grey-c margin-bottom-40 is-2">$2400+ value
                            </div>
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
                    <div class="swiper-slide mod--plans">
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
                                <li class="plan-item-list highlighted">30 min 1 on 1 consultation with Juggernaut
                                    Head Coach, Chad Wesley Smith ($150 value)
                                </li>
                                <li class="plan-item-list highlighted">6 free online seminars ($1800 value)</li>
                                <li class="plan-item-list highlighted">Squat, Bench and Deadlift Manuals e-books
                                    ($81 value)
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
                <div data-swiper="prev-plans" class="swiper-nav__arrow is-left" tabindex="0" role="button"
                     aria-label="Previous slide" aria-controls="swiper-wrapper-b3b3108792ba4c106a"
                     aria-disabled="false"></div>
                <div data-swiper="next-plans" class="swiper-nav__arrow is-right" tabindex="0" role="button"
                     aria-label="Next slide" aria-controls="swiper-wrapper-b3b3108792ba4c106a"
                     aria-disabled="false"></div>
            </div>
        </div>
    </section>
    <section id="choose-plan" class="section mod--pricing is-pracing"></section>
    <section class="section">
        <div class="container">
            <div class="heading-top is-pricing"><h2 class="heading-h3">What our customers say</h2>
                <div class="swiper-nav-2 is-pricing is-desktop">
                    <div data-swiper="prev-reviews" class="swiper-nav__arrow is-left swiper-button-disabled"
                         tabindex="-1" role="button" aria-label="Previous slide"
                         aria-controls="swiper-wrapper-d1a941d6ff10c1349" aria-disabled="true"></div>
                    <div data-swiper="next-reviews" class="swiper-nav__arrow is-right" tabindex="0" role="button"
                         aria-label="Next slide" aria-controls="swiper-wrapper-d1a941d6ff10c1349"
                         aria-disabled="false"></div>
                </div>
            </div>
            <div data-swiper="reviews"
                 class="swiper mod--reviews swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-d1a941d6ff10c1349" aria-live="polite">
                    <div class="swiper-slide mod--reviews is-pricing swiper-slide-active" role="group"
                         aria-label="1 / 4" style="width: 406px;">
                        <div class="swiper__slide-content is-review">
                            <div class="text-review">
                                <div class="subtitle-m margin-bottom-16">The greatest training program I’ve ever
                                    used
                                </div>
                                <div class="text-size-regular text-color-grey-c">JuggernautAI is the training
                                    program I wish I had through my entire powerlifting journey for this last
                                    decade. It is not only individualized for the person, but anyone of all ages,
                                    experience levels, genders, and more can use it for promised incredible results.
                                    It’s like a coach with you by your side the entire time without the heavy price.
                                    I have been using JuggernautAI for a little over 2 years and it has added pounds
                                    on pounds onto an already solid lift total.
                                </div>
                            </div>
                            <div class="user-item is-pricing">
                                <div class="subtitle-m user-name">Leroy H</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-pricing swiper-slide-next" role="group"
                         aria-label="2 / 4" style="width: 406px;">
                        <div class="swiper__slide-content is-review">
                            <div class="text-review">
                                <div class="subtitle-m margin-bottom-16">Great app. Great results. Great team behind
                                    it.
                                </div>
                                <div class="text-size-regular text-color-grey-c">I’ve been a user of Juggernaut AI
                                    for a going on my 3rd year. Since beginning the program 3 years ago, I’ve added
                                    pounds to all of my lifts, and have hit more PRs than I can think back to
                                    remember them all. I’ve competed in 4 competitions while using Juggernaut AI.
                                    Winning 4 1st place placings and 2 best overalls. I now plan to continue using
                                    Juggernaut AI as I plan to prep for my first National competition.
                                </div>
                            </div>
                            <div class="user-item is-pricing">
                                <div class="subtitle-m user-name">iOS User</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-pricing" role="group" aria-label="3 / 4"
                         style="width: 406px;">
                        <div class="swiper__slide-content is-review">
                            <div class="text-review">
                                <div class="subtitle-m margin-bottom-16">Top Notch</div>
                                <div class="text-size-regular text-color-grey-c">By far the best, most detailed in
                                    depth training app out. It’s also not just any training app as JTS pretty much
                                    leads the way in the strength and conditioning world. At $30 bucks a month it’s
                                    a steal. The interface is extremely user friendly. This app is a game changer!
                                </div>
                            </div>
                            <div class="user-item is-pricing">
                                <div class="subtitle-m user-name">Angela Gray</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mod--reviews is-pricing" role="group" aria-label="4 / 4"
                         style="width: 406px;">
                        <div class="swiper__slide-content is-review">
                            <div class="text-review">
                                <div class="subtitle-m margin-bottom-16">Become a better powerlifter #ChadBot</div>
                                <div class="text-size-regular text-color-grey-c">If you’re looking for personalized
                                    powerlifting programming this is it! You really won’t find anything better for
                                    even double (triple?) the cost. There may be generic templates out there that
                                    are cheaper but nothing as customized/personalized/
                                </div>
                            </div>
                            <div class="user-item is-pricing">
                                <div class="subtitle-m user-name">Leroy H</div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-nav-2 is-pricing is-mob">
                <div data-swiper="prev-reviews" class="swiper-nav__arrow is-left swiper-button-disabled"
                     tabindex="-1" role="button" aria-label="Previous slide"
                     aria-controls="swiper-wrapper-d1a941d6ff10c1349" aria-disabled="true"></div>
                <div data-swiper="next-reviews" class="swiper-nav__arrow is-right" tabindex="0" role="button"
                     aria-label="Next slide" aria-controls="swiper-wrapper-d1a941d6ff10c1349"
                     aria-disabled="false"></div>
            </div>
        </div>
    </section>
@endsection

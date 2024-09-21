@extends('frontend.layout.index')

@section('content')
    <section class="section mod--hero">
        <div class="highlighted-posts-wrap w-dyn-list">
            <div role="list" class="collection-list-3 w-dyn-items">
                <div role="listitem" class="posts-highlighted-item w-dyn-item"><a
                        href="/blog/juggernautai-v2-0-is-out-now" class="highlighted-post w-inline-block"><img
                            src="{{asset('asset/images/image/article/article-2/article-preview-2.png')}}"
                            loading="lazy" alt=""
                            sizes="(max-width: 767px) 100vw, (max-width: 991px) 492.03125px, 50vw"
                            srcset="{{asset('asset/images/image/article/article-2/article-preview-2-p-500.png')}} 500w, {{asset('asset/images/image/article/article-2/article-preview-2-p-800.png')}} 800w, {{asset('asset/images/image/article/article-2/article-preview-2-p-10800.png')}} 1080w, {{asset('asset/images/image/article/article-2/article-preview-2.png')}} 1166w"
                            class="image-2">
                        <div class="post-category margin-bottom-16">Training</div>
                        <h4 class="heading-h4 is-post-name">JuggernautAI v2.0 is out now</h4>
                        <div class="mask"></div>
                    </a></div>
                <div role="listitem" class="posts-highlighted-item w-dyn-item"><a
                        href="/blog/5-tips-to-get-the-most-out-of-the-juggernautai-app"
                        class="highlighted-post w-inline-block"><img
                            src="{{asset('asset/images/image/article/article-1/article-preview-1.webp')}}"
                            loading="lazy" alt="" class="image-2">
                        <div class="post-category margin-bottom-16">Powerlifting</div>
                        <h4 class="heading-h4 is-post-name">5 Tips To Get The Most Out of the JuggernautAI App</h4>
                        <div class="mask"></div>
                    </a></div>
                <div role="listitem" class="posts-highlighted-item w-dyn-item"><a
                        href="/blog/optimizing-your-warmups" class="highlighted-post w-inline-block"><img
                            src="{{asset('asset/images/image/article/article-11/article-preview-11.webp')}}"
                            loading="lazy" alt="" class="image-2">
                        <div class="post-category margin-bottom-16">Powerlifting</div>
                        <h4 class="heading-h4 is-post-name">Optimizing Your Warmups</h4>
                        <div class="mask"></div>
                    </a></div>
            </div>
        </div>
        <div class="highlighted-posts-wrap-mob">
            <div data-swiper="posts" class="swiper w-dyn-list swiper-initialized swiper-horizontal">
                <div role="list" class="swiper-wrapper w-dyn-items" id="swiper-wrapper-889135348dba335d"
                     aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms;">
                    <div role="listitem" class="swiper-slide mod--posts w-dyn-item"><a
                            href="/blog/juggernautai-v2-0-is-out-now" class="highlighted-post w-inline-block"><img
                                src="{{asset('asset/images/image/article/article-2/article-preview-2.png')}}"
                                loading="lazy" alt=""
                                sizes="(max-width: 767px) 100vw, (max-width: 991px) 492.03125px, 50vw"
                                srcset="{{asset('asset/images/image/article/article-2/article-preview-2-p-500.png')}} 500w, {{asset('asset/images/image/article/article-2/article-preview-2-p-800.png')}} 800w, {{asset('asset/images/image/article/article-2/article-preview-2-p-10800.png')}} 1080w, {{asset('asset/images/image/article/article-2/article-preview-2.png')}} 1166w"
                                class="image-2">
                            <div class="post-category margin-bottom-16">Training</div>
                            <h4 class="heading-h4 is-post-name">JuggernautAI v2.0 is out now</h4>
                            <div class="mask"></div>
                        </a></div>
                    <div role="listitem" class="swiper-slide mod--posts w-dyn-item"><a
                            href="/blog/5-tips-to-get-the-most-out-of-the-juggernautai-app"
                            class="highlighted-post w-inline-block"><img
                                src="{{asset('asset/images/image/article/article-1/article-preview-1.webp')}}"
                                loading="lazy" alt="" class="image-2">
                            <div class="post-category margin-bottom-16">Powerlifting</div>
                            <h4 class="heading-h4 is-post-name">5 Tips To Get The Most Out of the JuggernautAI
                                App</h4>
                            <div class="mask"></div>
                        </a>
                    </div>
                    <div role="listitem" class="swiper-slide mod--posts w-dyn-item"><a
                            href="/blog/optimizing-your-warmups" class="highlighted-post w-inline-block"><img
                                src="{{asset('asset/images/image/article/article-11/article-preview-11.webp')}}"
                                loading="lazy" alt="" class="image-2">
                            <div class="post-category margin-bottom-16">Powerlifting</div>
                            <h4 class="heading-h4 is-post-name">Optimizing Your Warmups</h4>
                            <div class="mask"></div>
                        </a></div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-nav is-posts">
                <div data-swiper="prev-posts" class="swiper-nav__arrow is-left" tabindex="0" role="button"
                     aria-label="Previous slide" aria-controls="swiper-wrapper-889135348dba335d"
                     aria-disabled="false"></div>
                <div data-swiper="next-posts" class="swiper-nav__arrow is-right" tabindex="0" role="button"
                     aria-label="Next slide" aria-controls="swiper-wrapper-889135348dba335d"
                     aria-disabled="false"></div>
            </div>
        </div>
    </section>
    <section id="posts" class="section is-posts">
        <div class="container">
            <div class="heading-top"><h3 class="heading-h3">Read our latest articles</h3></div>
            <div class="posts">
                <div class="collection-list-wrapper w-dyn-list">
                    <div fs-cmsload-pagesiblings="1" fs-cmsload-element="list" fs-cmsload-mode="pagination"
                         fs-cmsload-pageboundary="1" role="list" class="collection-list w-dyn-items">
                        <div role="listitem" class="collection-item w-dyn-item"><a
                                href="/blog/juggernautai-v2-0-is-out-now" class="post-card w-inline-block"><img
                                    src="{{asset('asset/images/image/article/article-2/article-preview-2.png')}}"
                                    loading="lazy" alt="JuggernautAI v2.0 is out now"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 26vw, 28vw"
                                    srcset="{{asset('asset/images/image/article/article-2/article-preview-2-p-500.png')}} 500w, {{asset('asset/images/image/article/article-2/article-preview-2-p-800.png')}} 800w, {{asset('asset/images/image/article/article-2/article-preview-2-p-1080.png')}} 1080w, {{asset('asset/images/image/article/article-2/article-preview-2.png')}} 1166w"
                                    class="post-cover">
                                <div class="post-top">
                                    <div class="post-category margin-bottom-16">Training</div>
                                    <div class="subtitle-l is-post-name">JuggernautAI v2.0 is out now</div>
                                </div>
                                <div class="post-bottom">
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">One of our
                                        biggest updates it out now
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="collection-item w-dyn-item"><a
                                href="/blog/pillars-of-deadlift-technique" class="post-card w-inline-block"><img
                                    src="{{asset('asset/images/image/article/deadlift/kate-deadlift-thumbnail.jpg')}}"
                                    loading="lazy" alt="The Pillars of Deadlift Technique"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 26vw, 28vw"
                                    srcset="{{asset('asset/images/image/article/deadlift/kate_deadlift_thumbnail-p-500.jpg')}} 500w, {{asset('asset/images/image/article/deadlift/kate_deadlift_thumbnail-p-800.jpg')}} 800w, {{asset('asset/images/image/article/deadlift/kate_deadlift_thumbnail-p-1080.jpg')}} 1080w, {{asset('asset/images/image/article/deadlift/kate-deadlift-thumbnail.jpg')}} 1166w"
                                    class="post-cover">
                                <div class="post-top">
                                    <div class="post-category margin-bottom-16">Powerlifting</div>
                                    <div class="subtitle-l is-post-name">The Pillars of Deadlift Technique</div>
                                </div>
                                <div class="post-bottom">
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">The Deadlift is
                                        a foundational movement for strength and power. Done well, it improves total
                                        body strength, stability and health. Done poorly, it can become injurious.
                                        Learning how to deadlift properly is critical to maximizing the amount of
                                        weight you can lift and creating a foundation for long term success. We
                                        created of Pillars of Deadlift Technique as a step-by-step approach to help
                                        you understand how to deadlift and develop your technique from the ground
                                        up. Watch, learn and lift!
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="collection-item w-dyn-item"><a
                                href="/blog/pillars-of-bench-technique" class="post-card w-inline-block"><img
                                    src="{{asset('asset/images/image/article/bench/bench._thumb.jpg')}}"
                                    loading="lazy" alt="The Pillars of Bench Technique"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 26vw, 28vw"
                                    srcset="{{asset('asset/images/image/article/bench/bench._thumb-p-500.jpg')}} 500w, {{asset('asset/images/image/article/bench/bench._thumb-p-800.jpg')}} 800w, {{asset('asset/images/image/article/bench/bench._thumb-p-1080.jpg')}} 1080w, {{asset('asset/images/image/article/bench/bench._thumb.jpg')}} 1166w"
                                    class="post-cover">
                                <div class="post-top">
                                    <div class="post-category margin-bottom-16">Powerlifting</div>
                                    <div class="subtitle-l is-post-name">The Pillars of Bench Technique</div>
                                </div>
                                <div class="post-bottom">
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">How much ya
                                        bench? This may be the most common question among bros the world over, so
                                        you better have a good answer. Our Pillars of Bench Technique series will
                                        help you refine your bench press technique to ensure you are moving maximum
                                        poundage.
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="collection-item w-dyn-item"><a
                                href="/blog/the-pillars-of-squat-technique" class="post-card w-inline-block"><img
                                    src="{{asset('asset/images/image/article/squat/Thumbnail_Squat_Pilla.jpg')}}"
                                    loading="lazy" alt="The Pillars of Squat Technique"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 26vw, 28vw"
                                    srcset="{{asset('asset/images/image/article/squat/Thumbnail_Squat_Pilla-p-500.jpg')}} 500w, {{asset('asset/images/image/article/squat/Thumbnail_Squat_Pilla-p-800.jpg')}} 800w, {{asset('asset/images/image/article/squat/Thumbnail_Squat_Pilla-p-1080.jpg')}} 1080w, {{asset('asset/images/image/article/squat/Thumbnail_Squat_Pilla.jpg')}} 1166w"
                                    class="post-cover">
                                <div class="post-top">
                                    <div class="post-category margin-bottom-16">Powerlifting</div>
                                    <div class="subtitle-l is-post-name">The Pillars of Squat Technique</div>
                                </div>
                                <div class="post-bottom">
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">Maximizing your
                                        squat technique is about creating a synergistic effort of the legs, hips and
                                        back to lift the largest weight possible.
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="collection-item w-dyn-item"><a
                                href="/blog/5-tips-to-get-the-most-out-of-the-juggernautai-app"
                                class="post-card w-inline-block"><img
                                    src="{{asset('asset/images/image/article/article-1/article-preview-1.webp')}}"
                                    loading="lazy" alt="5 Tips To Get The Most Out  of the JuggernautAI App"
                                    class="post-cover">
                                <div class="post-top">
                                    <div class="post-category margin-bottom-16">Powerlifting</div>
                                    <div class="subtitle-l is-post-name">5 Tips To Get The Most Out of the
                                        JuggernautAI App
                                    </div>
                                </div>
                                <div class="post-bottom">
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">The JuggernautAI
                                        App is an amazing piece of technology, but it isn’t a mind reader. The app
                                        is only as effective as the information you give it
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="collection-item w-dyn-item"><a
                                href="/blog/scientific-principles-of-strength-training"
                                class="post-card w-inline-block"><img
                                    src="{{asset('asset/images/image/article/article-3/article-preview-3.webp')}}"
                                    loading="lazy" alt="Scientific Principles of Strength Training"
                                    class="post-cover">
                                <div class="post-top">
                                    <div class="post-category margin-bottom-16">Training</div>
                                    <div class="subtitle-l is-post-name">Scientific Principles of Strength
                                        Training
                                    </div>
                                </div>
                                <div class="post-bottom">
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">Understanding
                                        the principles upon which effective Powerlifting Programming is built is
                                        critical to being able to create effective strategies to help athletes
                                        improve their strength. To help you achieve this goal, we have put our most
                                        popular video series Scientific Principles of Strength Training all in 1
                                        place for you, watch and learn.
                                    </div>
                                </div>
                            </a></div>
                        <div role="listitem" class="collection-item w-dyn-item"><a
                                href="/blog/optimizing-your-warmups" class="post-card w-inline-block"><img
                                    src="{{asset('asset/images/image/article/article-11/article-preview-11.webp')}}"
                                    loading="lazy" alt="Optimizing Your Warmups" class="post-cover">
                                <div class="post-top">
                                    <div class="post-category margin-bottom-16">Powerlifting</div>
                                    <div class="subtitle-l is-post-name">Optimizing Your Warmups</div>
                                </div>
                                <div class="post-bottom">
                                    <div class="text-size-tiny text-color-grey-c text-style-2lines">When it comes to
                                        optimizing your training sessions, nothing quite beats a well-structured
                                        warm-up routine. However, not all of us are instinctively aware of how to
                                        warm up effectively without causing premature fatigue, as well as helping us
                                        hit our target weights for the day. That’s where JuggernautAI’s new Guided
                                        Warmups feature steps in, offering an intelligent solution to this common
                                        training challenge.
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div role="navigation" aria-label="List"
                         class="w-pagination-wrapper posts-pagination pagination">
                        <div class="pagination-pages-box"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-cta">
            <div class="content-block"><h1 class="heading-h3 margin-bottom-16">Ready to <span
                        class="text-color-bluelight">dive in?</span><br>Start your free trial today</h1>
                <div class="text-size-small text-color-grey-c margin-bottom-16">JuggernautAI is suitable for lifters
                    of all levels and types. We have seen huge success from people totally new to powerlifting to
                    advanced athletes looking for World Records.
                </div>
                <a href="https://my.juggernautai.app/register/" class="button is-cta w-button">Get Started</a></div>
            <img
                src="{{asset('asset/images/image/blog_phone/phone-2/phone-blog-2.webp')}}"
                loading="lazy"
                sizes="(max-width: 479px) 80vw, (max-width: 767px) 256px, (max-width: 991px) 19vw, 16vw"
                srcset="{{asset('asset/images/image/blog_phone/phone-2/phone-blog-2-p-500.webp')}} 500w, {{asset('asset/images/image/blog_phone/phone-2/phone-blog-2.webp')}} 607w"
                alt="app statistic on phome" class="cta-img-2">
            <img
                src="{{asset('asset/images/image/blog_phone/phone-1/phone-blog-1.webp')}}"
                loading="lazy"
                sizes="(max-width: 479px) 75vw, (max-width: 767px) 224px, (max-width: 991px) 17vw, 14vw"
                srcset="{{asset('asset/images/image/blog_phone/phone-1/phone-blog-1-p-500.webp')}} 500w, {{asset('asset/images/image/blog_phone/phone-1/phone-blog-1.webp')}} 513w"
                alt="app on phone screen" class="cta-img-1">
        </div>
    </section>
@endsection

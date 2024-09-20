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

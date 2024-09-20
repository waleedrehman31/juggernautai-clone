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

    <link href="{{asset('asset/css/lib/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/css/lib/remodal/remodal.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/css/lib/remodal/remodal-default-theme.min.css')}}" rel="stylesheet" type="text/css">
    <style>
        /* Hide webflow badge */

        /* Scroll */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-thumb { background: #ccc;}
        ::-webkit-scrollbar-track { background: #fff;}
    </style>
    @stack('css')
</head>
<body>
<div class="body">
    <div class="page-wrapper is-home">
        <div class="global-styles w-embed">
            <link rel="stylesheet" href="{{asset('asset/css/animation.css')}}">
            </div>
        <div class="header">
            @include('frontend.layout.partials.navbar')
        </div>
        <main class="main">
            @yield('content')
        </main>
        @include('frontend.layout.partials.footer')

    </div>
</div>
<script src="{{asset('asset/js/lib/jquery/jquery.min.js')}}" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>{{--<script src="https://cdn.prod.website-files.com/653a0fc479ec415433fc9e9a/js/webflow.43f390dd2.js" type="text/javascript"></script>--}}
{{--<script>--}}
{{--    (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/o1s2q3y6';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();--}}
{{--</script>--}}
<script src="{{asset('asset/js/lib/swiper/swiper.min.js')}}"></script>
<script src="{{asset('asset/js/lib/remodal/remodal.min.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/js/lib/smoothscroll/smoothscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/js/lib/smoothscroll/index.js')}}"></script>
<script src="{{asset('asset/js/coupon.js')}}"></script>

@stack('js')

</body>
</html>

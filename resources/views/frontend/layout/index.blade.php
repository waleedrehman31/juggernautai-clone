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
<script src="{{asset('asset/js/lib/jquery/jquery.min.js')}}" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{asset('asset/js/lib/webflow/webflow.js')}}"></script>
<script>
    window.intercomSettings = {
        api_base: "https://api-iam.intercom.io",
        app_id: "o1s2q3y6"
    };
</script>
<script>
    (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/o1s2q3y6';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<script src="{{asset('asset/js/lib/swiper/swiper.min.js')}}"></script>
<script src="{{asset('asset/js/lib/remodal/remodal.min.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/js/lib/smoothscroll/smoothscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/js/lib/smoothscroll/index.js')}}"></script>

@stack('js')

<iframe id="intercom-frame" style="position: absolute !important; opacity: 0 !important; width: 1px !important; height: 1px !important; top: 0 !important; left: 0 !important; border: none !important; display: block !important; z-index: -1 !important; pointer-events: none;" aria-hidden="true" tabindex="-1" title="Intercom"></iframe>
<div class="intercom-lightweight-app">
    <div class="intercom-lightweight-app-launcher intercom-launcher" role="button" tabindex="0" aria-label="Open Intercom Messenger" aria-live="polite"><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 32"><path d="M28 32s-4.714-1.855-8.527-3.34H3.437C1.54 28.66 0 27.026 0 25.013V3.644C0 1.633 1.54 0 3.437 0h21.125c1.898 0 3.437 1.632 3.437 3.645v18.404H28V32zm-4.139-11.982a.88.88 0 00-1.292-.105c-.03.026-3.015 2.681-8.57 2.681-5.486 0-8.517-2.636-8.571-2.684a.88.88 0 00-1.29.107 1.01 1.01 0 00-.219.708.992.992 0 00.318.664c.142.128 3.537 3.15 9.762 3.15 6.226 0 9.621-3.022 9.763-3.15a.992.992 0 00.317-.664 1.01 1.01 0 00-.218-.707z"></path></svg></div><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-minimize"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.601 8.39897C18.269 8.06702 17.7309 8.06702 17.3989 8.39897L12 13.7979L6.60099 8.39897C6.26904 8.06702 5.73086 8.06702 5.39891 8.39897C5.06696 8.73091 5.06696 9.2691 5.39891 9.60105L11.3989 15.601C11.7309 15.933 12.269 15.933 12.601 15.601L18.601 9.60105C18.9329 9.2691 18.9329 8.73091 18.601 8.39897Z" fill="white"></path>
            </svg>
        </div></div><style id="intercom-lightweight-app-style" type="text/css">
        @keyframes intercom-lightweight-app-launcher {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes intercom-lightweight-app-gradient {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes intercom-lightweight-app-messenger {
            0% {
                opacity: 0;
                transform: scale(0);
            }
            40% {
                opacity: 1;
            }
            100% {
                transform: scale(1);
            }
        }

        .intercom-lightweight-app {
            position: fixed;
            z-index: 2147483001;
            width: 0;
            height: 0;
            font-family: intercom-font, "Helvetica Neue", "Apple Color Emoji", Helvetica, Arial, sans-serif;
        }

        .intercom-lightweight-app-gradient {
            position: fixed;
            z-index: 2147483002;
            width: 500px;
            height: 500px;
            bottom: 0;
            right: 0;
            pointer-events: none;
            background: radial-gradient(
                ellipse at bottom right,
                rgba(29, 39, 54, 0.16) 0%,
                rgba(29, 39, 54, 0) 72%);
            animation: intercom-lightweight-app-gradient 200ms ease-out;
        }

        .intercom-lightweight-app-launcher {
            position: fixed;
            z-index: 2147483003;
            padding: 0 !important;
            margin: 0 !important;
            border: none;
            bottom: 20px;
            right: 20px;
            max-width: 48px;
            width: 48px;
            max-height: 48px;
            height: 48px;
            border-radius: 50%;
            background: #0055B8;
            cursor: pointer;
            box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.06), 0 2px 32px 0 rgba(0, 0, 0, 0.16);
            transition: transform 167ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
            box-sizing: content-box;
        }


        .intercom-lightweight-app-launcher:hover {
            transition: transform 250ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
            transform: scale(1.1)
        }

        .intercom-lightweight-app-launcher:active {
            transform: scale(0.85);
            transition: transform 134ms cubic-bezier(0.45, 0, 0.2, 1);
        }


        .intercom-lightweight-app-launcher:focus {
            outline: none;


        }

        .intercom-lightweight-app-launcher-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 48px;
            height: 48px;
            transition: transform 100ms linear, opacity 80ms linear;
        }

        .intercom-lightweight-app-launcher-icon-open {

            opacity: 1;
            transform: rotate(0deg) scale(1);

        }

        .intercom-lightweight-app-launcher-icon-open svg {
            width: 24px;
            height: 24px;
        }

        .intercom-lightweight-app-launcher-icon-open svg path {
            fill: rgb(255, 255, 255);
        }

        .intercom-lightweight-app-launcher-icon-self-serve {

            opacity: 1;
            transform: rotate(0deg) scale(1);

        }

        .intercom-lightweight-app-launcher-icon-self-serve svg {
            height: 44px;
        }

        .intercom-lightweight-app-launcher-icon-self-serve svg path {
            fill: rgb(255, 255, 255);
        }

        .intercom-lightweight-app-launcher-custom-icon-open {
            max-height: 24px;
            max-width: 24px;


            opacity: 1;
            transform: rotate(0deg) scale(1);

        }

        .intercom-lightweight-app-launcher-icon-minimize {

            opacity: 0;
            transform: rotate(-60deg) scale(0);

        }

        .intercom-lightweight-app-launcher-icon-minimize svg path {
            fill: rgb(255, 255, 255);
        }

        .intercom-lightweight-app-messenger {
            position: fixed;
            z-index: 2147483003;
            overflow: hidden;
            background-color: white;
            animation: intercom-lightweight-app-messenger 250ms cubic-bezier(0, 1, 1, 1);
            transform-origin: bottom right;


            width: 400px;
            height: calc(100% - 104px);
            max-height: 704px;
            min-height: 250px;
            right: 20px;
            bottom: 84px;
            box-shadow: 0 5px 40px rgba(0,0,0,0.16);


            border-radius: 16px;
        }

        .intercom-lightweight-app-messenger-header {
            height: 64px;
            border-bottom: none;
            background: #2392ec


        }

        .intercom-lightweight-app-messenger-footer{
            position:absolute;
            bottom:0;
            width: 100%;
            height: 80px;
            background: #fff;
            font-size: 14px;
            line-height: 21px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.05);

        }

        @media print {
            .intercom-lightweight-app {
                display: none;
            }
        }
    </style></div>

</body>
</html>

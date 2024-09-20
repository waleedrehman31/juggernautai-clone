@extends('frontend.layout.index')

@push('css')
    <link rel="stylesheet" href="{{asset('asset/css/how-it-work.css')}}">
    <style>
        /* Style modal */
        .remodal-overlay {
            background: rgba(34, 36, 38, 0.9);
        }

        .remodal {
            transform: scale(1) !important;
        }

        .remodal-wrapper {
            padding: 0px;
            overflow: hidden;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
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
    @include('frontend.home.hero')
    @include('frontend.home.who-we-are')
    @include('frontend.home.how-it-work')
    @include('frontend.home.start-seeing-results')
    @include('frontend.home.much-more')
    @include('frontend.home.choose-plan')
    @include('frontend.home.our-benefit')
    @include('frontend.home.what-customer-say')
    @include('frontend.home.latest-article')
    @include('frontend.home.frequently-asked-questions')
@endsection

@push('js')
    <script src="{{asset('asset/js/lib/swiper/how-it-work.js')}}"></script>
@endpush

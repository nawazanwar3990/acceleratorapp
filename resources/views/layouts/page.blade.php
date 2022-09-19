<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page->page_title }}</title>
    <meta name="description" content="{{ $page->page_description }}">
    <meta name="keywords" content="{{ $page->page_keyword }}">
    <link rel="stylesheet" href="{{ asset('css/website.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
</head>
<body class="bg-white">
<x-web-header :cPage="$page"></x-web-header>
<section class="py-5 mt-5 about-us" style="background-image:url({{ $page->banner_image }})">
    <div class="container text-center py-5">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">
                <div class="last-paragraph-no-margin txt_white">
                    <div class="row justify-content-center">
                        <div class="col-5"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="green_hr"></div>
                        <div class="col-5"></div>
                        <div><h1>{{ $page->page_title }}</h1></div>
                        <div class="col-5"></div>
                        <div class="col-5"><img src="{{ asset('uploads/line-D1.png') }}" alt="" class="red_hr"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<main class="bg-white">
    {{$content}}
</main>
<x-web-footer :cPage="$page"></x-web-footer>
<script src="{{ asset('js/website.min.js') }}"></script>
<x-session-messages></x-session-messages>
</body>
</html>

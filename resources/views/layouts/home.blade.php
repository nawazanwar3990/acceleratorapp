<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page->page_title }}</title>
    <meta name="description" content="{{ $page->page_description }}">
    <meta name="keywords" content="{{ $page->page_keyword }}">
    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('assets/css/green.css') }}">
    <link rel="stylesheet" href="{{ asset('css/website.min.css') }}">
</head>
<body class="is-theme-green">
<div class="pageloader"></div>
<div class="hero type-1 parallax is-cover is-relative is-fullheight"
     data-background="{{ asset($page->banner_image) }}"
     data-color="#545375"
     data-color-opacity="0.6"
     data-demo-background="{{ asset($page->banner_image) }}"
     data-page-theme="green"
     style="background-image: url({{ asset($page->banner_image) }}); background-attachment: fixed; background-position: 50% 0;">
    <div class="parallax-overlay" style="background-color: rgb(84, 83, 117); opacity: 0.6;"></div>
    <img class="hero-shape-commerce" src="assets/img/graphics/legacy/cut-circle.svg" alt="">
    <x-web-header :cPage="$page"></x-web-header>
    <div id="main-hero" class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="
                column
                is-6 is-offset-6 is-centered-tablet-portrait is-centered-mobile
              ">
                    <h1 class="parallax-hero-title is-smaller light-text">
                        {{ $page->page_title }}
                    </h1>
                    <h2 class="subtitle is-5 light-text mt-4 no-padding">
                        {{ $page->page_description }}
                    </h2>
                    <br>
                    <p class="buttons is-flex-center-mobile">
                        <a href="#start" class="
                    button button-cta
                    btn-align
                    primary-btn
                    z-index-2
                    scroll-link
                  ">
                            Get Started
                        </a>
                        <a href="#" class="button button-cta btn-align z-index-2">
                            Learn More
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
{{$content}}
<x-web-footer :cPage="$page"></x-web-footer>
<div id="backtotop"><a href="#"></a></div>
{{--<x-style-switcher></x-style-switcher>--}}
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('js/website.min.js') }}"></script>
<x-session-messages></x-session-messages>
</body>
</html>

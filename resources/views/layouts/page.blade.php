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
<div class="hero is-relative is-theme-primary">
    <x-web-header :cPage="$page"></x-web-header>
    <div id="main-hero" class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="
                column
                is-6 is-offset-3
                has-text-centered
                is-subheader-caption
                has-search
              ">
                    <h1 class="title is-2">{{ $page->name }}</h1>
                    <h2 class="subtitle text-white">{{ $page->page_description }}</h2>
                    <div class="search-area">
                        <div class="control has-icons-left">
                            <input class="input is-large" type="text" placeholder="Search...">
                            <span class="icon is-small is-left">
                    <i class="sl sl-icon-magnifier"></i>
                  </span>
                            <div class="search-button">
                                <button class="button primary-btn is-bold">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="bg-white">
    {{$content}}
</main>
<x-web-footer :cPage="$page"></x-web-footer>
<div id="backtotop"><a href="#"></a></div>
{{--<x-style-switcher></x-style-switcher>--}}
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('js/website.min.js') }}"></script>
<x-session-messages></x-session-messages>
</body>
</html>

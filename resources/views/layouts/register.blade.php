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
            <div class="columns is-vcentered is-header-caption">
                <div class="column is-6 is-offset-3 has-text-centered">
                    <h1 class="title main-title">
                        @if($type=='pending_subscription')
                            Pending
                        @elseif($type=='expire_subscription')
                            Expire
                        @else
                            {{ trans('general.register') }} {{ \App\Enum\AccessTypeEnum::getTranslationKeyBy($type) }}
                        @endif
                    </h1>
                    <h2 class="subtitle is-5 light-text">
                        @if(in_array($type,[\App\Enum\AccessTypeEnum::BUSINESS_ACCELERATOR,\App\Enum\AccessTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL]))
                            @include('website.ba.components.step-heading')
                        @elseif(in_array($type,[\App\Enum\AccessTypeEnum::SERVICE_PROVIDER_COMPANY,\App\Enum\AccessTypeEnum::FREELANCER]))
                            @include('website.freelancers.components.step-heading')
                        @elseif($type == \App\Enum\AccessTypeEnum::MENTOR)
                            @include('website.mentor.components.step-heading')
                        @elseif($type=='pending_subscription')
                            Subscription
                        @elseif($type=='expire_subscription')
                            Subscription
                        @elseif($type=='customer')
                            {{ trans('general.customer') }}
                        @endif
                    </h2>
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

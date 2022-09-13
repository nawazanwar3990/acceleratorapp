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
</head>
<body>
<div>
    <x-web-header :cPage="$page"></x-web-header>
    <header class="page-hero bg-gradient-primary-to-secondary"
            style="background: url({{ asset('uploads/startup.webp') }})">
        <div class="page-hero-content pt-10">
            <div class="container px-5">
                <div class="row justify-content-center p-3">
                    <div class="col-5 position-relative">
                        <h1 class="page-hero-title">
                            @if($type=='pending_subscription')
                                Pending
                            @elseif($type=='expire_subscription')
                                Expire
                            @else
                                {{ trans('general.register') }} {{ \App\Enum\AccessTypeEnum::getTranslationKeyBy($type) }}
                            @endif
                            <p class="page-hero-text text-center">
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
                            </p>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<main class="bg-white">
    {{$content}}
</main>
<x-web-footer :cPage="$page"></x-web-footer>
<script src="{{ asset('js/website.min.js') }}"></script>
<x-session-messages></x-session-messages>
</body>
</html>

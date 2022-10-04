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
    <link href="{{ asset('css/auth.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="skin-default card-no-border">
{{$content}}
<script src="{{ asset('js/website.min.js') }}"></script>
<x-session-messages></x-session-messages>
</body>
</html>

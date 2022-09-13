<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page->page_title }}</title>
    <meta name="description" content="{{ $page->page_description }}">
    <meta name="keywords" content="{{ $page->page_keyword }}">
    <link href="{{ asset('css/auth.min.css') }}" rel="stylesheet">
</head>
<body class="skin-default card-no-border">
<style>
    .login-box {
        width: 400px;
        margin: 0 auto;
        background-color:#343a40;
        border-radius: 13px;
        color: white;
    }

    .login-box input {
        border: none;
        color: white !important;
    }

    .login-box button {
        background-color: black;
        border: none;
        opacity: 1;
    }
</style>
{{$content}}
<x-session-messages></x-session-messages>
</body>
</html>

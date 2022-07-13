@extends('layouts.message')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <h1>
        <span class="text-info">Subscription Expire</span>
    </h1>
    <h3 class="text-uppercase">Please Contact with Super Admin</h3>
    <p class="text-muted m-t-30 m-b-30">{{ $pageTitle }}</p>
    <a href="{{ route('website.package.renewal') }}"
       class="btn btn-info btn-rounded waves-effect waves-light m-b-40 text-white">
        {{ trans('general.renewal_request') }}
    </a>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection

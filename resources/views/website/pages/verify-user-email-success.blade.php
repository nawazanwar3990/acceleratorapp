@extends('layouts.message')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <h1>
        <span
            class="text-info">{{ trans('general.hi') }}</span> {{ \App\Services\GeneralService::get_register_user_name()  }}
    </h1>
    <h3 class="text-uppercase">{{ trans('general.check_your_inbox') }}</h3>
    <p class="text-muted m-t-30 m-b-30">{{ $pageTitle }}</p>
    <a href="{{ route('register') }}"
       class="btn btn-info btn-rounded waves-effect waves-light m-b-40 text-white">
        {{ trans('general.back_to_register') }}
    </a>
    <a href="{{ route('login') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40 text-white">
        {{ trans('general.login') }}
    </a>
    @php session()->forget('register_user')  @endphp
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection

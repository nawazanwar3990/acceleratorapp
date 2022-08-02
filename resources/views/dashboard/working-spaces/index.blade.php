@extends('layouts.dashboard')
@section('innerCSS')
    <style>
        .card {
            border-top: 1px solid #edf1f5 !important;
        }
    </style>
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4">
        <div class="row justify-content-center my-4">
            <div class="col-12">
                <div class="row justify-content-center">
                    @foreach(\App\Enum\IncubatorTypeEnum::getTranslationKeys() as $key=>$value)
                        <div class="col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card border position-relative">
                                <a href="{{ \App\Enum\IncubatorTypeEnum::getRoute($key) }}">
                                    <img class="card-img-top p-5 pb-3"
                                         src="{{ asset('images/icon/business_accelerator.png') }}"
                                         alt="{{ $value }}">
                                </a>
                                <div class="card-body text-center">
                                    <a href="{{ \App\Enum\IncubatorTypeEnum::getRoute($key) }}" class="card-title btn btn-info">
                                        {{ $value }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
@endsection

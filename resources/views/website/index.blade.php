@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row ">
        <div class="col-lg-12">
            <div class="">
                <div class="fix-width">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 m-b-40 m-t-40 text-center">
                            <div class="white-box mb-3">
                                <img src="{{ asset('images/screen1.jpg') }}" class="img-responsive" alt="">
                            </div>
                            <a class="mt-3 btn btn-primary" href="{{ route('register',[\App\Enum\RoleEnum::INCUBATOR]) }}">{{ trans('general.incubator') }}</a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 m-b-40 m-t-40 text-center">
                            <div class="white-box mb-3">
                                <img src="{{ asset('images/screen1.jpg') }}" class="img-responsive" alt="">
                            </div>
                            <a class="mt-3 btn btn-primary" href="{{ route('register',[\App\Enum\RoleEnum::SERVICE_PROVIDER]) }}">{{ trans('general.service_provider') }}</a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 m-b-40 m-t-40 text-center">
                            <div class="white-box mb-3">
                                <img src="{{ asset('images/screen1.jpg') }}" class="img-responsive" alt="">
                            </div>
                            <a class="mt-3 btn btn-primary" href="{{ route('register',[\App\Enum\RoleEnum::MENTOR]) }}">{{ trans('general.mentor') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection

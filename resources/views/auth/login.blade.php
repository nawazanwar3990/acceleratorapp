@extends('layouts.auth')
@section('content')
    <section id="wrapper" class="login-register login-sidebar"
             style="background-image:url( {{asset('images/background/login-register.jpg') }});">
        <div class="login-box card" style="border-top: none !important;">
            <div class="card-body">
                <form class="form-horizontal form-material text-center" id="loginform" action="{{ route('doLogin') }}"
                      method="POST">
                    @csrf
                    <a href="javascript:void(0)" class="db">
                        <img src="{{ asset('images/logo-icon.png') }}" alt=""/><br/>
                        <img src="{{ asset('images/logo-text.png') }}" alt=""/>
                    </a>
                    <div class="mb-3 m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="login"
                                   placeholder="{{ __('general.username') }}" value="{{ old('login') }}">
                        </div>
                        @error('login')
                        <small class="form-control-feedback text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" name="password"
                                   placeholder="{{ __('general.password') }}">
                        </div>
                        @error('password')
                        <small class="form-control-feedback text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1" name="remember">
                                    <label class="form-check-label"
                                           for="customCheck1">{{ __('general.remember_me') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg w-100 text-uppercase text-white"
                                    type="submit">{{ __('general.login') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

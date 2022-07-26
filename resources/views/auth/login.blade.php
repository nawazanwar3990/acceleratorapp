@extends('layouts.auth')
@section('content')
    <section id="wrapper" class="login-register"
             style="background-image:url( {{asset('images/background/login-register.jpg') }});">
        <div class="login-box card" style="border-top: none !important;">
            <div class="card-body">
                <form class="form-horizontal form-material text-center"
                      id="loginform"
                      action="{{ route('login') }}"
                      method="POST">
                    @csrf
                    <a href="javascript:void(0)" class="db">
                        <img src="{{ asset('images/logo-icon.png') }}" alt=""/><br/>
                        <img src="{{ asset('images/logo-text.png') }}" alt=""/>
                    </a>
                    @error('login')
                    <div class="mt-3">
                        <p class="form-control-feedback text-danger mb-0"> {{ $message }} </p>
                        <a class="btn btn-link p-0 m-0 align-baseline mb-2" href="{{ route('verification.resend') }}">
                            {{ __('click here to request another') }}
                        </a>
                    </div>
                    @enderror
                    <div class="mb-3 m-t-40">
                        <div class="col-xs-12">
                            {!! Form::text('email',old('email'),['id'=>'email','class'=>'form-control','placeholder'=>'Email/Token']) !!}
                        </div>
                        @error('email')
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
                    <div class="mb-3">
                        <div class="col-xs-12">
                            {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),null,['id'=>'security_question_name','class'=>'form-control','placeholder'=>'Security Question']) !!}
                        </div>
                        @error('security_question_name')
                        <small class="form-control-feedback text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="col-xs-12">
                            {!!  Form::text('security_question_value',null,['id'=>'security_question_value','class'=>'form-control','placeholder'=>'Security Answer']) !!}
                        </div>
                        @error('security_question_value')
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
                                <div class="ms-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot pwd?</a>
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

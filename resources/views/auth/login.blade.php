<x-auth-layout
    :page="$page">
    <x-slot name="content">
        <div class="login-register" style="background-image:url({{ $page->banner_image }});">
            <div class="login-box card">
                <div class="card-body" style="padding: 1rem 1rem 0 1rem">
                    <form class="form-horizontal form-material"
                          id="loginform"
                          action="{{ route('login') }}"
                          method="POST">
                        @csrf
                        <h3 class="text-center m-b-20">Sign In</h3>
                        @error('login')
                        <div class="mt-3">
                            <p class="input-feedback text-danger mb-0"> {{ $message }} </p>
                            <a class="btn btn-link p-0 m-0 align-baseline mb-2"
                               href="{{ route('verification.resend') }}">
                                {{ __('click here to request another') }}
                            </a>
                        </div>
                        @enderror
                        <div class="mb-3 m-t-40">
                            {!! Form::text('email',old('email'),['id'=>'email','class'=>'form-control','placeholder'=>'Email/Token']) !!}
                            @error('email')
                            <small class="input-feedback text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            {!! Form::password('password',['class'=>'form-control','placeholder'=>__('general.password')]) !!}
                            @error('password')
                            <small class="input-feedback text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),null,['id'=>'security_question_name','class'=>'form-control','placeholder'=>'Security Question']) !!}
                            @error('security_question_name')
                            <small class="input-feedback text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            {!!  Form::text('security_question_value',null,['id'=>'security_question_value','class'=>'form-control','placeholder'=>'Security Answer']) !!}
                            @error('security_question_value')
                            <small class="input-feedback text-danger"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1"
                                               name="remember">
                                        <label class="form-check-label text-white"
                                               for="customCheck1">{{ __('general.remember_me') }}</label>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="{{ route('password.request') }}" id="to-recover" class="text-white">
                                            <i class="fas fa-lock m-r-5"></i> Forgot password?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row justify-content-center text-center">
                            <div class="col-12 text-center">
                                <button class="btn btn-login site-first-btn-color text-white px-5 w-100"
                                        type="submit">{{ __('general.login') }}</button>
                            </div>
                        </div>
                        <div class="mb-3 row justify-content-center text-center">
                            <div class="col-12 text-center">
                                <h3>OR</h3>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('social-login','google') }}" class="btn site-first-btn-color w-100">
                                    <i class="bx bxl-google"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('social-login','facebook') }}" class="btn site-first-btn-color w-100">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('social-login','twitter') }}" class="btn site-first-btn-color w-100">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center mt-4 mb-2" style="cursor: pointer">
                            Become a member?<a
                                onclick="apply_registration('{{ json_encode(\App\Enum\RegisterTypeEnum::getTranslationKeys()) }}')"
                                class="ms-2 signup-text p-2" title="Become a member">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-auth-layout>

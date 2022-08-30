<x-auth-layout
    :page="$page">
    <x-slot name="content">
        <div class="login-wrapper columns is-gapless">
            <!-- Form section -->
            <div class="column is-7">
                <div class="hero is-fullheight">
                    <div class="hero-heading">
                        <div class="auth-logo text-center">
                            <a href="/">
                                <img class="top-logo" style="
    width: 100px;
    height: 64px;
" src="{{ asset($page->layout->header_logo) }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="hero-body">
                        <div class="container">
                            <div class="columns">
                                <div class="column"></div>
                                <div class="column is-5">
                                    <form class="form-horizontal form-material text-center"
                                          id="loginform"
                                          action="{{ route('login') }}"
                                          method="POST">
                                        @csrf
                                        @error('login')
                                        <div class="mt-3">
                                            <p class="input-feedback text-danger mb-0"> {{ $message }} </p>
                                            <a class="btn btn-link p-0 m-0 align-baseline mb-2" href="{{ route('verification.resend') }}">
                                                {{ __('click here to request another') }}
                                            </a>
                                        </div>
                                        @enderror
                                        <div class="mb-3 m-t-40">
                                            <div class="col-xs-12">
                                                {!! Form::text('email',old('email'),['id'=>'email','class'=>'input is-medium has-shadow','placeholder'=>'Email/Token']) !!}
                                            </div>
                                            @error('email')
                                            <small class="input-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="col-xs-12">
                                                <input class="input" type="password" required="" name="password"
                                                       placeholder="{{ __('general.password') }}">
                                            </div>
                                            @error('password')
                                            <small class="input-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="col-xs-12">
                                                {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),null,['id'=>'security_question_name','class'=>'input is-medium has-shadow','placeholder'=>'Security Question']) !!}
                                            </div>
                                            @error('security_question_name')
                                            <small class="input-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="col-xs-12">
                                                {!!  Form::text('security_question_value',null,['id'=>'security_question_value','class'=>'input is-medium has-shadow','placeholder'=>'Security Answer']) !!}
                                            </div>
                                            @error('security_question_value')
                                            <small class="input-feedback text-danger"> {{ $message }} </small>
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
                                                <button class=" button button-cta btn-align primary-btn is-fullwidth raised no-lh" type="submit">{{ __('general.login') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image section (hidden on mobile) -->
            <div class="column login-column is-5 is-hidden-mobile hero-banner">
                <div class="hero is-fullheight is-theme-primary is-relative">
                    <div class="columns has-text-centered">
                        <div class="column">
                            <h2 class="title is-2 light-text">{{ $page->page_title }}</h2>
                            <h3 class="subtitle is-5 light-text">
                                {{ $page->page_description }}
                            </h3>
                        </div>
                    </div>
                    <img class="login-city" src="{{ asset($page->banner_image) }}" alt="">
                </div>
            </div>
        </div>
    </x-slot>
</x-auth-layout>

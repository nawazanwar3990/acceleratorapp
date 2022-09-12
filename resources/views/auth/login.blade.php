<x-auth-layout
    :page="$page">
    <x-slot name="content">
        <div class="login-register" style="background-image:url({{ $page->banner_image }});">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material"
                          id="loginform"
                          action="{{ route('login') }}"
                          method="POST">
                        @csrf
                        <h3 class="text-center m-b-20">Sign In</h3>
                        @error('login')
                        <div class="mt-3">
                            <p class="input-feedback text-danger mb-0"> {{ $message }} </p>
                            <a class="btn btn-link p-0 m-0 align-baseline mb-2" href="{{ route('verification.resend') }}">
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
                            <button class="btn w-100 btn-lg btn-info btn-rounded text-white" type="submit">{{ __('general.login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-auth-layout>

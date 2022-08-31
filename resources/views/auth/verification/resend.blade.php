<x-auth-layout
    :page="$page">
    <x-slot name="content">
    <section id="wrapper" class="login-register login-sidebar"
             style="background-image:url( {{asset('images/background/login-register.jpg') }});">
        <div class="login-box card" style="border-top: none !important;">
            <div class="card-body">
                <form class="form-horizontal form-material text-center"
                      id="loginform"
                      action="{{ route('verification.resend.post') }}"
                      method="POST">
                    @csrf
                    <a href="javascript:void(0)" class="db">
                        <img src="{{ asset('images/logo-icon.png') }}" alt=""/><br/>
                        <img src="{{ asset('images/logo-text.png') }}" alt=""/>
                    </a>
                    <div class="mb-3 m-t-40">
                        <div class="col-xs-12">
                            {!! Form::email('email',old('email'),['id'=>'email','class'=>'form-control','placeholder'=>trans('general.username')]) !!}
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
                    <div class="mb-3 text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg w-100 text-uppercase text-white"
                                    type="submit">{{ __('general.resend') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </x-slot>
</x-auth-layout>

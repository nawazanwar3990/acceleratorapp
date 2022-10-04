<x-auth-layout
    :page="$page">
    <x-slot name="content">
        <div class="login-register" style="background-image:url({{ $page->banner_image }});">
            <div class="login-box card">
                <div class="card-body" style="padding: 1rem 1rem 0 1rem">
                    {!! Form::open(['url'=>route('password.email'),'method'=>\App\Enum\MethodEnum::POST,'class'=>'form-horizontal form-material']) !!}
                    @csrf
                    <h3 class="text-center m-b-20">Forgot Password</h3>
                    <p>
                        Forgot your password? No problem. Just let us know your email address and we will email
                        you a password reset link that will allow you to choose a new one.
                    </p>
                    <div class="mb-3 m-t-40">
                        {!! Form::text('email',old('email'),['id'=>'email','class'=>'form-control','placeholder'=>'Email']) !!}
                        @error('email')
                        <small class="input-feedback text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="mb-3  text-center">
                        <button class="btn btn-login site-first-btn-color text-white" type="submit">Send
                          Update Password
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </x-slot>
</x-auth-layout>

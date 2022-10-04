<x-auth-layout
    :page="$page">
    <x-slot name="content">
        <div class="login-register" style="background-image:url({{ $page->banner_image }});">
            <div class="login-box card">
                <div class="card-body" style="padding: 1rem 1rem 0 1rem">
                    {!! Form::open(['url'=>route('password.update'),'method'=>\App\Enum\MethodEnum::POST,'class'=>'form-horizontal form-material']) !!}
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <h3 class="text-center m-b-20">Reset Password</h3>
                    <div class="mb-3 m-t-40">
                        {!! Form::text('email',request()->query('email'),['id'=>'email','class'=>'form-control','placeholder'=>'Email']) !!}
                        @error('email')
                        <small class="input-feedback text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="mb-3 m-t-40">
                        {!! Form::password('password',['id'=>'email','class'=>'form-control','placeholder'=>'Password']) !!}
                        @error('password')
                        <small class="input-feedback text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="mb-3 m-t-40">
                        {!! Form::password('password_confirmation',['id'=>'password_confirmation','class'=>'form-control','placeholder'=>'Confirm Password']) !!}
                        @error('password_confirmation')
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

@extends('layouts.website')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-4 py-5">
            <div class="col-md-6">
                @foreach(\App\Enum\AcceleratorServiceEnum::getTranslationKeys() as $key =>$role)
                    <div class="row border my-3 py-3 radio">
                        <div class="col-md-10 align-self-center">
                            <h4>{{ $role }}</h4>
                        </div>
                        <div class="col-md-2 align-self-center text-end">
                            <a href="{{ route("register",[$key]) }}">
                                <i class="bx bx-chevron-right fs-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

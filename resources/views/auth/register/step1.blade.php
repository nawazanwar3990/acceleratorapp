@extends('layouts.website')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="card-title">{{ trans('general.user_type') }}</h3>
                <hr>
                @foreach(\App\Services\DefinitionService::list_services_roles() as $role)
                    <div class="row border my-3 py-3 radio">
                        <div class="col-md-10 align-self-center">
                            <h4>{{ ucwords(str_replace('-',' ',$role->name)) }}</h4>
                        </div>
                        <div class="col-md-2 align-self-center text-end">
                            <a href="{{ route("register",[$role->slug]) }}">
                                <i class="bx bx-chevron-right fs-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

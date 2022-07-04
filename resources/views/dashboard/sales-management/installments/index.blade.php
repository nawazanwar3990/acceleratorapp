@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'','is_create'=>false])
                <div class="card-body">
                    Under Development
                </div>
            </div>
        </div>
    </div>
@endsection

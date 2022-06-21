@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="overflow-x:auto">
                    @include('dashboard.accounts.salary.fields')
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.accounts.salary.components.scripts')

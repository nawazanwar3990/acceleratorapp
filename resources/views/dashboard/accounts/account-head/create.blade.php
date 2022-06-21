@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.save.account-head'), 'method' => 'POST','files' => true,'id' =>'account_head_form', 'class' => 'solid-validation']) !!}
                    <x-hidden-building-id />
                    <x-created-by-field />
                    @include('dashboard.accounts.account-head.fields')
                    <x-buttons :save="true" :reset="true" formID="account_head_form"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(function () {
            $('.select2').select2();
        });
    </script>
@endsection

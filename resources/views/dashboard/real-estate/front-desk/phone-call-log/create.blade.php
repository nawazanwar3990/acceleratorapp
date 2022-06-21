@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.phone-call-log.store'), 'method' => 'POST','files' => true,'id' =>'phone_call_log_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                    <x-hidden-building-id />
                        @include('dashboard.real-estate.front-desk.phone-call-log.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="phone_call_log_form" cancelRoute="dashboard.phone-call-log.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
@endsection

@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
        });
    </script>
@endsection

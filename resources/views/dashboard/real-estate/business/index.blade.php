@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' => route('dashboard.business-settings.update', $model->id), 'method' => 'POST','files' => true, 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    @include('dashboard.real-estate.business.fields')
                    <x-buttons :update="true"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/dropify/dist/js/dropify.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            initDropify();
        });
    </script>
@endsection

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
                    {!! Form::model($model, ['url' =>route('dashboard.purpose.update', $model->id), 'method' => 'POST','files' => true,'id' =>'purpose_form', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    <x-hidden-building-id />
                    @include('dashboard.real-estate.front-desk.front-desk-setup.purpose.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.purpose.index"/>
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

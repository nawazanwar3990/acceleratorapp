@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.durations.update', $model->id), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                        @method('PUT')
                        <x-updated-by-field></x-updated-by-field>
                        @include('dashboard.durations.fields', ['for' => 'edit'])
                        <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.durations.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.durations.components.scripts', ['for' => 'edit'])

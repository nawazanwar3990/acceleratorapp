@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.services.update', $model->id), 'method' => 'POST','files' => true,'id' =>'service', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field></x-updated-by-field>
                    @include('dashboard.services.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.services.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
@endsection

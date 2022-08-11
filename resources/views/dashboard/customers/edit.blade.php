@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.customers.update', $model->id), 'method' => 'POST','files' => true,'id' =>'service', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field></x-updated-by-field>
                    @include('dashboard.user-management.hr.personal-info',['for'=>'edit'])
                    @include('dashboard.user-management.hr.media',['for'=>'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.customers.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
@endsection

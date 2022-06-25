@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.country.update', $model->id), 'method' => 'POST','files' => true,'id' =>'floorName', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    @include('dashboard.user-management.country.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.country.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

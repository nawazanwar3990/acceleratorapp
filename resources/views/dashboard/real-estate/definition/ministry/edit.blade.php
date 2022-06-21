@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.ministry.update', $model->id), 'method' => 'POST','files' => true,'id' =>'ministry_form', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    @include('dashboard.real-estate.definition.ministry.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.ministry.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

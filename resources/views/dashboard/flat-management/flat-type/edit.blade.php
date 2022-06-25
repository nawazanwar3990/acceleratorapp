@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.flat-type.update', $model->id), 'method' => 'POST','files' => true,'id' =>'floorName', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    @include('dashboard.flat-management.flat-type.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.flat-type.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

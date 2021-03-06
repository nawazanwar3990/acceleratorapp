@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.ba.update', $model->id), 'method' => 'POST','files' => true,'id' =>'human_resource_form', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field></x-updated-by-field>
                    <x-edit-id :id="$model->id"></x-edit-id>
                    @include('dashboard.user-management.hr.personal-info')
                    @include('dashboard.user-management.hr.media')
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.ba.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

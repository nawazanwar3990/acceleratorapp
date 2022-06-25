@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.users.update', $model->id), 'method' => 'POST','files' => true,'id' =>'floorName', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field></x-updated-by-field>
                    @include('dashboard.user-management.users.fields')
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.users.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

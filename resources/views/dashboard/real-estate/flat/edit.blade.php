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
                    {!! Form::model($model, ['url' =>route('dashboard.flats-shops.update', $model->id), 'method' => 'POST','files' => true,'id' =>'floorName', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    <x-edit-id :id="$model->id"></x-edit-id>
                    <div class="accordion" id="accordionExample">
                        @include('dashboard.real-estate.flat.components.flat', ['for' => 'edit'])
{{--                        @include('dashboard.real-estate.flat.components.ownership', ['for' => 'edit', 'records' => $model->owners])--}}
                        @include('dashboard.real-estate.flat.components.area-amount', ['for' => 'edit'])
                    </div>
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.flats-shops.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.real-estate.flat.components.scripts', ['for' => 'edit'])

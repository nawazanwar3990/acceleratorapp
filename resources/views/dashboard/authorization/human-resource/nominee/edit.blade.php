@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.nominee.update', $model->id), 'method' => 'POST','files' => true,'id' =>'human_nominee_form', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    <div class="accordion" id="accordionExample">
                        @include('dashboard.authorization.human-resource.nominee.components.detail',['for'=>'edit'])
                        @include('dashboard.authorization.human-resource.nominee.components.record',['for'=>'edit','records'=>$verification])
                        @include('dashboard.authorization.human-resource.nominee.components.media',['for'=>'edit'])
                    </div>
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.nominee.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.real-estate.common.hr-picker-modal')
@endsection
@include('dashboard.authorization.human-resource.nominee.components.scripts')

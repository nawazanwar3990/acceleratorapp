@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body border-top">
                    {!! Form::model($model, ['url' =>route('dashboard.poa.update', $model->id), 'method' => 'POST','files' => true,'id' => 'poa_form', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field />
                    <div class="accordion" id="accordionExample">
                        @include('dashboard.user-management.human-resource.power-of-attorney.components.header')
                        @include('dashboard.user-management.human-resource.power-of-attorney.components.member')
                        @include('dashboard.user-management.human-resource.power-of-attorney.components.flat')
                        @include('dashboard.user-management.human-resource.power-of-attorney.components.rso')
                        @include('dashboard.user-management.human-resource.power-of-attorney.components.pte')
                        @include('dashboard.user-management.human-resource.power-of-attorney.components.record-verified-by')
                        @include('dashboard.user-management.human-resource.power-of-attorney.components.media',['for'=>'edit'])
                    </div>
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.poa.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.common.hr-picker-modal')
@endsection
@include('dashboard.user-management.human-resource.power-of-attorney.components.script')

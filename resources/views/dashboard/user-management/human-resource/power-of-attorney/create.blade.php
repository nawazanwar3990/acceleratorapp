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
                    {!! Form::open(['route' => 'dashboard.poa.store' ,'files' => true, 'id' => 'poa_form','method'=>'post','class' => 'solid-validation']) !!}
                    {!! csrf_field() !!}

                    <x-created-by-field />
                        @include('dashboard.user-management.human-resource.power-of-attorney.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="poa_form" cancelRoute="dashboard.poa.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.common.hr-picker-modal')
@endsection
@include('dashboard.user-management.human-resource.power-of-attorney.components.script')

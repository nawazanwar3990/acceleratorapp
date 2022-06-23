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
                    {!! Form::open(['url' =>route('dashboard.nominee.store'), 'method' => 'POST','files' => true,'id' =>'nominee_form', 'class' => 'solid-validation']) !!}
                    <x-hidden-building-id />
                    <x-created-by-field />
                    @include('dashboard.authorization.human-resource.nominee.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="nominee_form" cancelRoute="dashboard.nominee.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.real-estate.common.hr-picker-modal')
@endsection
@include('dashboard.authorization.human-resource.nominee.components.scripts')

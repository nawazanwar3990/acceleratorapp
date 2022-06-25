@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.human-resource.store'), 'method' => 'POST','files' => true,'id' =>'human_resource_form', 'class' => 'solid-validation']) !!}

                    <x-created-by-field />
                    @include('dashboard.user-management.human-resource.hr-person.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="human_resource_form" cancelRoute="dashboard.human-resource.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.user-management.human-resource.hr-person.components.scripts')

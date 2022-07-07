@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.admins.store'), 'method' => 'POST','files' => true,'id' =>'human_resource_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    @include('dashboard.user-management.hr.personal-info')
                    @include('dashboard.user-management.hr.media')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="human_resource_form" cancelRoute="dashboard.admins.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

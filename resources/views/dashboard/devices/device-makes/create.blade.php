@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.device-makes.store'), 'method' => 'POST','files' => true,'id' =>'device_makes_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field></x-created-by-field>
                        <x-hidden-building-id></x-hidden-building-id>
                        @include('dashboard.devices.device-makes.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="device_makes_form" cancelRoute="dashboard.device-makes.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

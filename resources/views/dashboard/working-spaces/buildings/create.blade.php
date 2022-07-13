@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.buildings.store'), 'method' => 'POST','files' => true,'id' =>'building_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    @include('dashboard.working-spaces.buildings.fields',['for'=>'create'])
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="building_form" cancelRoute="dashboard.buildings.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.working-spaces.components.scripts')

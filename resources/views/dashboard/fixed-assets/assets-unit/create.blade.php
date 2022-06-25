@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.assets-unit.store'), 'method' => 'POST','files' => true,'id' =>'assets_unit_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field/>
                    <x-hidden-building-id/>
                    @include('dashboard.fixed-assets.assets-unit.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="assets_unit_form" cancelRoute="dashboard.assets-unit.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

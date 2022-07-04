@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.flats.store'), 'method' => 'POST','files' => true,'id' =>'flat_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    @include('dashboard.working-spaces.flats.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="flat_form" cancelRoute="dashboard.flats.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.working-spaces.components.scripts')
@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.packages.store'), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field></x-created-by-field>
                        @include('dashboard.packages.fields',['for'=>'create'])
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="plan_form" cancelRoute="dashboard.packages.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('components.common-scripts')

@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.reference.store'), 'method' => 'POST','files' => true,'id' =>'reference_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                    <x-hidden-building-id />
                        @include('dashboard.real-estate.front-desk.front-desk-setup.reference.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="reference_form" cancelRoute="dashboard.reference.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

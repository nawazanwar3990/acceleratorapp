@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.purpose.store'), 'method' => 'POST','files' => true,'id' =>'purpose_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                    <x-hidden-building-id />
                        @include('dashboard.real-estate.front-desk.front-desk-setup.purpose.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="purpose_form" cancelRoute="dashboard.purpose.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

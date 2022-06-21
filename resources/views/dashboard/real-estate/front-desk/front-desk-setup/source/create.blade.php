@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.source.store'), 'method' => 'POST','files' => true,'id' =>'source_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                    <x-hidden-building-id />
                        @include('dashboard.real-estate.front-desk.front-desk-setup.source.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="source_form" cancelRoute="dashboard.source.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

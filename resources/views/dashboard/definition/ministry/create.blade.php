@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.ministry.store'), 'method' => 'POST','files' => true,'id' =>'ministry_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        @include('dashboard.definition.ministry.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="ministry_form" cancelRoute="dashboard.ministry.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

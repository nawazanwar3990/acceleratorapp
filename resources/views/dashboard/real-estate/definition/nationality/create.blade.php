@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.nationality.store'), 'method' => 'POST','files' => true,'id' =>'nationality_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        @include('dashboard.real-estate.definition.nationality.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="nationality_form" cancelRoute="dashboard.nationality.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.designation.store'), 'method' => 'POST','files' => true,'id' =>'designation_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        @include('dashboard.user-management.designation.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="designation_form" cancelRoute="dashboard.designation.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

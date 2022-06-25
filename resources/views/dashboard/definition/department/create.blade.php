@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.department.store'), 'method' => 'POST','files' => true,'id' =>'department_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        @include('dashboard.definition.department.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="department_form" cancelRoute="dashboard.department.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

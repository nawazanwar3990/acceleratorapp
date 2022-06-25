@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.profession.store'), 'method' => 'POST','files' => true,'id' =>'profession_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        @include('dashboard.user-management.profession.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="profession_form" cancelRoute="dashboard.profession.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

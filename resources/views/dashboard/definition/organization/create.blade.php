@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.organization.store'), 'method' => 'POST','files' => true,'id' =>'organization_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        @include('dashboard.definition.organization.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="organization_form" cancelRoute="dashboard.organization.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

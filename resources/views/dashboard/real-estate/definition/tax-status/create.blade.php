@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.tax-status.store'), 'method' => 'POST','files' => true,'id' =>'tax_status_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        @include('dashboard.real-estate.definition.tax-status.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="tax_status_form" cancelRoute="dashboard.tax-status.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

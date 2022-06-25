@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.flats-shops.store'), 'method' => 'POST','files' => true,'id' =>'flat_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />

                        @include('dashboard.flat.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="flat_form" cancelRoute="dashboard.flats-shops.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.common.hr-picker-modal')
@include('dashboard.flat.components.scripts')

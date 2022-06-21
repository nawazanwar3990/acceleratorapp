@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' => route('dashboard.quotations.store'), 'method' => 'POST','files' => true,'id' =>'quotation_form']) !!}
                    <x-created-by-field />
                    <x-hidden-building-id />
                    @include('dashboard.real-estate.quotation.fields')
                    <x-buttons :save="true" :savePrint="true" :cancel="true" :reset="true"
                               formID="quotation_form" cancelRoute="dashboard.quotations.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.real-estate.common.add-installment-plan-modal')
@endsection
@include('dashboard.real-estate.quotation.components.scripts')

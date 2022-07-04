@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ url('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('dashboard.payments.update', $model->id), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                        @method('PUT')
                        <x-updated-by-field></x-updated-by-field>
                        @include('dashboard.payment-management.payments.fields', ['for' => 'edit'])
                        <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.payments.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.payment-management.payments.components.scripts', ['for' => 'edit'])

@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.roles.store'), 'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field></x-created-by-field>
                        @include('dashboard.user-management.roles.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="floors_form" cancelRoute="dashboard.roles.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

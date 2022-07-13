@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::model($model, ['url' =>route('dashboard.offices.update', $model->id), 'method' => 'POST','files' => true, 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-created-by-field></x-created-by-field>
                    @include('dashboard.working-spaces.offices.fields',['for'=>'edit'])
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="flat_form" cancelRoute="dashboard.offices.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.working-spaces.components.scripts')

@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::model($model, ['url' =>route('cms.how-it-works.update', $model->id), 'method' => 'POST','files' => true,'id' =>'floorName', 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-updated-by-field></x-updated-by-field>
                    <x-edit-id :id="$model->id"></x-edit-id>
                    @include('cms.how-it-work.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="cms.how-it-works.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

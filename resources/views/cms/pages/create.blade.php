@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('cms.pages.store'), 'method' => 'POST','files' => true,'id' =>'expense_head_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    @include('cms.pages.fields', ['for' => 'create'])
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="expense_head_form" cancelRoute="cms.pages.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

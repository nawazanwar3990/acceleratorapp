@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.events.store'), 'method' => 'POST','files' => true,'id' =>'event_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field></x-created-by-field>
                        <x-hidden-building-id></x-hidden-building-id>
                        @include('dashboard.events-and-meetings.events.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                                   formID="event_form" cancelRoute="dashboard.events.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="padding-top: 0;">
                    {!! Form::open(['url' => route('dashboard.users.store'), 'method' => 'POST','files' => true,'id' =>'floors_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    <x-hidden-building-id></x-hidden-building-id>
                    @include('dashboard.authorization.users.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('components.common-scripts')

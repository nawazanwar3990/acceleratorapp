@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.floor-type.store'), 'method' => 'POST','files' => true,'id' =>'expense_head_form', 'class' => 'solid-validation']) !!}

                    <x-created-by-field />
                    @include('dashboard.flat-management.floor-type.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="expense_head_form" cancelRoute="dashboard.floor-type.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.dashboard')
@section('css-before')

@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.investors.store'), 'method' => 'POST','files' => true,'id' =>'expense_head_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field></x-created-by-field>
                    @include('dashboard.user-management.hr.personal-info')
                    @include('dashboard.user-management.hr.media')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="expense_head_form" cancelRoute="dashboard.investors.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ asset('plugins/dropify/dist/js/dropify.min.js') }}"></script>
@endsection
@section('innerScript')
    @include('dashboard.freelancer-management.components.script')
@endsection

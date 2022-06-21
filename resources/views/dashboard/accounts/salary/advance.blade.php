@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body" style="overflow-x:auto">
                    {!! Form::open(['url' => route('dashboard.salary.save-advance'), 'method' => 'POST','files' => true,'id' =>'salary_form', 'class' => 'solid-validation']) !!}
                        <x-created-by-field />
                        <x-hidden-building-id />
                        {!! Form::hidden('salary_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('Salary')) !!}
                        {!! Form::hidden('salaryType', 'advance') !!}
                        @include('dashboard.accounts.salary.advance-fields')
                    <x-buttons :save="true" :cancel="true" :reset="true"
                               formID="salary_form" cancelRoute="dashboard.salary.index"></x-buttons>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.accounts.salary.components.scripts')

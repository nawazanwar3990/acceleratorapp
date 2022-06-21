@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' => route('dashboard.voucher.save-debit'), 'method' => 'POST','files' => true, 'id' => 'voucher_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field />
                    <x-hidden-building-id />
                    @include('dashboard.real-estate.vouchers.components.debit-fields')
                    <x-buttons :save="true" :savePrint="true" formID="voucher_form" :reset="true" />
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.real-estate.vouchers.components.scripts')

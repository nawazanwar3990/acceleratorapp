@extends('layouts.dashboard')
@section('pageTitle',$pageTitle)
@section('styleInnerFiles')
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}">
@endsection
@section('content')
    <style>
        label:not(.form-check-label):not(.custom-file-label) {
            font-size: 13px !important;
            font-weight: bold !important;
        }
    </style>
    <div class="row py-3">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header row align-items-center mx-1">
                    <div class="col-6">
                        {!! HTML::decode(link_to_route('sp.index',' <i class="fa fa-arrow-circle-left"></i> Back',null,['class'=>'btn bg-gradient-info btn-sm'])) !!}
                        {!! HTML::decode(link_to_route('definitions', ' <i class="fa fa-arrow-circle-left"></i> Definitions',['for'=>'sp'], ['class' => 'btn bg-gradient-info btn-sm'])) !!}
                    </div>
                    <div class="col-6 text-right">
                        {!! HTML::decode(Form::button('<i class="fa fa-print"></i> Print',['class'=>'btn btn-success btn-sm','onclick'=>'applyPrinting();'])) !!}
                    </div>
                </div>
                <div class="card-body border-top">
                    {!! Form::model($model,['route' => ['sp.update',$model], 'method' => 'PUT','files' => true,'id'=>'spForm']) !!}
                    @csrf
                    @method('PUT')
                    <section class="card-body" id="printHolder">
                        @include('lrm.power-of-attorney.print-components.header')
                        @include('lrm.power-of-attorney.print-components.osb_detail')
                        @include('lrm.power-of-attorney.print-components.nominee')
                        @include('lrm.power-of-attorney.print-components.plot')
                        @include('lrm.power-of-attorney.print-components.attested')
                        @include('lrm.power-of-attorney.print-components.registered')
                        @include('lrm.power-of-attorney.print-components.process-through')
                        @if(count($verified_by)>0)
                            @include('lrm.power-of-attorney.print-components.verified',['for'=>'edit'])
                        @endif
                        @if(count($witness)>0)
                            @include('lrm.power-of-attorney.print-components.witness',['for'=>'edit'])
                        @endif
                    </section>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptInnerFiles')
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/dropify/js/dropify.min.js') }}"></script>
@endsection
@section('pageScript')
    @include('components.scripts')
@endsection

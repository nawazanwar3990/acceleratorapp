@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <style>
        @media print{
            html{
                background-color: #ffffff !important;
            }
            body{
                background-color: #ffffff !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                {{--                @include('components.General.form-list-header',['url'=>'dashboard.installment-plans.create','is_create'=>true])--}}
                <div class="card-header" style="background-color: #ffffff;">
                    <div class="row my-3">
                        <div class="col-md-12 text-right">
                            {!! HTML::decode(Form::button('<i class="fa fa-print"></i> ' . __('general.print'), ['class' => 'btn btn-success btn-sm','onclick'=>'printPersonForm()'])) !!}
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white" id="printHolder">
                    <div class="header-print-3">

                        <div class="row pb-2">
                            <div class="" style="background-color: #002A45; color: #ffffff; width: 50%; display: flex;">
                                <div class="text-left brand-logo" style="width: 100%; padding-top: 30px; padding-left: 10px">
                                    <img src="{{ asset('theme/images/logo-light-icon.png') }}" alt="">
                                    <img src="{{ asset('theme/images/logo-light-text.png') }}" alt="">
                                </div>

                                <div class="vl" style="border-left: 6px solid #E23D21; height: 100%; margin-right: 10px"></div>
                                <div class="vl" style="border-left: 6px solid #E23D21; height: 100%; margin-right: 10px"></div>

                            </div>

                            <div style="background-color: #E23D21; color: #ffffff; width: 50%;">
                                <h1 class="display-1">INVOICE</h1>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="" style="width: 50%">
                                    <div class="title">
                                        <h4 style="font-weight: bold;">INVOICE TO: Test User</h4>
                                    </div>
                                    <div class="info-invoice mt-2">
                                        <p class="m-0">24 Dummy Street Area,</p>
                                        <p class="m-0">Location, Lorem Ipsum</p>
                                    </div>
                                </div>

                                <div class="" style="width: 50%; margin-top: 20px">
                                    <h6 style="font-weight: bold;">INVOICE #: 000021</h6>
                                    <h5 style="font-weight: bold;">Date : 01/02/2022</h5>
                                </div>
                            </div>

                            <div class="row  mt-5" style="height: 530px;"></div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="div-1">
                                        <h4 style="font-weight: bold; color: #E23D21;">Payment Info:</h4>
                                        <p class="m-0">Account #: 123123123</p>
                                        <p class="m-0">A/C Name #: Lorem Ipsum</p>
                                        <p class="m-0">Bank Details: Add Your Details</p>
                                    </div>
                                    <div class="border-div" style="background-color: #000000; width: 200px; padding: 1px;margin-top: 30px"></div>
                                    <div class="div-2 mt-3">
                                        <h4 style="font-weight: bold; color: #E23D21;">Term & Conditions:</h4>
                                        <p class="m-0" style="text-align: justify">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos et nemo nulla odit porro quas quia recusandae saepe, tempora! Assumenda delectus, distinctio explicabo facilis perspiciatis quis saepe sit tempora vero.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-3">
                            <div style="width: 50%; background-color: #002A45; padding: 8px"></div>
                            <div style="width: 50%; background-color: #E23D21; padding: 8px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
        });

        function printPersonForm() {
            $(".print_holder").removeClass('d-block d-none').addClass('d-block');
            $(".current_chevron").addClass('d-none');

            $(':input').removeAttr('placeholder');
            $('textarea').removeAttr('placeholder');
            $('input[type=number]').removeAttr('placeholder');

            let printContents = document.getElementById("printHolder").innerHTML;
            let originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection

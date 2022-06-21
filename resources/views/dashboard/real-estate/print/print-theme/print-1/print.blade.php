@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('css-after')
    <style>
        td {
            padding: 5px !important;
        }

        th {
            padding: 8px;
        }

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

                    <div class="mx-3  bg-white">
                        <div class="header-print-1 bg-white">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="logo-div">
                                        <img width="200px" src="{{ asset('theme/images/Landscape360-logo-dark.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="col-8 header-color-div py-3" style="background-color: #FEC82E;"></div>
                                <div class="col-3 text-center">
                                    <h3 style="font-size: 30px;font-weight: 600"><b>INVOICE</b></h3>
                                </div>
                                <div class="col-1 header-color-div py-3" style="background-color: #FEC82E;"></div>
                            </div>
                            <div class="row my-3">
                                <div class="col-4">
                                    <h4 style="font-weight: 400;"><b>INVOICE TO:</b></h4>
                                    <h5 style="font-weight: 400;"><b>Test User</b></h5>
                                    <p style="font-weight: 400; text-align: justify">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4 align-self-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 style="font-weight: 400;"><b>Invoice# </b></h5>
                                        </div>
                                        <div class="col-6">
                                            234242
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 style="font-weight: 400;"><b>Date: </b></h5>
                                        </div>
                                        <div class="col-6">
                                            02/06/2001
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="data-table-div">
                            <div class="row">
                                <table class="table" style="border: solid #472051 0.5px;">
                                    <thead style="background-color: #472051; color: #ffffff;">
                                    <tr>
                                        <th scope="col">SL.</th>
                                        <th scope="col">Item Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Qty.</th>
                                        <th scope="col">Total.</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing</td>
                                        <td>12</td>
                                        <td>1</td>
                                        <td>12</td>
                                    </tr>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td  style="border-left: solid #472051 0.5px">
                                            <p style="margin-top: 30px; font-weight: 400; font-size: 15px">Sub
                                                Total:</p>
                                        </td>
                                        <td>
                                            <p style="margin-top: 30px; font-weight: 600">500</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"></td>
                                        <td style="border-left: solid #472051 0.5px">
                                            <p style="margin-top: 30px; font-weight: 400; font-size: 15px">Tax:</p>
                                        </td>
                                        <td>
                                            <p style="margin-top: 30px; font-weight: 600">10%</p>
                                        </td>
                                    </tr>

                                    <tr style="background-color: #472051; color: #ffffff">
                                        <td colspan="3"></td>
                                        <td style="border-left: solid #472051 0.5px">
                                            <p style="margin-top: 30px; font-weight: 600; font-size: 15px">Total:</p>
                                        </td>
                                        <td>
                                            <p style="margin-top: 30px; font-weight: 600">1000</p>
                                        </td>
                                    </tr>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="footer-print">
                            <div class="row">
                                <div class="col-4">

                                    <h4 style="font-weight: 600;">Payment Info:</h4>
                                    <div class="row">

                                        <div class="col-4">
                                            <p>Account#</p>
                                        </div>
                                        <div class="col-8">
                                            <p>2323432423</p>
                                        </div>

                                        <div class="col-4">
                                            <p>A/C Name:</p>
                                        </div>
                                        <div class="col-8">
                                            <p>Muhammad Azeem</p>
                                        </div>

                                        <div class="col-4">
                                            <p>Bank Detail:</p>
                                        </div>
                                        <div class="col-8">
                                            <p style="text-align: left">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-8" style="background-color: #FEC82E; padding: 1px;"></div>
                                <div class="col-2 py-1" style="background-color: #000000; text-align: center; color: #ffffff;">
{{--                                    <b style="font-size: 12px;">Authorised Sign</b>--}}
                                </div>
                                <div class="col-2 py-1" style="background-color: #FEC82E;"></div>
                            </div>

                            <div class="row mt-1 text-center">
                                <div class="col-4">
                                    <p>Phone# <b>030000232</b></p>
                                </div>
                                <div class="col-4">
                                    <p>Address: </p>
                                </div>
                                <div class="col-4">
                                    <p>Website: </p>
                                </div>
                            </div>
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

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

        @media print {
            html {
                background-color: #ffffff !important;
            }

            body {
                background-color: #ffffff !important;
            }
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.print.flat-owner.components.flat-owner-filters')

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
                    <table class="table table-bordered table-hover" style="border: solid black 0.5px">
                        @include('components.General.table-headings-simple',['headings'=>\App\Enum\TableHeadings\RealEstate\PrintFlatOwners::getTranslationKeys()])
                        <thead style="background-color: #7e7e7e; color: #ffffff">
                        <tr>
                            <th style="font-size: 11px" scope="col">HR ID</th>
                            <th style="font-size: 11px" scope="col">Flat Name</th>
                            <th style="font-size: 11px" scope="col">Full Name</th>
                            <th style="font-size: 11px" scope="col">CNIC</th>
                            <th style="font-size: 11px" scope="col">Date Ownership</th>
                            <th style="font-size: 11px" scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('dashboard.print.flat-owner.list')
                        </tbody>
                    </table>
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

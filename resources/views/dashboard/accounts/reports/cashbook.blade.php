@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-bs5/css/fixedHeader.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/datatables-bs5/css/rowGroup.bootstrap5.css') }}">
@endsection
@section('css-after')
    <style>
        table.dataTable tr.dtrg-group.dtrg-start td {
            background-color: rgba(87, 102, 218, 0.15) !important;
            color: #5766da !important;
        }

        table.dataTable tr.dtrg-group.dtrg-end td {
            background-color: #472051 !important;
            color: #ffffff !important;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('components.General.start-end-date-filter', ['route' => 'dashboard.cashbook'])
            <div class="card shadow-none pt-0" id="printArea">
                @include('components.General.form-list-header', ['print' => true])
                <div class="card-body" id="printArea">
                    @if(session()->get('printHeader') !== null)
                        @include(session()->get('printHeader') ,['title' => __('general.cash_book') ])
                        <br>
                    @endif
                    <table class="table table-striped border table-hover" id="datatable" style="width: 100%;">
                        @include('components.General.table-headings-simple',['headings'=>\App\Enum\TableHeadings\RealEstate\Cashbook::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.accounts.reports.components.cashbook-list')
                        </tbody>
                    </table>
                    @if(session()->get('printFooter') !== null)
                        <br>
                        @include(session()->get('printFooter'))
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    @include('includes.datatable-js')
    <script src="{{ url('plugins/datatables-bs5/js/dataTables.fixedHeader.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs5/js/dataTables.rowGroup.js') }}"></script>
@endsection
@section('innerScript')

    <script>
        $(function () {
            $('.select2').select2();

            let totalDebit = 0;
            let totalCredit = 0;

            $('#datatable').DataTable({
                "order": [],
                "aaSorting": [],

                fixedHeader: {
                    header: true,
                },
                paging: false,
                columnDefs: [
                    {targets: [1], visible: false},
                ],
                rowGroup: {
                    startRender: function (rows, group) {
                        return group;
                    },
                    endRender: function (rows, group, level) {
                        totalDebit += rows
                            .data()
                            .pluck(5)
                            .reduce(function (a, b) {
                                let tempA = a.toString().replace(',', '');
                                let tempB = b.toString().replace(',', '');
                                return Number(tempA) + Number(tempB);
                            }, 0);

                        totalCredit += rows
                            .data()
                            .pluck(6)
                            .reduce(function (a, b) {
                                let tempA = a.toString().replace(',', '');
                                let tempB = b.toString().replace(',', '');
                                return Number(tempA) + Number(tempB);
                            }, 0);

                        if ((totalDebit - totalCredit) < 0) {
                            var closingBalance = ((totalDebit - totalCredit) * -1);
                            closingBalance = $.fn.dataTable.render.number(',', '.', 2, 'CR ', '').display(closingBalance);
                        } else {
                            var closingBalance = (totalDebit - totalCredit);
                            closingBalance = $.fn.dataTable.render.number(',', '.', 2, 'DR  ', '').display(closingBalance);
                        }

                        let newRow = $('<tr/>')
                            .append('<td colspan="7" class="text-right"><strong>{{ __('general.closing_balance') }}: </strong>' + closingBalance + '</td>');
                        return $(newRow);

                    },
                    dataSrc: [1]
                },
            });
        });
    </script>
@endsection

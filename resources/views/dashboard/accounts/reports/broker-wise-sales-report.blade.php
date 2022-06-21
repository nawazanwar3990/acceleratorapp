@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.accounts.reports.components.broker-wise-sales-report-filters')
            <div class="card shadow-none pt-0" id="printArea">
                @include('components.General.form-list-header', ['print' => true])
                <div class="card-body">
                    @if(session()->get('printHeader') !== null)
                        @include(session()->get('printHeader') ,['title' => __('general.broker_wise_sales') ])
                        <br>
                    @endif
                    <table class="table table-striped border table-hover" id="datatable" style="width: 100%;">
                        @include('components.General.table-headings-simple',['headings'=>\App\Enum\TableHeadings\RealEstate\BrokerWiseSalesReport::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.accounts.reports.components.broker-wise-sales-report-list')
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
@endsection
@section('innerScript')

    <script>
        $(function () {
            $('.select2').select2();
        });
    </script>
@endsection

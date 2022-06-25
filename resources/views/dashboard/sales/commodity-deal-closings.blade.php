@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="datatable">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\CommodityDealClosings::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.sales.commodity-deal-closings-list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.sales.components.commodity-value-modal')
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    @include('includes.datatable-general-init', ['table' => 'datatable'])
    <script>
        $(function () {
            $('.select2').select2();
        });
    </script>
@endsection

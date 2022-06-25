@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.ledgers.components.broker-ledger-filters')
            <div class="card shadow-none pt-0" id="printArea">
                @include('components.General.form-list-header', ['print' => true])
                <div class="card-body" id="printArea">
                    <h3 class="text-dark card-title">{{ __('general.broker_ledger') }}
                        @if (request()->has('broker_id') && request()->get('broker_id') != '')
                            [ {{ $brokerName }} ]
                        @endif
                    </h3>
                    <table class="table table-striped border no-wrap table-hover" id="datatable" style="width: 100%;">
                        @include('components.General.table-headings-simple',['headings'=>\App\Enum\TableHeadings\RealEstate\CommonLedger::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.ledgers.components.broker-ledger-list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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

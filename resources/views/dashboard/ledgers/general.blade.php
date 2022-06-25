@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.ledgers.components.general-ledger-filters')
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header', ['print' => true])
                <div class="card-body" id="printArea">
                    @if(session()->get('printHeader') !== null)
                        @include(session()->get('printHeader') ,['title' => __('general.general_ledger') ])
                        <br>
                        <br>
                    @endif
                    @if(isset($headName))
                        <h4><b>{{ $headName }}</b> {{ __('general.from') }}
                            <b>{{ \App\Services\GeneralService::formatDate( $startDate ) }}</b>
                            {{ __('general.to') }} <b>{{ \App\Services\GeneralService::formatDate( $endDate ) }}</b>
                        </h4>
                            <table class="table table-striped border no-wrap table-hover" id="datatable" style="width:100%;">
                                @include('components.General.table-headings-simple',['headings'=>\App\Enum\TableHeadings\RealEstate\GeneralLedger::getTranslationKeys()])
                                @include('dashboard.ledgers.components.general-ledger-list')
                            </table>
                    @endif

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
@endsection
@section('innerScript')
    @include('includes.datatable-general-init', ['table' => 'datatable'])
    <script>
        $(function () {
            $('.select2').select2();
            @if (request()->has('general_head'))
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.general-ledger-sub-heads') }}",
                data: {
                    'generalHeadCode': {{ request()->get('general_head') }}
                },
                success: function (result) {
                    if (result.success === true) {
                        $('#transaction_head').html(result.records).val('{{ request()->get('transaction_head') }}');
                    } else {
                        showError(result.msg);
                    }
                }
            });
            @endif
        });

        function getTransactionHeads() {
            let generalHeadCode = $('#general_head').val();
            if (generalHeadCode > 0) {
                showWait();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.general-ledger-sub-heads') }}",
                    data: {'generalHeadCode': generalHeadCode},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#transaction_head').empty().append(result.records);
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

    </script>
@endsection

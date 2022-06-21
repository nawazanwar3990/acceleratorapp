@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('components.General.start-end-date-filter', ['route' => 'dashboard.balance-sheet'])
            <div class="card shadow-none pt-0" id="printArea">
                @include('components.General.form-list-header', ['print' => true])
                <div class="card-body">
                    @if(session()->get('printHeader') !== null)
                        @include(session()->get('printHeader') ,['title' => __('general.balance_sheet') ])
                        <br>
                    @endif
                    @php
                        $GLOBALS['totalAssets']   = 0;
                        $GLOBALS['totalLiabEqPL']   = 0;
                    @endphp
                    <div class="row">
                        @include('dashboard.accounts.reports.components.balance-sheet.assets',['totalAssets'=>$GLOBALS['totalAssets']])
                        @include('dashboard.accounts.reports.components.balance-sheet.liabilities',['totalLiabEqPL'=>$GLOBALS['totalLiabEqPL'] ])

                    </div>
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

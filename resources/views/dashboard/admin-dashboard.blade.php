@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('css-after')
    <style>
        .card {
            border-top: none !important;
        }
    </style>
@endsection
@section('content')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row m-t-40">
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white">{{ \App\Services\GeneralService::count_ba_services() }}</h1>
                                    <h6 class="text-white">Business Accelerator Services</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_packages()}}</h1>
                                    <h6 class="text-white">Packages</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_receipts()}}</h1>
                                    <h6 class="text-white">Payment Receipts</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_subscriptions()}}</h1>
                                    <h6 class="text-white">Subscriptions</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_accelerator()}}</h1>
                                    <h6 class="text-white">Business Accelerator</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <div class="card-title">
                        <h4 class="card-title mb-0">Current Dealing</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="demo-foo-addrow"
                               class="table m-t-30 table-hover no-wrap contact-list footable footable-1 footable-paging footable-paging-center breakpoint-lg"
                               data-paging="true" data-paging-size="7" style="">
                            <thead>
                            <tr class="footable-header">
                                <th class="footable-first-visible" style="display: table-cell;">Sr #</th>
                                <th style="display: table-cell;">Customer Name</th>
                                <th style="display: table-cell;">Service Asked</th>
                                <th style="display: table-cell;">Package Detail</th>
                                <th style="display: table-cell;">Opening Date</th>
                                <th style="display: table-cell;">Expiry Date</th>
                                <th style="display: table-cell;">Status</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
    </div>
@endsection

@section('inner-script-files')

@endsection

@section('innerScript')
    <script>

    </script>
@endsection

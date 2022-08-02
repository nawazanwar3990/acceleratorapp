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
                                        <h1 class="font-light text-white">2,064</h1>
                                        <h6 class="text-white">Total Available Services</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-primary text-center">
                                        <h1 class="font-light text-white">1,738</h1>
                                        <h6 class="text-white">Total No Of Registered Mentor</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-success text-center">
                                        <h1 class="font-light text-white">1100</h1>
                                        <h6 class="text-white">Total No Of Incubator</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-dark text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Total Client Dealing With</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-danger text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">Per Month Collectable Cash</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-warning text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">This Month Receiving Amount</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card">
                                    <div class="box bg-megna text-center">
                                        <h1 class="font-light text-white">964</h1>
                                        <h6 class="text-white">This Month Pending Amount</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <div id="morris-area-chart" style="height: 340px;"></div>
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

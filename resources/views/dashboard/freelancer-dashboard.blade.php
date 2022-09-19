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
        <div class="row bg-white p-3">
            <div class="col-12">
                <div id="morris-area-chart" style="height: 340px;"></div>
            </div>
        </div>
        <div class="row my-5">
            <!-- Column -->
            <div class="col-lg-8 col-md-12 p-l-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex m-b-40 align-items-center no-block">
                            <h5 class="card-title ">SALES DIFFERENCE</h5>
                            <div class="ms-auto">
                                <ul class="list-inline font-12">
                                    <li><i class="fa fa-circle text-cyan"></i> SITE A</li>
                                    <li><i class="fa fa-circle text-primary"></i> SITE B</li>
                                </ul>
                            </div>
                        </div>
                        <div id="morris-area-chart2" style="height: 340px;"></div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-4 col-md-12 p-r-0">
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">SALES DIFFERENCE</h5>
                                <div class="row">
                                    <div class="col-6  m-t-30">
                                        <h1 class="text-primary">$647</h1>
                                        <p class="text-muted">APRIL 2017</p>
                                        <b>(150 Sales)</b> </div>
                                    <div class="col-6">
                                        <div id="sales1" class="text-end"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">VISIT STATASTICS</h5>
                                <div class="row">
                                    <div class="col-6  m-t-30">
                                        <h1 class="text-info">$347</h1>
                                        <p class="light_op_text">APRIL 2017</p>
                                        <b class="">(150 Sales)</b> </div>
                                    <div class="col-6">
                                        <div id="sales2" class="text-end"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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
        $(function () {
            "use strict";
            Morris.Area({
                element: 'morris-area-chart',
                data: [{
                    period: '2010',
                    iphone: 0,
                    ipad: 0,
                    itouch: 0
                }, {
                    period: '2011',
                    iphone: 50,
                    ipad: 15,
                    itouch: 5
                }, {
                    period: '2012',
                    iphone: 20,
                    ipad: 50,
                    itouch: 65
                }, {
                    period: '2013',
                    iphone: 60,
                    ipad: 12,
                    itouch: 7
                }, {
                    period: '2014',
                    iphone: 30,
                    ipad: 20,
                    itouch: 120
                }, {
                    period: '2015',
                    iphone: 25,
                    ipad: 80,
                    itouch: 40
                }, {
                    period: '2016',
                    iphone: 10,
                    ipad: 10,
                    itouch: 10
                }


                ],
                lineColors: ['#fb9678', '#01c0c8', '#8698b7'],
                xkey: 'period',
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['Site A', 'Site B', 'Site C'],
                pointSize: 0,
                lineWidth: 0,
                resize:true,
                fillOpacity: 0.8,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'

            });
            Morris.Area({
                element: 'morris-area-chart2',
                data: [{
                    period: '2010',
                    SiteA: 0,
                    SiteB: 0,

                }, {
                    period: '2011',
                    SiteA: 130,
                    SiteB: 100,

                }, {
                    period: '2012',
                    SiteA: 80,
                    SiteB: 60,

                }, {
                    period: '2013',
                    SiteA: 70,
                    SiteB: 200,

                }, {
                    period: '2014',
                    SiteA: 180,
                    SiteB: 150,

                }, {
                    period: '2015',
                    SiteA: 105,
                    SiteB: 90,

                },
                    {
                        period: '2016',
                        SiteA: 250,
                        SiteB: 150,

                    }],
                xkey: 'period',
                ykeys: ['SiteA', 'SiteB'],
                labels: ['Site A', 'Site B'],
                pointSize: 0,
                fillOpacity: 0.4,
                pointStrokeColors:['#b4becb', '#01c0c8'],
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                lineWidth: 0,
                smooth: false,
                hideHover: 'auto',
                lineColors: ['#b4becb', '#01c0c8'],
                resize: true

            });
        });
        var sparklineLogin = function() {
            $('#sparklinedash').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '10',
                barColor: '#4caf50'
            });
            $('#sparklinedash2').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '10',
                barColor: '#9675ce'
            });
            $('#sparklinedash3').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '10',
                barColor: '#03a9f3'
            });
            $('#sparklinedash4').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9, 12, 10, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '10',
                barColor: '#f96262'
            });
            $('#sales1').sparkline([20, 40, 30], {
                type: 'pie',
                height: '100',
                resize: true,
                sliceColors: ['#808f8f', '#fecd36', '#f1f2f7']
            });
            $('#sales2').sparkline([6, 10, 9, 11, 9, 10, 12], {
                type: 'bar',
                height: '154',
                barWidth: '4',
                resize: true,
                barSpacing: '10',
                barColor: '#25a6f7'
            });

        }
        var sparkResize;

        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();
    </script>
@endsection

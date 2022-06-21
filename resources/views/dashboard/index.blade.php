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

    <div class="row g-0">
        <div class="col-lg-3 col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icons-Building"></i></h3>
                                    <p class="text-muted">{{ __('general.total_buildings') }}</p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-primary">
                                        <a href="{{ route('dashboard.buildings.index') }}" target="_blank" class="link display-5 ms-auto">
                                            {{ \App\Services\RealEstate\HomeService::getTotalBuildingCount() }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icons-Home-Window"></i></h3>
                                    <p class="text-muted">{{ __('general.total_floors') }}</p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-primary">
                                        <a href="{{ route('dashboard.floors.index') }}" target="_blank" class="link display-5 ms-auto">
                                            {{ \App\Services\RealEstate\HomeService::getTotalFloorsCount() }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icons-Home-4"></i></h3>
                                    <p class="text-muted">{{ __('general.total_flats') }}</p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-primary">
                                        <a href="{{ route('dashboard.flats-shops.index') }}" target="_blank" class="link display-5 ms-auto">
                                            {{ \App\Services\RealEstate\HomeService::getTotalFlatsCount() }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icons-Wallet-2"></i></h3>
                                    <p class="text-muted">{{ __('general.total_sold_flats') }}</p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-primary">
                                        <a href="{{ route('dashboard.sales.index') }}" target="_blank" class="link display-5 ms-auto">
                                            {{ \App\Services\RealEstate\HomeService::getTotalSoldFlatsCount() }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-0">
        <div class="col-md-3">
            <div class="card bg-primary text-white border">
                <div class="card-body">
                    <h5 class="card-title">{{ __('general.monthly_sales') }}</h5>
                    <div class="row">
                        <div class="col-12">
                            @php $salesData = \App\Services\RealEstate\HomeService::salesStatistics(); @endphp
                            <h1 class="text-white">{{  \App\Services\GeneralService::number_format( $salesData['totalSalesAmount'] ) }}</h1>
                            <p class="light_op_text">{{ $salesData['month'] }}</p>
                            <b class="text-white">({{ $salesData['totalSales'] }} Sales)</b>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-cyan text-white border">
                <div class="card-body">
                    <h5 class="card-title">{{ __('general.yearly_sales') }}</h5>
                    <div class="row">
                        <div class="col-12">
                            @php $salesData = \App\Services\RealEstate\HomeService::salesStatistics(true); @endphp
                            <h1 class="text-white">{{  \App\Services\GeneralService::number_format( $salesData['totalSalesAmount'] ) }}</h1>
                            <p class="light_op_text">{{ $salesData['year'] }}</p>
                            <b class="text-white">({{ $salesData['totalSales'] }} Sales)</b>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white border">
                <div class="card-body">
                    <h5 class="card-title">{{ __('general.monthly_installment_collectable') }}</h5>
                    <div class="row">
                        <div class="col-12">
                            @php $installmentData = \App\Services\RealEstate\HomeService::installmentStatistics(); @endphp
                            <h1 class="text-white">{{  \App\Services\GeneralService::number_format( $installmentData['collectableAmount'] ) }}</h1>
                            <p class="light_op_text">{{ $installmentData['month'] }}</p>
                            <b class="text-white">({{ $installmentData['collectableCount'] }} Sales)</b>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white border">
                <div class="card-body">
                    <h5 class="card-title">{{ __('general.monthly_installment_collections') }}</h5>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-white">{{  \App\Services\GeneralService::number_format( $installmentData['collectionAmount'] ) }}</h1>
                            <p class="light_op_text">{{ $installmentData['month'] }}</p>
                            <b class="text-white">({{ $installmentData['collectionCount'] }} Sales)</b>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="row">
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Phase A</h4>
                    <div class="d-flex flex-row">
                        <div class="p-10 p-l-0 b-r">
                            <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                        <div class="p-10 b-r">
                            <h6 class="font-light">Montly</h6><b>20.40%</b>
                        </div>
                        <div class="p-10">
                            <h6 class="font-light">Daily</h6><b>5.40%</b>
                        </div>
                    </div>
                </div>
                <div id="spark1" class="sparkchart spark1">
                    <canvas style="display: inline-block; width: 429.983px; height: 50px; vertical-align: top;"
                            width="429" height="50"></canvas>
                </div>
            </div>
        </div>
        <!-- Column -->

        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Phase B</h4>
                    <div class="d-flex flex-row">
                        <div class="p-10 p-l-0 b-r">
                            <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                        <div class="p-10 b-r">
                            <h6 class="font-light">Montly</h6><b>20.40%</b>
                        </div>
                        <div class="p-10">
                            <h6 class="font-light">Daily</h6><b>5.40%</b>
                        </div>
                    </div>
                </div>
                <div id="spark1" class="sparkchart spark1">
                    <canvas style="display: inline-block; width: 429.983px; height: 50px; vertical-align: top;"
                            width="429" height="50"></canvas>
                </div>
            </div>
        </div>
        <!-- Column -->

        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Phase C</h4>
                    <div class="d-flex flex-row">
                        <div class="p-10 p-l-0 b-r">
                            <h6 class="font-light">Growth</h6><b>80.40%</b></div>
                        <div class="p-10 b-r">
                            <h6 class="font-light">Montly</h6><b>20.40%</b>
                        </div>
                        <div class="p-10">
                            <h6 class="font-light">Daily</h6><b>5.40%</b>
                        </div>
                    </div>
                </div>
                <div id="spark1" class="sparkchart spark1">
                    <canvas style="display: inline-block; width: 429.983px; height: 50px; vertical-align: top;"
                            width="429" height="50"></canvas>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>--}}

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('general.yearly_expenses') }}</h4>
                    <div>
                        <canvas id="chart2" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('general.this_month_expenses') }}</h4>
                    <div>
                        <canvas id="chart1" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ __('general.latest_sales') }}</h5>

                    <div class="table-responsive">
                    <table class="table table-striped table-compact table-bordered">
                        <thead>
                        <tr>
                            <th>{{ __('general.transfer_no') }}</th>
                            <th>{{ __('general.date') }}</th>
                            <th>{{ __('general.flat_shop_name') }}</th>
                            <th>{{ __('general.total_amount') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse(\App\Services\RealEstate\HomeService::latestSales() as $sale)
                                <tr>
                                    <td><a href="{{ route('dashboard.sales.show', $sale->transfer_no) }}" target="_blank">{{ $sale->transfer_no }}</a></td>
                                    <td>{{ \App\Services\GeneralService::formatDate( $sale->date ) }}</td>
                                    <td>{{ $sale->flat_name }}</td>
                                    <td>{{ \App\Services\GeneralService::number_format( $sale->after_discount_amount ) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="4">{{ __('general.no_record_found') }}</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

@endsection

@section('inner-script-files')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="{{ asset('plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
@endsection

@section('innerScript')
    <script>
        var sparklineLogin = function () {
            $(".spark1").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#26c6da',
                fillColor: '#26c6da',
                maxSpotColor: '#26c6da',
                highlightLineColor: 'rgba(0, 0, 0, 0.2)',
                highlightSpotColor: '#26c6da'
            });
        }
        var sparkResize;
        $(window).resize(function (e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{ route('dashboard.dashboard.data.ajax') }}",
            data: {'dataStatus': true},
            success: function (result) {
                console.log(result);
                //expence chart
                expenseChart(result);
                monthlyExpenseChart(result);
                //    for other charts and data show on dashboard
            }
        });

        function expenseChart(result) {
            new Chart(document.getElementById("chart2"),
                {
                    "type": "bar",
                    "data": {
                        "labels": result.months,
                        "datasets": [{
                            "label": "Expense Yearly Chart",
                            "data": result.data_expense_chart,

                            "fill": false,
                            "backgroundColor": [
                                "rgba(255, 99, 132, 0.2)",
                                "rgba(255, 159, 64, 0.2)",
                                "rgba(255, 205, 86, 0.2)",
                                "rgba(75, 192, 192, 0.2)",
                                "rgba(54, 162, 235, 0.2)",
                                "rgba(153, 102, 255, 0.2)",
                                "rgba(201, 203, 207, 0.2)",
                                "rgba(68,95,35,0.2)",
                                "rgba(87,41,143,0.2)",
                                "rgba(80,190,182,0.2)",
                                "rgba(106,18,112,0.2)",
                                "rgba(121,16,35,0.2)",
                            ],
                            "borderColor": [
                                "rgb(255, 99, 132)",
                                "rgb(255, 159, 64)",
                                "rgb(255, 205, 86)",
                                "rgb(75, 192, 192)",
                                "rgb(54, 162, 235)",
                                "rgb(153, 102, 255)",
                                "rgb(201, 203, 207)",
                                "rgb(8,95,35)",
                                "rgb(87,41,143,0.2)",
                                "rgb(80,190,182,0.2)",
                                "rgb(106,18,112,0.2)",
                                "rgb(121,16,35,0.2)",
                            ],
                            "borderWidth": 1
                        }
                        ]
                    },
                    "options": {
                        "scales": {"yAxes": [{"ticks": {"beginAtZero": true}}]}
                    }
                });
        }

        function monthlyExpenseChart(result) {
            new Chart(document.getElementById("chart1"),
                {
                    "type": "bar",
                    "data": {
                        "labels": result.daysInMonth,
                        "datasets": [{
                            "label": result.currentMonthName + " Expense Chart",
                            "data": result.getMonthlyExpenseData,

                            "fill": false,
                            "backgroundColor": [
                                "rgba(71, 32, 81, 0.2)",
                            ],
                            "borderColor": [
                                "rgb(71, 32, 81)",
                            ],
                            "borderWidth": 1
                        }
                        ]
                    },
                    "options": {
                        "scales": {"yAxes": [{"ticks": {"beginAtZero": true}}]}
                    }
                });
        }

    </script>
@endsection

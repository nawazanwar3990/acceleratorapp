@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row pricing-plan justify-content-center">
                        @foreach($plans as $plan)
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box featured-plan">
                                    <div class="pricing-body b-l">
                                        <div class="pricing-header">
                                            <h4 class="price-lable text-white bg-warning"> Popular</h4>
                                            <h4 class="text-center">{{ $plan->name }}</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>{{ $plan->price }}</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                            <div class="price-row">
                                                <button
                                                    class="btn btn-success waves-effect waves-light m-t-20 text-white">
                                                    Sign up
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection

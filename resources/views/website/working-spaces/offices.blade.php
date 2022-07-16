@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row" style="position: relative;">
        @include('website.components.home.banner')
        @include('website.components.home.what-you-are')
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row location pb-5">
                    <div class="col-lg-3 col-md-4">
                        @include('website.working-spaces.search.office')
                    </div>
                    <div class="col-lg-9 col-md-8 bg-light border-start">
                        <div class="row">
                            <div class="col-12">
                                @foreach($offices as $office)
                                    <div class="card overflow-hidden">
                                        <!-- row -->
                                        <div class="row no-gutters">
                                            <div class="col-md-4"
                                                 style="background: url('http://eliteadmin.themedesigner.in/demos/bt4/assets/images/property/prop1.jpeg') center center / cover no-repeat; min-height:250px;">
                                                <span class="pull-right label label-danger">For Rent</span>
                                            </div>
                                            <!-- column -->
                                            <div class="col-md-8">
                                                <!-- Row -->
                                                <div class="row no-gutters">
                                                    <!-- column -->
                                                    <div class="col-md-6 border-end border-bottom">
                                                        <div class="p-20">
                                                            <h5 class="card-title">Florida 5, Pinecrest, FL</h5>
                                                            <h5 class="text-danger">$ 220,000</h5>
                                                        </div>
                                                    </div>
                                                    <!-- column -->
                                                    <div class="col-md-6 border-bottom">
                                                        <div class="p-20">
                                                            <div class="d-flex no-block align-items-center">
                                                                <span><img src="../assets/images/property/pro-bath.png"></span>
                                                                <span class="p-10 text-muted">Bathrooms</span>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary ms-auto">2</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span><img src="../assets/images/property/pro-bed.png"></span>
                                                                <span class="p-10 text-muted">Beds</span>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary ms-auto">2</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span><img
                                                                        src="../assets/images/property/pro-garage.png"></span>
                                                                <span class="p-10 text-muted">Garages</span>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary ms-auto">1</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- column -->
                                                    <div class="col-md-12">
                                                        <div class="p-20">
                                                            <div class="d-flex no-block align-items-center">
                                                                <a href="javascript:void(0)"><img alt="img"
                                                                                                  class="thumb-md img-circle m-r-10"
                                                                                                  src="../public/images/users/img.jpg "></a>
                                                                <div>
                                                                    <h5 class="card-title m-b-0">Ali</h5>
                                                                    <h6 class="text-muted">5 Property</h6>
                                                                </div>
                                                                <div class="ms-auto text-muted text-end">
                                                                    <i class="fa fa-map-marker text-danger m-r-10"></i>
                                                                    Faislabad
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- column -->
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
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection

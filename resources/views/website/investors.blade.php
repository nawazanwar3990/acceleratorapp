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
                        @include('website.working-spaces.search.investor')
                    </div>
                    <div class="col-lg-9 col-md-8 bg-light border-start pt-4">
                        <div class="row">
                            @foreach($investors as $investor)
                                <div class="col-md-6 col-lg-4">
                                    <img class="img-responsive" alt="user" src="{{ asset('images/users/1.jpg') }}">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $investor->getFullName() }}</h5>
                                            <div class="m-b-30">
                                                <a class="link list-icons" href="#">
                                                    <i class="bx bx-alarm"></i> {{ $investor->created_at->diffForHumans() }}
                                                </a>
                                            </div>
                                            <p>
                                                <span><i class="ti-alarm-clock"></i> Duration: 8 Months</span>
                                            </p>
                                            <p>
                                                <span><i class="ti-user"></i> Professor: William Doe</span>
                                            </p>
                                            <p>
                                                <span><i class="fa fa-graduation-cap"></i> Students: 400+</span>
                                            </p>
                                            <button
                                                class="btn btn-success text-white btn-rounded waves-effect waves-light m-t-10">
                                                More
                                                Details
                                            </button>
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
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection

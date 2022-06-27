@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row" style="position: relative;">
        <div class="col-md-12 bg-dark-grey">
            <div class="fix-width">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 m-b-130 m-t-130">
                        <h2 class="work-zone">WorkZone</h2>
                        <p style="font-size: 18px;">Find your desired work place</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 tell-us bg-white">
                <div class="">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-3 align-self-center"><h3><b>Tell us who you are!</b></h3></div>
                        <div class="col-md-3"><img src='{{ asset('images/screen1.jpg') }}' width="200px" alt=""><h6 class="mt-1 text-center">Entrepreneur</h6></div>
                        <div class="col-md-3"><img src='{{ asset('images/screen1.jpg') }}' width="200px" alt=""><h6 class="mt-1 text-center">Software Company</h6></div>
                        <div class="col-md-3"><img src='{{ asset('images/screen1.jpg') }}' width="200px" alt=""><h6 class="mt-1 text-center">Freelancer</h6></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row location pb-5">
                        <div class="col-md-4">
                            <h1 class="card-heading">Our Locations</h1>
                            <p class="text-justify">
                                Every aspect of our workspace is taken care of, from the furniture to the amenities. Walk into work tomorrow knowing that your utilities, security, housekeeping, and secure technology are all taken care of, allowing you to concentrate on your core business.
                            </p>
                            <div class="row">
                                <div class="col-md-4"><a href="" class="btn btn-md bg-dark-grey">Location 1</a></div>
                                <div class="col-md-4"><a href="" class="btn btn-md bg-dark-grey">Location 2</a></div>
                                <div class="col-md-4"><a href="" class="btn btn-md bg-dark-grey">Location 3</a></div>
                            </div>
                        </div>
                    <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div class="white-box mb-3 text-center">
                                <img src="{{ asset('images/screen1.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row pt-5 pb-5">
                    <div class="col-md-6 pb-4">
                        <h1 class="card-heading">Amenities</h1>
                        <p class="text-justify">
                            Find your desired work placeFind your desired work placeFind your desired work placeFind your desireFind your desired work placed work placeFind your desired work placeFind your desired work place.
                        </p>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/staff.png')}}' alt="">
{{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>RFID Access</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/staff.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>RFID Access</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/staff.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>RFID Access</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/expense.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>Unlimited Coffee</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/expense.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>Unlimited Coffee</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/expense.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>Unlimited Coffee</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/assets.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>Air Conditioned Spaces</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/assets.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>Air Conditioned Spaces</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/assets.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>Air Conditioned Spaces</h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/income.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>24/7 access </h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/income.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>24/7 access </h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src='{{asset('images/icon/income.png')}}' alt="">
                                    {{--                                    <i class="far fa-archive"></i>--}}
                                </div>
                                <div class="col-8">
                                    <h4>24/7 access </h4>
                                    <p>Find your desired work placeFind your desired work placeFind your desired work place.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row pt-5 pb-5">
                    <div class="col-md-6 pb-4">
                        <h1 class="card-heading">Our Clients</h1>
                        <p class="text-justify">
                            Every aspect of our workspace is taken care of, from the furniture to the amenities. Walk into work tomorrow knowing that your utilities, security, housekeeping, and secure technology are all taken care of, allowing you to concentrate on your core business.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src='{{ asset('images/users/1.jpg') }}' class="client-img" alt="">
                        </div>
                        <div class="col">
                            <img src='{{ asset('images/users/2.jpg') }}' class="client-img" alt="">
                        </div>
                        <div class="col">
                            <img src='{{ asset('images/users/3.jpg') }}' class="client-img" alt="">
                        </div>
                        <div class="col">
                            <img src='{{ asset('images/users/4.jpg') }}' class="client-img" alt="">
                        </div>
                        <div class="col">
                            <img src='{{ asset('images/users/5.jpg') }}' class="client-img" alt="">
                        </div>
                        <div class="col">
                            <img src='{{ asset('images/users/6.jpg') }}' class="client-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row pt-5 pb-5">
                    <div class="col-md-6 pb-4">
                        <h1 class="card-heading">Testimonials</h1>
                        <p class="text-justify">
                            Every aspect of our workspace is taken care of, from the furniture to the amenities. Walk into work tomorrow knowing that your utilities, security, housekeeping, and secure technology are all taken care of, allowing you to concentrate on your core business.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src='{{ asset('images/users/1.jpg') }}' class="testimonials-img" alt="">
                            <div class="testimonials-desc">
                                <h4>Testimonials</h4>
                                <p>
                                    Every aspect of our workspace is taken care of, from the furniture to the amenities. Walk into work tomorrow knowing that your utilities, security, housekeeping, and secure technology are all taken care of, allowing you to concentrate on your core business.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src='{{ asset('images/users/2.jpg') }}' class="testimonials-img" alt="">
                            <div class="testimonials-desc">
                                <h4>Testimonials</h4>
                                <p>
                                    Every aspect of our workspace is taken care of, from the furniture to the amenities. Walk into work tomorrow knowing that your utilities, security, housekeeping, and secure technology are all taken care of, allowing you to concentrate on your core business.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src='{{ asset('images/users/3.jpg') }}' class="testimonials-img" alt="">
                            <div class="testimonials-desc">
                                <h4>Testimonials</h4>
                                <p>
                                    Every aspect of our workspace is taken care of, from the furniture to the amenities. Walk into work tomorrow knowing that your utilities, security, housekeeping, and secure technology are all taken care of, allowing you to concentrate on your core business.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src='{{ asset('images/users/4.jpg') }}' class="testimonials-img" alt="">
                            <div class="testimonials-desc">
                                <h4>Testimonials</h4>
                                <p>
                                    Every aspect of our workspace is taken care of, from the furniture to the amenities. Walk into work tomorrow knowing that your utilities, security, housekeeping, and secure technology are all taken care of, allowing you to concentrate on your core business.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row pt-5 pb-5">
                    <div class="col-md-6 pb-4">
                        <h1 class="card-heading">Available Offices</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card offer-card">
                                <div class="card-body">
                                    <h4><b>Private Office</b></h4>
                                    <h3><b>Room B12 | E-11</b></h3>
                                    <img src='{{ asset('images/users/2.jpg') }}' class="offer-user-img" alt="">
                                        <div class="row py-4 text-center">
                                            <div class="col-md-4">
                                                <div>
                                                    <img src='{{asset('images/icon/staff.png')}}' alt="">
                                                </div>
                                                <div>
                                                    <p>13 Member</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <img src='{{asset('images/icon/staff.png')}}' alt="">
                                                </div>
                                                <div>
                                                    <p>Air Conditioned</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <img src='{{asset('images/icon/staff.png')}}' alt="">
                                                </div>
                                                <div >
                                                    <p>Storage Space</p>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="pb-3">
                                        <h2>
                                            80,000PKR
                                        </h2>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-4"><a href="">Contact Us</a></div>
                                        <div class="col-4"><a href="">Book a Tour</a></div>
                                        <div class="col-4"><a href="">Book Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card offer-card">
                                <div class="card-body">
                                    <h4><b>Private Office</b></h4>
                                    <h3><b>Room B12 | Blue Area</b></h3>
                                    <img src='{{ asset('images/users/4.jpg') }}' class="offer-user-img" alt="">
                                    <div class="row py-4 text-center">
                                        <div class="col-md-4">
                                            <div>
                                                <img src='{{asset('images/icon/staff.png')}}' alt="">
                                            </div>
                                            <div>
                                                <p>13 Member</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <img src='{{asset('images/icon/staff.png')}}' alt="">
                                            </div>
                                            <div>
                                                <p>Air Conditioned</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <img src='{{asset('images/icon/staff.png')}}' alt="">
                                            </div>
                                            <div >
                                                <p>Storage Space</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-3">
                                        <h2>
                                            80,000PKR
                                        </h2>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-4"><a href="">Contact Us</a></div>
                                        <div class="col-4"><a href="">Book a Tour</a></div>
                                        <div class="col-4"><a href="">Book Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card offer-card">
                                <div class="card-body">
                                    <h4><b>Private Office</b></h4>
                                    <h3><b>Room B12 | Gulberg Green</b></h3>
                                    <img src='{{ asset('images/users/6.jpg') }}' class="offer-user-img" alt="">
                                    <div class="row py-4 text-center">
                                        <div class="col-md-4">
                                            <div>
                                                <img src='{{asset('images/icon/staff.png')}}' alt="">
                                            </div>
                                            <div>
                                                <p>13 Member</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <img src='{{asset('images/icon/staff.png')}}' alt="">
                                            </div>
                                            <div>
                                                <p>Air Conditioned</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <img src='{{asset('images/icon/staff.png')}}' alt="">
                                            </div>
                                            <div >
                                                <p>Storage Space</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-3">
                                        <h2>
                                            80,000PKR
                                        </h2>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-4"><a href="">Contact Us</a></div>
                                        <div class="col-4"><a href="">Book a Tour</a></div>
                                        <div class="col-4"><a href="">Book Now</a></div>
                                    </div>
                                </div>
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


<style>
    .responsive-map iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
     .mapouter {
         position: relative;
         text-align: right;
         width: 100%;
         height: 400px;
     }
    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        width: 100%;
        height: 400px;
    }
    .gmap_iframe {
        height: 400px !important;
    }


    .contact-info {
        display: inline-block;
        width: 100%;
        text-align: center;
        color: #fff;
        margin-bottom: 10px;
    }
    .contact-info-icon {
        margin-bottom: 15px;
    }
    .contact-info-item {
        background: #01023B;
        border: 1px solid #01023B;
        color: #01023B!important;
        padding: 30px 0;
    }
    .contact-info-text h2 {
        color: #01023B;
        text-transform: capitalize;
        font-size: 22px;
        font-weight: 700;
    }
    .contact-info-icon i {
        font-size: 48px;
        color: #fff;
    }
    .contact-info-text h2 {
        color: #fff;
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 600;
        margin-bottom: 10px;
    }
    .contact-info-text .contact_text {
        color: #fff;
        font-size: 16px;
        display: inline-block;
        width: 100%;
    }


</style>

<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section class="startup-holder pb-5">
            <section class="mb-5" style="background-color: #dee2e6">
                <div class="container how-we-are-holder pt-4">
                    <div class="row">
                        <div class="col-6 mx-auto text-center">
                            <h1 class="who-are-you">Who We Are?</h1>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row mx-1">
                        <div class="col-5 border-top" style="background-color: #3b3a3a"> </div>
                        <div class="col-2"> </div>
                        <div class="col-5 border-top" style="background-color: #3b3a3a"> </div>
                    </div>
                </div>
                <div class="container how-we-are-holder py-3">
                    <div class="row">
                        <div class="col-6 mx-auto text-center">
                            <h6 class="h6-text">A national gathering of business incubators, accelerators, co-working spaces, and all parties related or interested in creating the entrepreneurship ecosystem in the Kingdom.</h6>
                            <a class="read-more btn px-sm-5 fw-sm-bold py-sm-3">Read More</a></div>
                    </div>
                </div>
            </section>
            <div class="container">
                <section class="mb-5">
                    <div class="container how-we-are-holder" style="margin-top: -10px">
                        <div class="row">
                            <div class="col-6 mx-auto text-center">
                                <h1 class="who-are-you">What We do?</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row mx-1">
                            <div class="col-5 border-top"> </div>
                            <div class="col-2"> </div>
                            <div class="col-5 border-top"> </div>
                        </div>
                    </div>
                </section>
                <div class="row text-center">
                    <div class="col-10 m-auto">
                        <ul class="startup-nav-holder">
                            @foreach(\App\Enum\AccessTypeEnum::getStartups() as $access_key=>$access_value)
                                @php
                                    $new_startup_for = \App\Services\GeneralService::generateStartupFor($access_key);
                                    $new_start_type = \App\Services\GeneralService::generateStartType($access_key);
                                @endphp
                                @if($new_startup_for!==\App\Enum\StartUpForEnum::MENTOR)
                                    <li class="nav-item  @if($new_startup_for==request()->segment(2) AND $new_start_type==request()->segment(3)) active @endif">
                                        <a href="{{ route('website.startups.services.index',[$new_startup_for,$new_start_type,$startup_id])}}"
                                           class="nav-link">
                                            {{ $access_value }}
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item  @if($new_startup_for==request()->segment(2)) active @endif">
                                        <a href="{{ route('website.startups.services.index',[$new_startup_for,'individual',$startup_id])}}"
                                           class="nav-link">
                                            {{ $access_value }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="startup-holder bg-body py-5">
            <div class="container">
                <div class="row">
                    @if(is_object($startup_services))
                        @if(count($startup_services)>0)
                            @foreach($startup_services as $service)
                                <div class="col-lg-2 col-sm-4 mb-4">
                                    <div class="card p-3 rounded-3 card-shadow h-100">
                                        <img class="card-img-adjust p-2" onerror="this.src='{{ asset('uploads/default_service.png') }}'"
                                             src="{{ asset(sprintf('uploads/%s.png',$service->slug)) }}"
                                             alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h6 class="card-title text-center fs-6">{{ $service->name }}</h6>
                                            @if($service->slug =='incubator')
                                                <a class="learn_more btn rounded-3"
                                                   href="{{route('website.offices.index',$startup_id)}}">{{ trans('general.explore') }}</a>
                                            @else
                                                <a class="learn_more btn rounded-3 card-btn">{{ trans('general.explore') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </section>
        <section class="container p-3 mt-5 mb-5">
            <section class="mb-5">
                <div class="container how-we-are-holder pt-4">
                    <div class="row">
                        <div class="col-6 mx-auto text-center">
                            <h1 class="who-are-you">Where We Locate?</h1>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row mx-1">
                        <div class="col-5 border-top"> </div>
                        <div class="col-2"> </div>
                        <div class="col-5 border-top"> </div>
                    </div>
                </div>
            </section>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=800&amp;height=400&amp;hl=en&amp;q=optimum tech fasilabad&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://mcpenation.com/">Minecraft Website</a>
                </div>
            </div>
        </section>

        <section class="mb-5 pb-4">
            <section class="mb-5">
                <div class="container how-we-are-holder pt-4">
                    <div class="row">
                        <div class="col-6 mx-auto text-center">
                            <h1 class="who-are-you">Contact Information</h1>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row mx-1">
                        <div class="col-5 border-top"> </div>
                        <div class="col-2"> </div>
                        <div class="col-5 border-top"> </div>
                    </div>
                </div>
            </section>
            <section class="contact-page-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info card-shadow">
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-map-marked"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h2 class="contact-head">address</h2>
                                        <span class="contact_text">Optimum Tech </span>
                                        <span class="contact_text">Faisalabad , Pakistan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h2 class="contact-head">E-mail</h2>
                                        <span class="contact_text">optimumtech@info.com</span>
                                        <span class="contact_text">optimumtech@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h2 class="contact-head">office time</h2>
                                        <span class="contact_text">Mon - Thu  9:00 am - 4.00 pm</span>
                                        <span class="contact_text">Thu - Mon  10.00 pm - 5.00 pm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>


    </x-slot>
</x-page-layout>

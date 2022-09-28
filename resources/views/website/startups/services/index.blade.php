<x-page-layout
    :page="$page">
    <x-slot name="content">
        <style>
            input[type="time"]::-webkit-calendar-picker-indicator {
                background: none;
                display: none;
            }
        </style>
        @if($startup_user->about_us)
            <section class="startup-holder pb-5">
                <section class="mb-5" style="background-color: #dee2e6">
                    <div class="container how-we-are-holder pt-4" style="height: 100px;">
                        <div class="row">
                            <div class="col-6 mx-auto text-center">
                                <h1 class="who-are-you">Who We Are?</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row mx-1">
                            <div class="col-5 border-top" style="border-top: 1px solid black!important;"></div>
                            <div class="col-2"></div>
                            <div class="col-5 border-top" style="border-top: 1px solid black!important;"></div>
                        </div>
                    </div>
                    <div class="container how-we-are-holder py-3">
                        <div class="row">
                            <div class="col-6 mx-auto text-center">
                                <h6 class="h6-text">{{ $startup_user->about_us }}</h6>
                                <a class="read-more btn px-sm-5 fw-sm-bold py-sm-3">Read More</a></div>
                        </div>
                    </div>
                </section>
            </section>
        @endif
        <section class="startup-holder">

            <div class="container how-we-are-holder" style="margin-top: -10px">
                <div class="row">
                    <div class="col-12 mb-5 mx-auto text-center">
                        <h1 class="who-are-you">What We do?</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @if(is_object($startup_services))
                        @if(count($startup_services)>0)
                            @foreach($startup_services as $service)
                                <div class="col-lg-2 col-sm-4 mb-4">
                                    <div class="card py-3 rounded-3 card-shadow h-100">
                                        <img class="card-img-adjust py-2 px-1"
                                             onerror="this.src='{{ asset('uploads/default_service.png') }}'"
                                             src="{{ asset(sprintf('uploads/%s.png',$service->slug)) }}"
                                             alt="Card image cap" style="width: 100%;height: 100%;max-height: 100px;">
                                        <hr>
                                        <div class="card-body">
                                            <h6 class="card-title text-center fs-6">{{ $service->name }}</h6>
                                        </div>
                                        <div class="card-footer text-center"
                                             style="background-color: transparent!important;">
                                            @if($service->slug =='incubator')
                                                <a class="btn rounded-3 mb-2"
                                                   href="{{route('website.offices.index',$startup_id)}}">{{ trans('general.explore') }}</a>
                                                <a href="#"
                                                   class="btn rounded-3 mb-2">{{ trans('general.Subscribe') }}</a>
                                            @else
                                                <a class="btn rounded-3 mb-2 card-btn">{{ trans('general.explore') }}</a>
                                                <a class="btn rounded-3 mb-2 card-btn">{{ trans('general.Subscribe') }}</a>
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
        @if($startup_user->google_map_path)
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
                            <div class="col-5 border-top"></div>
                            <div class="col-2"></div>
                            <div class="col-5 border-top"></div>
                        </div>
                    </div>
                </section>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="{{ $startup_user->google_map_path }}"></iframe>
                        <a href="https://mcpenation.com/">Minecraft Website</a>
                    </div>
                </div>
            </section>
        @endif
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
                        <div class="col-5 border-top"></div>
                        <div class="col-2"></div>
                        <div class="col-5 border-top"></div>
                    </div>
                </div>
            </section>
            <section class="contact-page-sec">
                <div class="container">
                    <div class="row justify-content-center">
                        @if($startup_user->address)
                            <div class="col-md-4 top_animation">
                                <div class="contact-info contact-shadow">
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <i class="fas fa-map-marked"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h2 class="contact-head">{{ trans('general.address') }}</h2>
                                            <span class="contact_text text-capitalize">{{ $startup_user->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($startup_user->email)
                            <div class="col-md-4 top_animation">
                                <div class="contact-info contact-shadow">
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h2 class="contact-head">E-mail</h2>
                                            <span class="contact_text">{{ $startup_user->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($startup_user->office_timings)
                            <div class="col-md-4 top_animation">
                                <div class="contact-info contact-shadow">
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h2 class="contact-head">office time</h2>
                                            @foreach($startup_user->office_timings['from_day'] as $office_key=>$office_timing)

                                                <span class="contact_text text-capitalize">
                                                    {{ $startup_user->office_timings['from_day'][$office_key] }}
                                                    -
                                                    {{ $startup_user->office_timings['to_day'][$office_key] }}

                                                    <input type="time" class="ms-2" value="{{ $startup_user->office_timings['start_time'][$office_key] }}" readonly
                                                           style="width: 80px;outline: none;border: none;"/>
                                                    -
                                                    <input type="time" class="ps-2" value="{{ $startup_user->office_timings['end_time'][$office_key] }}" readonly
                                                           style="width: 80px;outline: none;border: none;"/>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </section>
    </x-slot>
</x-page-layout>

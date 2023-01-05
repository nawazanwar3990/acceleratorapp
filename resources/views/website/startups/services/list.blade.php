<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section class="startup-holder py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-10 m-auto">
                        <h1>{{ $service->name }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="startup-holder  bg-body py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card rounded-3">
                            <img class=""
                                 onerror="this.src='{{ asset('uploads/default_service.png') }}'"
                                 src="{{ asset(str_replace('-','_',sprintf('images/services/%s.jpg',$service->slug))) }}"
                                 alt="{{ $service->name }}" style="width:100%;">
                            <div class="card-body">
                                <h4 class="card-title text-center">Economy</h4>
                                <div class="event_desc">
                                    <p>A little description of the event, before you make me this way, you make me this way.</p>
                                </div>
                                <div class="buttons text-center justify-content-center m-auto">
                                    <a class="btn btn-primary site-first-btn-color rounded-3"
                                       href="{{ route('website.startups.services.plans',[$startup_for,$startup_type,$startup_id,$service->id]) }}">
                                        Plans
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card rounded-3">
                            <img class=""
                                 onerror="this.src='{{ asset('uploads/default_service.png') }}'"
                                 src="{{ asset(str_replace('-','_',sprintf('images/services/%s.jpg',$service->slug))) }}"
                                 alt="{{ $service->name }}" style="width:100%;">
                            <div class="card-body">
                                <h4 class="card-title text-center">Basic</h4>
                                <div class="event_desc">
                                    <p>A little description of the event, before you make me this way, you make me this way.</p>
                                </div>
                                <div class="buttons text-center justify-content-center m-auto">
                                    <a class="btn btn-primary site-first-btn-color rounded-3"
                                       href="{{ route('website.startups.services.plans',[$startup_for,$startup_type,$startup_id,$service->id]) }}">
                                        Plans
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card rounded-3">
                            <img class=""
                                 onerror="this.src='{{ asset('uploads/default_service.png') }}'"
                                 src="{{ asset(str_replace('-','_',sprintf('images/services/%s.jpg',$service->slug))) }}"
                                 alt="{{ $service->name }}" style="width:100%;">
                            <div class="card-body">
                                <h4 class="card-title text-center">Premium</h4>
                                <div class="event_desc">
                                    <p>A little description of the event, before you make me this way, you make me this way.</p>
                                </div>
                                <div class="buttons text-center justify-content-center m-auto">
                                    <a class="btn btn-primary site-first-btn-color rounded-3"
                                       href="{{ route('website.startups.services.plans',[$startup_for,$startup_type,$startup_id,$service->id]) }}">
                                        Plans
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-page-layout>

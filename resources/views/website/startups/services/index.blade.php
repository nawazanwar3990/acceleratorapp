<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section class="startup-holder py-5">
            <div class="container">
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
                                    <div class="card p-2 rounded-3 card-shadow h-100">
                                        <img class="card-img-adjust"
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
    </x-slot>
</x-page-layout>

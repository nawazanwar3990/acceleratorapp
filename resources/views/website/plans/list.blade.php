<div class="row px-2">
    @foreach($records as $package)
        <div class="pricing-block px-1 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
            <div class="inner-box">
                <div class="icon-box">
                    <div class="icon-outer"><i class="bx bxs-plane"></i></div>
                </div>
                <div class="price-box">
                    <div class="title">{{ $package->name }}</div>
                    <h4 class="price">{{ \App\Services\GeneralService::get_default_currency() }}</h4>
                    <div class="month">  @if($package->duration_type->slug===\App\Enum\DurationEnum::Daily)
                            Days
                        @elseif($package->duration_type->slug===\App\Enum\DurationEnum::MONTHLY)
                            Months
                        @elseif($package->duration_type->slug===\App\Enum\DurationEnum::WEEKLY)
                            Weeks
                        @elseif($package->duration_type->slug===\App\Enum\DurationEnum::YEARLY)
                            Years
                        @endif : {{ $package->price }}</div>
                </div>
                <ul class="features">
                    @foreach($package->services as $service)
                        @if($service->slug=='incubator')
                            <li class="true">
                                <i class="fa @if($service->pivot->building_limit>0) fa-check-circle @else  fa-times-circle @endif"></i>
                                {{ trans('general.buildings') }}
                                <span
                                    class="w-bold pull-right badge @if($service->pivot->building_limit>0) bg-success @else bg-danger @endif">
                                              {{ ($service->pivot->building_limit)=='∞'?'Unlimited':$service->pivot->building_limit }}
                                          </span>
                            </li>
                            <li class="true">
                                <i class="fa @if($service->pivot->floor_limit>0) fa-check-circle @else  fa-times-circle @endif"></i>
                                {{ trans('general.floors') }}
                                <span
                                    class="w-bold pull-right badge @if($service->pivot->floor_limit>0) bg-success @else bg-danger @endif">
                                              {{ ($service->pivot->floor_limit)=='∞'?'Unlimited':$service->pivot->floor_limit }}
                                          </span>
                            </li>
                            <li class="true">
                                <i class="fa @if($service->pivot->office_limit>0) fa-check-circle @else  fa-times-circle @endif"></i>
                                {{ trans('general.offices') }}
                                <span
                                    class="w-bold pull-right badge @if($service->pivot->office_limit>0) bg-success @else bg-danger @endif">
                                              {{ ($service->pivot->office_limit)=='∞'?'Unlimited':$service->pivot->office_limit }}
                                          </span>
                            </li>
                        @else
                            <li class="true">
                                <i class="fa @if($service->pivot->limit>0) fa-check-circle @else  fa-times-circle site-second-color @endif"></i>
                                {{ $service->name }}
                                <span
                                    class="w-bold pull-right badge @if($service->pivot->limit>0) bg-success @else bg-danger @endif">
                                              {{ ($service->pivot->limit)=='∞'?'Unlimited':$service->pivot->limit }}
                                          </span>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="btn-box">
                    <a href="https://codepen.io/anupkumar92" class="theme-btn">BUY plan</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<section class="bg-white">
    <div class="container how-we-are-holder">
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <h1 class="who-are-you text-uppercase">Customized Packages</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="row mx-1">
            <div class="col-4 border-top"> </div>
            <div class="col-4"> </div>
            <div class="col-4 border-top"> </div>
        </div>
    </section>
    <div class="container how-we-are-holder py-3">
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <h6 class="text-center">If you want to check customized plan then click here.</h6>
                <div class="col-12 mt-1 mb-3 text-center" style="margin-top: -30px!important;">
                    <a onclick="apply_registration('{{ json_encode(\App\Enum\RegisterTypeEnum::getTranslationKeys()) }}')"
                       class="read-more btn py-sm-3 px-sm-5">
                        {{ trans('general.get_started') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

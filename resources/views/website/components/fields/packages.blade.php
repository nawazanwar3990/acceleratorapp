<div class="row px-2">
    @foreach(\App\Services\PackageService::list_packages($package_for) as $package)
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
                    @if(isset($model->user))
                        @php $selected = \App\Models\Subscription::where('subscribed_id',$model->user->id)->exists() @endphp
                    @else
                        @php $selected =0; @endphp
                    @endif
                    <div class="form-check form-switch d-inline-block">
                        {!! Form::radio('subscription_id',$package->id,$selected,['id'=>$package->id,'class'=>'form-check-input',
                            'data-name'=>$package->name,
                            'data-price'=>$package->price,
                             'data-expiry'=>\App\Services\GeneralService::get_remaining_time($package->duration_type->slug,$package->duration_limit, \Carbon\Carbon::now()),
                            'required'
                            ])
                        !!}
                        <label class="form-check-label" for="{{ $package->id }}"></label>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row pt-3 justify-content-center">
    <div class="row pricing-plan">
        @foreach(\App\Services\PackageService::list_packages($package_for) as $package)
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="pricing-box border">
                    <div class="pricing-body border-0">
                        <div class="pricing-header border-0">
                            <h4 class="text-center">{{ $package->name }}</h4>
                            <h2 class="text-center"><span
                                    class="price-sign">{{ \App\Services\GeneralService::get_default_currency() }}</span>{{ $package->price }}
                            </h2>
                            <p class="uppercase">
                                <strong>{{ $package->duration_limit }}</strong>
                                @if($package->duration_type->slug===\App\Enum\DurationEnum::Daily)
                                    Days
                                @elseif($package->duration_type->slug===\App\Enum\DurationEnum::MONTHLY)
                                    Months
                                @elseif($package->duration_type->slug===\App\Enum\DurationEnum::WEEKLY)
                                    Weeks
                                @elseif($package->duration_type->slug===\App\Enum\DurationEnum::YEARLY)
                                    Years
                                @endif
                            </p>
                        </div>
                        <div class="price-table-content">
                            @foreach($package->services as $service_name=>$service_limit)
                                <div class="row mx-1 border-bottom" style="padding: 10px 0;">
                                    <div class="col-8 align-self-center fs-13" style="text-align: left !important;">
                                        {{ $service_name }}
                                    </div>
                                    <div class="col-4 align-self-center fs-13" style="text-align: right !important;">
                                        <span
                                            class="w-bold pull-right badge @if($service_limit>0) bg-success @else bg-danger @endif">
                                            {{ $service_limit=='∞'?trans('general.unlimited'):$service_limit }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="price-row justify-content-center">
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
            </div>
        @endforeach
    </div>
</div>

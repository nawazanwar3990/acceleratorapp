<div class="row pt-3 justify-content-center">
    <div class="row pricing-plan">
        @foreach(\App\Services\PackageService::list_packages($model->services,\App\Enum\PackageTypeEnum::BUSINESS_ACCELERATOR) as $package)
            <div class="col-md-4 col-xs-12 col-sm-4 no-padding">
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
                        <div class="price-table-content" style="height: 350px;">
                            @foreach($package->services as $service)
                                <div class="price-row" style="padding: 10px 10px;font-size: 13px;text-align: left;">
                                    <i class="bx bx-check text-success"></i> {{ $service->pivot->limit }} {{ $service->name }}
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

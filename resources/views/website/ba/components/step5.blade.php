<div class="row pt-3 justify-content-center">
    <div class="row pricing-plan">
        @foreach(\App\Services\PackageService::list_packages() as $package)
            <div class="col-md-4 col-xs-12 col-sm-4 no-padding">
                <div class="pricing-box @if($loop->first) featured-plan @endif">
                    <div class="pricing-body b-l">
                        <div class="pricing-header">
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
                            @foreach($package->services as $service)
                                <div class="price-row" style=";padding: 10px 0;font-size: 13px;"><i
                                        class="bx bx-check text-success"></i> 3 {{ $service->name }}</div>
                            @endforeach
                            <div class="price-row justify-content-center">
                                <div class="form-check form-switch d-inline-block">
                                    {!! Form::radio('subscription_id',$package->id,false,['id'=>$package->id,'class'=>'form-check-input','required']) !!}
                                    <label class="form-check-label" for="{{ $package->id }}"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

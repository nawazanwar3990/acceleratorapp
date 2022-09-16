<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section class="plan-holder">
            <div class="container">
                <div class="row pt-3 justify-content-center">
                    <div class="row pricing-plan">
                        @foreach($plans as $plan)
                            <div class="col-md-3 col-xs-3 col-sm-3 mb-3 pt-2">
                                <div class="pricing-box site-border">
                                    <div class="pricing-body pb-0 border-0">
                                        <div class="pricing-header border-0">
                                            <h3 class="text-center pt-3 fw-bold">{{ $plan->name }}</h3>
                                            <h2 class="text-center">
                                            <span
                                                class="price-sign fs-13">{{ \App\Services\GeneralService::get_default_currency() }}</span><br>
                                                {{ $plan->price }}
                                            </h2>
                                            <p class="uppercase mx-3 text-center">
                                                <strong>{{ $plan->duration }}</strong>
                                                @if($plan->duration>1)
                                                    {{ trans('general.months') }}
                                                @else
                                                    {{ trans('general.month') }}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="price-table-content px-2">
                                            <h5 class="fw-bold site-border-bottom pb-2">{{ trans('general.basic_service') }}</h5>
                                            <div class="row mx-1 pb-2">
                                                @foreach($plan->basic_services as $service)
                                                    <div class="col align-self-center my-2">
                                                        <a class="btn btn-xs site-second-btn-color"
                                                           style="border-radius: 5px;font-size: 10px;padding: 5px;">
                                                            {{ $service->name }}
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="price-table-content px-2 mt-2">
                                            <h5 class="fw-bold site-border-bottom pb-2">{{ trans('general.additional_service') }}</h5>
                                            <div class="row mx-1 pb-2">
                                                @foreach($plan->additional_services as $service)
                                                    <div class="col align-self-center my-2">
                                                        <a class="btn btn-xs site-second-btn-color"
                                                           style="border-radius: 5px;font-size: 10px;padding: 5px;">
                                                            {{ $service->name }}
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="price-row justify-content-center py-3" style="text-align: center;">
                                            @guest
                                                <a class="btn site-first-btn-color" style="border-radius: 5px;"
                                                   href="{{ route('website.customers.create',[\App\Enum\StepEnum::USER_INFO]) }}">
                                                    {{ trans('general.login_to_subscribed') }}
                                                </a>
                                            @else
                                                <a class="btn site-first-btn-color" style="border-radius: 5px;"
                                                   onclick="apply_office_plan_subscription(
                                               '{{$plan->id}}',
                                               '{{ auth()->id() }}',
                                               '{{$office->getOwnerId()}}',
                                               '{{$office->id}}',
                                               );">
                                                    {{ trans('general.apply_subscription') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('components.common-scripts')
    </x-slot>
</x-page-layout>

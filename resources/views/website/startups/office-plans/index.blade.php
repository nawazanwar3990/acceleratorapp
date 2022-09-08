<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div id="pricing" class="section is-medium">
            <div class="container">
                <div class="section-title has-text-centered">
                    <div class="title-wrap">
                        <h3 class="title title-alt is-3">Available Plans</h3>
                        <p class="subtitle is-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="pricing-wrapper">
                    <div class="columns">
                        @forelse($plans as $plan)
                            <div class="column is-4">
                                <div class="pricing-box">
                                    <img src="assets/img/graphics/icons/ecommerce-pricing-icon-1-green.svg"
                                         data-base-url="assets/img/graphics/icons/ecommerce-pricing-icon-1"
                                         data-extension=".svg" alt="">
                                    <h3>{{$plan->name}}</h3>
                                    <p>For startup Offices</p>
                                    <div class="price">
                                        <div class="price-number">
                                            <span
                                                class="mr-2 pr-10">{{\App\Services\GeneralService::get_default_currency()}}{{$plan->price}}</span>
                                        </div>
                                    </div>
                                    <p class="border-bottom pb-3 text-start">
                                        <strong>{{ trans('general.basic_service') }}</strong> <span
                                            class="pull-right"> {{ count($plan->basic_services) }}</span>
                                    </p>
                                    <p class="border-bottom pb-3 text-start">
                                        <strong>{{ trans('general.additional_service') }}</strong> <span
                                            class="pull-right"> {{ count($plan->additional_services) }}</span>
                                    </p>
                                    @guest
                                        <a class="button primary-btn raised is-fullwidth"
                                           href="{{ route('website.customers.create',[\App\Enum\StepEnum::USER_INFO]) }}">
                                            {{ trans('general.login_to_subscribed') }}
                                        </a>
                                    @else
                                        <a class="button primary-btn raised is-fullwidth"
                                           onclick="apply_office_plan_subscription(
                                               '{{$plan->id}}',
                                               '{{ auth()->id() }}',
                                              '{{$office->id}}',
                                               );">
                                            {{ trans('general.apply_subscription') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        @include('components.common-scripts')
    </x-slot>
</x-page-layout>

<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div class="container pb-5">
            <div class="pricing-wrapper">
                <div class="pricing-tabs mb-0">
                 {{--   @foreach(\App\Enum\AccessTypeEnum::getStartups() as $access_key=>$access_value)
                        @php
                            $new_startup_for = \App\Services\GeneralService::generateStartupFor($access_key);
                            $new_start_type = \App\Services\GeneralService::generateStartType($access_key);
                        @endphp
                        <a class="tab-item @if($new_startup_for==$startup_for AND $new_start_type==$startup_type) is-active @endif"
                           href="{{ route('website.startups.index',[$new_startup_for,$new_start_type]) }}">
                            <img src="{{ asset('assets/img/graphics/icons/custom-pricing-icon-5-green.svg') }}"
                                 alt="{{$access_value}}">
                            <span>{{ $access_value }}</span>
                        </a>
                    @endforeach--}}
                </div>
            </div>
            <div class="
            columns
            services-cards
            is-minimal is-vcentered is-gapless is-multiline
          ">
                <div class="columns is-multiline">
                    @include(sprintf('website.startups.services.components.%s-%s',$startup_for,$startup_type))
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>

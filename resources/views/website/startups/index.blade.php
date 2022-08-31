<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div class="container">
            <div class="pricing-wrapper">
                <div class="pricing-tabs">
                    @foreach(\App\Enum\AccessTypeEnum::getTranslationKeys() as $access_key=>$access_value)
                        <a class="tab-item @if($loop->first) is-active @endif"
                           href="">
                            <img src="{{ asset('assets/img/graphics/icons/custom-pricing-icon-5-green.svg') }}"
                                 alt="{{$access_value}}">
                            <span>{{ $access_value }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>

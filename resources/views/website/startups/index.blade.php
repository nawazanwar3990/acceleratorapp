<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div class="container pb-5">
            <div class="pricing-wrapper">
                <div class="pricing-tabs mb-0">
                    @foreach(\App\Enum\AccessTypeEnum::getStartups() as $access_key=>$access_value)
                        <a class="tab-item @if($access_key==$type) is-active @endif"
                           href="{{ route('website.startups.index',['type'=>$access_key]) }}">
                            <img src="{{ asset('assets/img/graphics/icons/custom-pricing-icon-5-green.svg') }}"
                                 alt="{{$access_value}}">
                            <span>{{ $access_value }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="columns is-vcentered has-text-centered is-multiline is-justify-content-center">
                @if(request()->has('type'))
                    @include(sprintf('website.startups.components.%s',str_replace('_','-',request()->query('type'))))
                @else
                    @include('website.startups.components.ba-individual')
                @endif
            </div>
        </div>
    </x-slot>
</x-page-layout>

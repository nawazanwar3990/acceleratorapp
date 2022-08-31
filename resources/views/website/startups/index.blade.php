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
            <div class="
            columns
            services-cards
            is-minimal is-vcentered is-gapless is-multiline
          ">
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered">
                        <div class="card-icon">
                            <i class="im im-icon-Two-Windows"></i>
                        </div>
                        <div class="card-title">
                            <h4>Web development</h4>
                        </div>
                        <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered">
                        <div class="card-icon">
                            <i class="im im-icon-Smartphone-4"></i>
                        </div>
                        <div class="card-title">
                            <h4>Mobile development</h4>
                        </div>
                        <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered">
                        <div class="card-icon">
                            <i class="im im-icon-T-Shirt"></i>
                        </div>
                        <div class="card-title">
                            <h4>Branding</h4>
                        </div>
                        <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered mb-20">
                        <div class="card-icon">
                            <i class="im im-icon-Laptop-Phone"></i>
                        </div>
                        <div class="card-title">
                            <h4>Responsive design</h4>
                        </div>
                        <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered mb-20">
                        <div class="card-icon">
                            <i class="im im-icon-Cart-Quantity"></i>
                        </div>
                        <div class="card-title">
                            <h4>E-Commerce</h4>
                        </div>
                        <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered mb-20">
                        <div class="card-icon">
                            <i class="im im-icon-Colosseum"></i>
                        </div>
                        <div class="card-title">
                            <h4>Graphic design</h4>
                        </div>
                        <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="container">
                @if(request()->has('type'))
                    <div class="columns is-multiline">
                        @include(sprintf('website.startups.components.%s',str_replace('_','-',request()->query('type'))))
                    </div>
                @endif
            </div>--}}
        </div>
    </x-slot>
</x-page-layout>

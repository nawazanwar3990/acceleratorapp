<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section class="startup-holder py-5" style="background: url('/uploads/startup.PNG')">
            <div class="container">
                <div class="row text-center">
                    <div class="col-10 m-auto">
                        <ul class="startup-nav-holder">
                            @foreach(\App\Enum\AccessTypeEnum::getStartups() as $access_key=>$access_value)
                                @php
                                    $new_startup_for = \App\Services\GeneralService::generateStartupFor($access_key);
                                    $new_start_type = \App\Services\GeneralService::generateStartType($access_key);
                                @endphp
                                <li class="nav-item  @if($new_startup_for==$startup_for AND $new_start_type==$startup_type) active @endif">
                                    <a href="{{ route('website.startups.index',[$new_startup_for,$new_start_type])}}"
                                       class="nav-link">
                                        {{ $access_value }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="startup-holder  bg-body py-5">
            <div class="container">
                <div class="row">
                    @if($startup_type)
                        @include(sprintf('website.startups.components.%s-%s',$startup_for,$startup_type))
                    @else
                        @include(sprintf('website.startups.components.%s',$startup_for))
                    @endif
                </div>
            </div>
        </section>
    </x-slot>
</x-page-layout>

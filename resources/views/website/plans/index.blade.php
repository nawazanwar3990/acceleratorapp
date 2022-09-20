<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section class="startup-holder py-5" style="">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12 m-auto">
                        <ul class="startup-nav-holder">
                            @foreach(\App\Enum\AccessTypeEnum::getStartups() as $access_key=>$access_value)
                                @php
                                    $new_plan_for = \App\Services\GeneralService::generateStartupFor($access_key);
                                    $new_plan_type = \App\Services\GeneralService::generateStartType($access_key);
                                @endphp
                         {{--  {{ $new_plan_for }} {{$new_plan_type}}--}}
                                <li class="nav-item  @if($new_plan_for==request()->segment(2) AND $new_plan_type==request()->segment(3)) active @endif">
                                    <a href="{{ route('website.plans.index',[$new_plan_for,$new_plan_type])}}"
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
              @include('website.plans.list')
                </div>
            </div>
        </section>
    </x-slot>
</x-page-layout>

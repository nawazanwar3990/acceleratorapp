<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach(\App\Enum\LeftNavBar\MainNavEnum::getTranslationKeys() as $key=>$value)
                    @if($key == \App\Enum\KeywordEnum::DASHBOARD)
                        @can('hasModuleAccess',$key)
                            <li>
                                <a class="waves-effect waves-dark"
                                   href="{{ route('dashboard.index') }}">
                                    {!! \App\Enum\LeftNavBar\MainNavEnum::getIcon($key) !!} <span class="hide-menu">
                                    {{ $value }}
                                </a>
                            </li>
                        @endcan
                    @else
                        @can('hasModuleAccess',$key)
                            <li>
                                <a class="has-arrow waves-effect waves-dark"
                                   href="javascript:void(0)"
                                   aria-expanded="false">
                                    {!! \App\Enum\LeftNavBar\MainNavEnum::getIcon($key) !!}
                                    <span class="hide-menu">{{ $value }}</span>
                                </a>
                                @switch($key)
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::USER_MANAGEMENT)
                                    @include('dashboard.components.left-nav-bar.user-management')
                                    @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::SERVICE_MANAGEMENT)
                                    @include('dashboard.components.left-nav-bar.service-management')
                                    @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::PLAN_MANAGEMENT)
                                    @include('dashboard.components.left-nav-bar.plan-management')
                                    @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::EVENT_MANAGEMENT)
                                    @include('dashboard.components.left-nav-bar.event-management')
                                    @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::FLAT_MANAGEMENT)
                                    @include('dashboard.components.left-nav-bar.flat-management')
                                    @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::SYSTEM_CONFIGURATION)
                                    @include('dashboard.components.left-nav-bar.system-configuration')
                                    @break
                                @endswitch
                            </li>
                        @endcan
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</aside>

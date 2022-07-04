<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach(\App\Enum\LeftNavBar\MainNavEnum::getTranslationKeys() as $key=>$value)
                    @if($key==\App\Enum\KeyWordEnum::DASHBOARD)
                        @can('hasModuleAccess',$key)
                            <li>
                                <a class="waves-effect waves-dark"
                                   href="{{ \App\Enum\LeftNavBar\MainNavEnum::getRoute($key) }}">
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
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::PACKAGE_MANAGEMENT)
                                        @include('dashboard.components.left-nav-bar.package-management')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::USER_MANAGEMENT)
                                        @include('dashboard.components.left-nav-bar.user-management')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::ADMIN_MANAGEMENT)
                                        @include('dashboard.components.left-nav-bar.admin-management')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::CUSTOMER_MANAGEMENT)
                                        @include('dashboard.components.left-nav-bar.customer-management')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::SERVICE_MANAGEMENT)
                                        @include('dashboard.components.left-nav-bar.service-management')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::FREELANCERS_PORTAL)
                                        @include('dashboard.components.left-nav-bar.freelancer-portal')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::PLAN_MANAGEMENT)
                                        @include('dashboard.components.left-nav-bar.plan-management')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::EVENT_MANAGEMENT)
                                        @include('dashboard.components.left-nav-bar.event-management')
                                        @break
                                    @case(\App\Enum\LeftNavBar\MainNavEnum::CO_WORKING_SPACE)
                                        @include('dashboard.components.left-nav-bar.working-spaces')
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

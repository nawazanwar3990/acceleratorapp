<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
                    @foreach(\App\Enum\LeftNavBar\AdminNavEnum::getTranslationKeys() as $key=>$value)
                        @if(in_array($key,[
                            \App\Enum\KeyWordEnum::PAYMENT_RECEIPT,
                            \App\Enum\KeyWordEnum::PACKAGE,
                            \App\Enum\KeyWordEnum::SUBSCRIPTION,
                            \App\Enum\KeyWordEnum::MENTOR,
                            \App\Enum\KeyWordEnum::FREELANCER,
                            \App\Enum\KeyWordEnum::SERVICE,
                            \App\Enum\KeyWordEnum::BA
                        ]))
                            <li>
                                <a class="waves-effect waves-dark has-arrow"
                                   href="{{ \App\Enum\LeftNavBar\AdminNavEnum::getRoute($key) }}">
                                    {!! \App\Enum\LeftNavBar\AdminNavEnum::getIcon($key) !!} <span class="hide-menu">
                                    {{ $value }}
                                </a>
                                <ul aria-expanded="false" class="collapse">
                                    @if($key==\App\Enum\KeyWordEnum::SUBSCRIPTION)
                                        @include('dashboard.components.left-nav-bar.subscript-types')
                                    @endif
                                    @if($key==\App\Enum\KeyWordEnum::PAYMENT_RECEIPT)
                                        @include('dashboard.components.left-nav-bar.receipt-types')
                                    @endif
                                    @if($key==\App\Enum\KeyWordEnum::BA)
                                        @include('dashboard.components.left-nav-bar.accelerator-type')
                                    @endif
                                    @if($key==\App\Enum\KeyWordEnum::FREELANCER)
                                        @include('dashboard.components.left-nav-bar.freelaner-types')
                                    @endif
                                    @if($key==\App\Enum\KeyWordEnum::SERVICE)
                                        @include('dashboard.components.left-nav-bar.service-types')
                                    @endif
                                    @if($key==\App\Enum\KeyWordEnum::PACKAGE)
                                        @include('dashboard.components.left-nav-bar.package-type')
                                    @endif
                                    @if($key==\App\Enum\KeyWordEnum::MENTOR)
                                        @include('dashboard.components.left-nav-bar.mentor-types')
                                    @endif
                                </ul>
                            </li>
                        @else
                            <li>
                                <a class="waves-effect waves-dark"
                                   href="{{ \App\Enum\LeftNavBar\AdminNavEnum::getRoute($key) }}">
                                    {!! \App\Enum\LeftNavBar\AdminNavEnum::getIcon($key) !!} <span class="hide-menu">
                                    {{ $value }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                    @foreach(\App\Enum\LeftNavBar\BANavEnum::getTranslationKeys() as $key=>$value)
                        @if(in_array($key,[
                                \App\Enum\LeftNavBar\BANavEnum::PLAN,
                                \App\Enum\LeftNavBar\BANavEnum::SERVICE,
                                \App\Enum\LeftNavBar\BANavEnum::SUBSCRIPTION
                         ]))
                            <li>
                                <a class="waves-effect waves-dark"
                                   href="{{ \App\Enum\LeftNavBar\BANavEnum::getRoute($key) }}">
                                    {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($key) !!} <span class="hide-menu">
                                    {{ $value }}
                                </a>
                            </li>
                        @else
                            @if(in_array($value,\App\Services\PersonService::getBaServices()))
                                @if($value=='Incubator')
                                    <li>
                                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                           aria-expanded="false">
                                            <i class="ti-settings"></i>
                                            <span class="hide-menu"> {{ $value }}</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse">
                                            @include('dashboard.components.left-nav-bar.incubator-types')
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a class="waves-effect waves-dark"
                                           href="{{ \App\Enum\LeftNavBar\BANavEnum::getRoute($key) }}">
                                            {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($key) !!} <span
                                                class="hide-menu">
                                            {{ $value }}
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endif
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>
</aside>

<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
{{--                <li>--}}
{{--                    <input id="nav-search-box" name="nav-search-box" type="text" class="form-control nav-search-box" placeholder="Search Navigation...">--}}
{{--                </li>--}}
                @foreach(\App\Enum\Nav\MainNavEnum::getTranslationKeys() as $key=>$value)
                    @if($key == \App\Enum\KeywordEnum::DASHBOARD)
                        @can('hasModuleAccess',$key)
                            <li>
                                <a class="waves-effect waves-dark"
                                   href="{{ route('dashboard') }}">
                                    {!! \App\Enum\Nav\MainNavEnum::getIcon($key) !!} <span class="hide-menu">
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
                                    {!! \App\Enum\Nav\MainNavEnum::getIcon($key) !!}
                                    <span class="hide-menu">{{ $value }}</span>
                                </a>
                                @switch($key)
                                    @case(\App\Enum\Nav\MainNavEnum::DEFINITIONS)
                                        @include('components.nav.definitions')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::DEVICE_MANAGEMENT)
                                        @include('components.nav.device-management')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::BUILDING_UNITS)
                                        @include('components.nav.building-units')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::HUMAN_RESOURCE)
                                        @include('components.nav.human-resource')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::SALES)
                                        @include('components.nav.sales-rent')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::INCOME_EXPENSE)
                                        @include('components.nav.income-expense')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::ACCOUNTS)
                                        @include('components.nav.accounts')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::REPORTS)
                                        @include('components.nav.reports')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::INVENTORY)
                                        @include('components.nav.inventory')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::AUTHORIZATION)
                                        @include('components.nav.authorization')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::PRINT)
                                        @include('components.nav.print')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::SETTINGS)
                                        @include('components.nav.settings')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::FRONT_DESK)
                                        @include('components.nav.front-desk')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::FIXED_ASSETS)
                                        @include('components.nav.fixed_assets')
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

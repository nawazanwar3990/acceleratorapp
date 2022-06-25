<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach(\App\Enum\Nav\MainNavEnum::getTranslationKeys() as $key=>$value)
                    @if($key == \App\Enum\KeywordEnum::DASHBOARD)
                        @can('hasModuleAccess',$key)
                            <li>
                                <a class="waves-effect waves-dark"
                                   href="{{ route('dashboard.index') }}">
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
                                    @case(\App\Enum\Nav\MainNavEnum::USER_MANAGEMENT)
                                    @include('components.nav.human-resource')
                                    @break
                                    @case(\App\Enum\Nav\MainNavEnum::SERVICE_MANAGEMENT)
                                    @include('components.nav.service')
                                    @break
                                    @case(\App\Enum\Nav\MainNavEnum::PLAN_MANAGEMENT)
                                    @include('components.nav.plans')
                                    @break
                                    @case(\App\Enum\Nav\MainNavEnum::EVENT_MANAGEMENT)
                                    @include('components.nav.event')
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

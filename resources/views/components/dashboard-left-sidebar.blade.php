<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
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
                             {{--  @switch($key)
                                    @case(\App\Enum\Nav\MainNavEnum::DEFINITION)
                                        @include('components.nav.definitions')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::SERVICE_CREATION)
                                        @include('components.nav.device-management')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::USER_MANAGEMENT_SYSTEM)
                                        @include('components.nav.human-resource')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::INVOICE_TICKET_AND_ACCOUNTING)
                                        @include('components.nav.accounts')
                                        @break
                                    @case(\App\Enum\Nav\MainNavEnum::REPORTING_AND_STAT_HANDLING)
                                        @include('components.nav.reports')
                                        @break
                                @endswitch--}}
                            </li>
                        @endcan
                    @endif
                @endforeach
            </ul>

        </nav>
    </div>
</aside>

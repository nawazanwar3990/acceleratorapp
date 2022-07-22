<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach(\App\Enum\LeftNavBar\MainNavEnum::getTranslationKeys() as $key=>$value)
                    @if($key===\App\Enum\KeyWordEnum::INCUBATOR)
                        @can('hasModuleAccess',$key)
                            <li>
                                <a class="has-arrow waves-effect waves-dark"
                                   href="javascript:void(0)"
                                   aria-expanded="false">
                                    {!! \App\Enum\LeftNavBar\MainNavEnum::getIcon($key) !!}
                                    <span class="hide-menu">{{ $value }}</span>
                                </a>
                                @include('dashboard.components.left-nav-bar.working-spaces')
                            </li>
                        @endcan
                    @else
                        @can('hasModuleAccess',$key)
                            <li>
                                <a class="waves-effect waves-dark"
                                   href="{{ \App\Enum\LeftNavBar\MainNavEnum::getRoute($key) }}">
                                    {!! \App\Enum\LeftNavBar\MainNavEnum::getIcon($key) !!} <span class="hide-menu">
                                    {{ $value }}
                                </a>
                            </li>
                        @endcan
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</aside>

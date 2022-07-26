<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
                    @foreach(\App\Enum\LeftNavBar\AdminNavEnum::getTranslationKeys() as $key=>$value)
                        <li>
                            <a class="waves-effect waves-dark"
                               href="{{ \App\Enum\LeftNavBar\AdminNavEnum::getRoute($key) }}">
                                {!! \App\Enum\LeftNavBar\AdminNavEnum::getIcon($key) !!} <span class="hide-menu">
                                {{ $value }}
                            </a>
                        </li>
                    @endforeach
                @endif
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                    @foreach(\App\Enum\LeftNavBar\BANavEnum::getTranslationKeys() as $key=>$value)
                        <li>
                            <a class="waves-effect waves-dark"
                               href="{{ \App\Enum\LeftNavBar\BANavEnum::getRoute($key) }}">
                                {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($key) !!} <span class="hide-menu">
                                {{ $value }}
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>
</aside>

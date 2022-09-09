@foreach(\App\Enum\LeftNavBar\AdminNavEnum::getTranslationKeys() as $key=>$value)
    @if(in_array($key,[
        \App\Enum\KeyWordEnum::PAYMENT_RECEIPT,
        \App\Enum\KeyWordEnum::PACKAGE,
        \App\Enum\KeyWordEnum::SUBSCRIPTION,
        \App\Enum\KeyWordEnum::MENTOR,
        \App\Enum\KeyWordEnum::FREELANCER,
        \App\Enum\KeyWordEnum::SERVICE,
        \App\Enum\KeyWordEnum::BA,
        \App\Enum\KeyWordEnum::CMS
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
                @if($key==\App\Enum\KeyWordEnum::CMS)
                    @include('dashboard.components.left-nav-bar.cms')
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

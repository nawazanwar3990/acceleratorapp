@foreach(\App\Enum\LeftNavBar\BANavEnum::getCommonNavs() as $common)
    @if($common===\App\Enum\LeftNavBar\BANavEnum::SERVICE)
        <li>
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
               aria-expanded="false">
                {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($common) !!}
                <span
                    class="hide-menu">  {{ \App\Enum\LeftNavBar\BANavEnum::getTranslationKeyBy($common) }}</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                @include('dashboard.components.left-nav-bar.service-types')
            </ul>
        </li>
    @elseif($common===\App\Enum\LeftNavBar\BANavEnum::SUBSCRIPTION)
        <li>
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
               aria-expanded="false">
                {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($common) !!}
                <span
                    class="hide-menu">  {{ \App\Enum\LeftNavBar\BANavEnum::getTranslationKeyBy($common) }}</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                @include('dashboard.components.left-nav-bar.subscript-types')
            </ul>
        </li>
    @elseif($common===\App\Enum\LeftNavBar\BANavEnum::PAYMENT_RECEIPT)
        <li>
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
               aria-expanded="false">
                {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($common) !!}
                <span
                    class="hide-menu">  {{ \App\Enum\LeftNavBar\BANavEnum::getTranslationKeyBy($common) }}</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                @include('dashboard.components.left-nav-bar.receipt-types')
            </ul>
        </li>
    @else
        <li>
            <a class="waves-effect waves-dark"
               href="{{ \App\Enum\LeftNavBar\BANavEnum::getRoute($common) }}">
                {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($common) !!} <span class="hide-menu">
                {{ \App\Enum\LeftNavBar\BANavEnum::getTranslationKeyBy($common) }}
            </a>
        </li>
    @endif
@endforeach
@foreach(\App\Services\PersonService::get_current_ba_package_services() as $key=>$value)
    @if($key===\App\Enum\LeftNavBar\BANavEnum::INCUBATOR)
        <li>
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
               aria-expanded="false">
                {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($common) !!}
                <span
                    class="hide-menu">  {{ \App\Enum\LeftNavBar\BANavEnum::getTranslationKeyBy($key) }}</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                @include('dashboard.components.left-nav-bar.incubator-types')
            </ul>
        </li>
    @else
        <li>
            <a class="waves-effect waves-dark"
               href="{{ \App\Enum\LeftNavBar\BANavEnum::getRoute($key) }}">
                {!! \App\Enum\LeftNavBar\BANavEnum::getIcon($key) !!} <span class="hide-menu">
                {{ \App\Enum\LeftNavBar\BANavEnum::getTranslationKeyBy($key) }}
            </a>
        </li>
    @endif
@endforeach

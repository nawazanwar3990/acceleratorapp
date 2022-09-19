@foreach(\App\Enum\LeftNavBar\FreelancerNavEnum::getCommonNavs() as $common)
    @if($common===\App\Enum\LeftNavBar\BANavEnum::PAYMENT_RECEIPT)
        <li>
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
               aria-expanded="false">
                <i class="ti-settings"></i>
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
               href="{{ \App\Enum\LeftNavBar\FreelancerNavEnum::getRoute($common) }}">
                {!! \App\Enum\LeftNavBar\FreelancerNavEnum::getIcon($common) !!} <span class="hide-menu">
                {{ \App\Enum\LeftNavBar\FreelancerNavEnum::getTranslationKeyBy($common) }}
            </a>
        </li>
    @endif
@endforeach

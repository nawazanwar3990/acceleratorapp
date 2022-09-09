@foreach(\App\Enum\LeftNavBar\CustomerNavEnum::getTranslationKeys() as $key=>$value)
    @if(in_array($key,[
        \App\Enum\LeftNavBar\CustomerNavEnum::SUBSCRIPTION,
        \App\Enum\LeftNavBar\CustomerNavEnum::PAYMENT_RECEIPT
    ]))
        <li>
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
               aria-expanded="false">
                <i class="ti-settings"></i>
                <span
                    class="hide-menu">  {{ \App\Enum\LeftNavBar\BANavEnum::getTranslationKeyBy($key) }}</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                @if($key==\App\Enum\LeftNavBar\CustomerNavEnum::SUBSCRIPTION)
                    @include('dashboard.components.left-nav-bar.subscript-types')
                @endif
                @if($key==\App\Enum\LeftNavBar\CustomerNavEnum::PAYMENT_RECEIPT)
                    @include('dashboard.components.left-nav-bar.receipt-types')
                @endif
            </ul>
        </li>
    @endif
@endforeach

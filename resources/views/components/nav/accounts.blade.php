<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\AccountsNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                @if($key==\App\Enum\Nav\AccountsNavEnum::VOUCHERS)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.vouchers')
                @elseif($key==\App\Enum\Nav\AccountsNavEnum::LEDGERS)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.ledgers')
                @elseif($key==\App\Enum\Nav\AccountsNavEnum::PAYROLL)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.payroll')
                @elseif($key==\App\Enum\Nav\AccountsNavEnum::EMPLOYEE_LOAN)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.employee-loan')
                @else
                    <a href="{{ \App\Enum\Nav\AccountsNavEnum::getRoute($key) }}">
                        {!! $value !!}
                    </a>
                @endif
            @endcan
        </li>
    @endforeach
</ul>

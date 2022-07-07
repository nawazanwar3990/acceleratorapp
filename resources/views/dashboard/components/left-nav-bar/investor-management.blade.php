<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\InvestorNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\InvestorNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

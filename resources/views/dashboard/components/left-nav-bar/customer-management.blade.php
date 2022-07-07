<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\CustomerNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\CustomerNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

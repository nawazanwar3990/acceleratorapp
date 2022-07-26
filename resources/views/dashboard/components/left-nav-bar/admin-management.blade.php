<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\BANavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\BANavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

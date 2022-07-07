<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\ServiceNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\ServiceNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

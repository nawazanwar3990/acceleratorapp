<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\AdminNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\AdminNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

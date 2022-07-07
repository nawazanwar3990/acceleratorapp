<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\PlanNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\PlanNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

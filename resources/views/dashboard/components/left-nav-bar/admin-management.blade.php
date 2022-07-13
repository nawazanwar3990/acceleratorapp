<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\BusinessAcceleratorNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\BusinessAcceleratorNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

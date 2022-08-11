<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\IncubatorNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\LeftNavBar\IncubatorNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

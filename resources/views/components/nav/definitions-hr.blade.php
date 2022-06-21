<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\HrDefinitionsNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\HrDefinitionsNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

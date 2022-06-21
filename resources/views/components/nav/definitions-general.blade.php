<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\GeneralDefinitionsNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\GeneralDefinitionsNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\BuildingUnitsNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\BuildingUnitsNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

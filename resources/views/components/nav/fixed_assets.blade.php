<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\FixedAssetsNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\FixedAssetsNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\LedgersNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\LedgersNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\AuthorizationNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\AuthorizationNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

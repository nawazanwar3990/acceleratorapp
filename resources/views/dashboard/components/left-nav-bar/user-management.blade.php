<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\UserNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\LeftNavBar\UserNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

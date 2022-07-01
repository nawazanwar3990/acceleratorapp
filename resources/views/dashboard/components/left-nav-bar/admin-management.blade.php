<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\AdminManagementNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\LeftNavBar\AdminManagementNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

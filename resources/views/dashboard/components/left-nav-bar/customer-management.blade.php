<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\CustomerManagementNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\LeftNavBar\CustomerManagementNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

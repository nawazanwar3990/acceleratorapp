<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\SaleManagementNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\LeftNavBar\SaleManagementNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>
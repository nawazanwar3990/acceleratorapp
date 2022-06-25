<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\UserManagementNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\LeftNavBar\UserManagementNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>
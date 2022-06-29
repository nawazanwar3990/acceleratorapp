<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\ServiceManagementNavEnum::getTranslationKeys() as $key=>$value)
                @can('hasModuleAccess',$key)
            <li>
                    <a href="{{ \App\Enum\LeftNavBar\ServiceManagementNavEnum::getRoute($key) }}">
                        {!! $value !!}
                    </a>
            </li>
                @endcan
    @endforeach
</ul>

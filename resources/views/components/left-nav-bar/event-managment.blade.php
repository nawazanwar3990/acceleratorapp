<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\EventManagementNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            {@can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\LeftNavBar\EventManagementNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

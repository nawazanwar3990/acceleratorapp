<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\EventManagementNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            {@can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\Nav\EventManagementNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

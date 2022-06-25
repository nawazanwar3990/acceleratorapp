<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\PlanManagementNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
            <a href="{{ \App\Enum\LeftNavBar\PlanManagementNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
            @endcan
        </li>
    @endforeach
</ul>

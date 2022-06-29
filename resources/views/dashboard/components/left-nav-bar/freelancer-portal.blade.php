<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\FreelancersPortalNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                    <a href="{{ \App\Enum\LeftNavBar\FreelancersPortalNavEnum::getRoute($key) }}">
                        {!! $value !!}
                    </a>
            </li>
        @endcan
    @endforeach
</ul>

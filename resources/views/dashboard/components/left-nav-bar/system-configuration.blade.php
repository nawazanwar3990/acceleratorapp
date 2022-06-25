<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\SystemConfigurationNavEnum::getTranslationKeys() as $key=>$value)
      @can('hasModuleAccess',$key)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\SystemConfigurationNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
     @endcan
    @endforeach
</ul>

<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\SettingsNavEnum::getTranslationKeys() as $key=>$value)
      @can('hasModuleAccess',$key)
        <li>
            <a href="{{ \App\Enum\Nav\SettingsNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
     @endcan
    @endforeach
</ul>

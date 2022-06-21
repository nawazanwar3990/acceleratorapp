<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\DeviceDefinitionsNavEnum::getTranslationKeys() as $key=>$value)
       @can('hasModuleAccess',$key)
        <li>
            <a href="{{ \App\Enum\Nav\DeviceDefinitionsNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
       @endcan
    @endforeach
</ul>

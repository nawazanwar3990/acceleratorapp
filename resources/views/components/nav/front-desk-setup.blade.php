<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\FrontDeskSetupNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\Nav\FrontDeskSetupNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

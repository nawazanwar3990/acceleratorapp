<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\VouchersNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\VouchersNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

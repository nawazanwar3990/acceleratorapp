<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\ServiceNavEnum::getTranslationKeys() as $key=>$value)
        {{-- @can('hasModuleAccess',$key) --}}
            <li>
                <a href="{{ \App\Enum\Nav\ServiceNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        {{-- @endcan --}}
    @endforeach
</ul>

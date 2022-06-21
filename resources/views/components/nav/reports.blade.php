<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\ReportsNavEnum::getTranslationKeys() as $key=>$value)
     @can('hasModuleAccess',$key)
        <li>
            <a href="{{ \App\Enum\Nav\ReportsNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
         @endcan
    @endforeach
</ul>

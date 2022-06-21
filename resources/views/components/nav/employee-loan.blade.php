<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\EmployeeLoadNavEnum::getTranslationKeys() as $key=>$value)
        @can('hasModuleAccess',$key)
            <li>
                <a href="{{ \App\Enum\Nav\EmployeeLoadNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            </li>
        @endcan
    @endforeach
</ul>

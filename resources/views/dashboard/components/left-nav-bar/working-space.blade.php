<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

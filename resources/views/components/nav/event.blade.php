<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\EventNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            {{--@can('hasModuleAccess',$key)--}}
            <a href="{{ \App\Enum\Nav\EventNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
            {{--@endcan--}}
        </li>
    @endforeach
</ul>

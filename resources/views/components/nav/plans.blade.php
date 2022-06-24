<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\PlanNavEnum::getTranslationKeys() as $key=>$value)
        <li>
{{--        @can('hasModuleAccess',$key)--}}
            <a href="{{ \App\Enum\Nav\PlanNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
{{--         @endcan--}}
        </li>
    @endforeach
</ul>

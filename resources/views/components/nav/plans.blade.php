<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\PlanNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                @if($key==\App\Enum\Nav\PlanNavEnum::PLAN)
                    <a href="{{ \App\Enum\Nav\PlanNavEnum::getRoute($key) }}">
                        {!! $value !!}
                    </a>
                @endif
            @endcan
        </li>
    @endforeach
</ul>

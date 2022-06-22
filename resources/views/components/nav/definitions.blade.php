<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\DefinitionsNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                @if($key==\App\Enum\Nav\DefinitionsNavEnum::GENERAL)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.definitions-general')
                @elseif($key==\App\Enum\Nav\DefinitionsNavEnum::HUMAN_RESOURCE)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.definitions-hr')
                @endif
            @endcan
        </li>
    @endforeach
</ul>

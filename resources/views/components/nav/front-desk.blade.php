<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\Nav\FrontDeskNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                @if($key==\App\Enum\Nav\FrontDeskNavEnum::FRONT_DESK_SETUP)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.front-desk-setup')
                @elseif($key==\App\Enum\Nav\FrontDeskNavEnum::FRONT_DESK_SETUP)
                    <a class="has-arrow" aria-expanded="false">
                        {!! $value !!}
                    </a>
                    @include('components.nav.ledgers')
                @else
                    <a href="{{ \App\Enum\Nav\FrontDeskNavEnum::getRoute($key) }}">
                        {!! $value !!}
                    </a>
                @endif
            @endcan
        </li>
    @endforeach
</ul>

<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\FreelancerNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            <a href="{{ \App\Enum\LeftNavBar\FreelancerNavEnum::getRoute($key) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
</ul>

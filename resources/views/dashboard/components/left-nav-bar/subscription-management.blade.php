<ul aria-expanded="false" class="collapse">
    @foreach(\App\Enum\LeftNavBar\SubscriptionNavEnum::getTranslationKeys() as $key=>$value)
        <li>
            @can('hasModuleAccess',$key)
                <a href="{{ \App\Enum\LeftNavBar\SubscriptionNavEnum::getRoute($key) }}">
                    {!! $value !!}
                </a>
            @endcan
        </li>
    @endforeach
</ul>

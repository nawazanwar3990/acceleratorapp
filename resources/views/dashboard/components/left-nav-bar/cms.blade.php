@foreach(\App\Enum\LeftNavBar\CMSNavEnum::getTranslationKeys() as $key=>$value)
    <li>
        <a href="{{ \App\Enum\LeftNavBar\CMSNavEnum::getRoute($key) }}">
            {!! $value !!}
        </a>
    </li>
@endforeach

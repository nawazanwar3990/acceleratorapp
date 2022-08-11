@foreach(\App\Enum\PackageTypeEnum::getTranslationKeys() as $key=>$value)
    <li>
        <a href="{{ route('dashboard.packages.index',['type'=>$key]) }}">
            {!! $value !!}
        </a>
    </li>
@endforeach

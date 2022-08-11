@foreach(\App\Enum\PaymentTypeProcessEnum::getTranslationKeys() as $key=>$value)
    <li>
        <a href="{{ route('dashboard.freelancers.index',['type'=>$key]) }}">
            {!! $value !!}
        </a>
    </li>
@endforeach

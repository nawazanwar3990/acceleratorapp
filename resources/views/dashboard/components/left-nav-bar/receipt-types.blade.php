@foreach(\App\Enum\RoleEnum::getSubscriptionTypes() as $key=>$value)
    <li>
        <a href="{{ route('dashboard.payment-receipts.index',['type'=>$key]) }}">
            {!! $value !!}
        </a>
    </li>
@endforeach

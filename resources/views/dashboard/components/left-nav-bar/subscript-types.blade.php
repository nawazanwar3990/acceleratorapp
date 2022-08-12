@foreach(\App\Enum\RoleEnum::getSubscriptionTypes() as $key=>$value)
    <li>
        <a href="{{ route('dashboard.subscriptions.index',['type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE,'subscription_for'=>$key]) }}">
            {!! $value !!}
        </a>
    </li>
@endforeach

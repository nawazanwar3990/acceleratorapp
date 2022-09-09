@if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
    @foreach(\App\Enum\RoleEnum::getSubscriptionTypes() as $key=>$value)
        <li>
            <a href="{{ route('dashboard.subscriptions.index',['type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE,'subscription_for'=>$key]) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
@endif
@if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
    <li>
        <a href="{{ route('dashboard.subscriptions.index',['type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE,'subscription_for'=>auth()->user()->roles[0]->slug]) }}">
            {!! \App\Enum\SubscriptionTypeEnum::getTranslationKeyBy(\App\Enum\SubscriptionTypeEnum::PACKAGE) !!}
        </a>
    </li>
    @foreach(\App\Enum\SubscriptionTypeEnum::getBAScriptionTypes() as $key=>$value)
        <li>
            <a href="{{ route('dashboard.subscriptions.index',['type'=>\App\Enum\SubscriptionTypeEnum::PLAN,'subscription_for'=>$key]) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
@endif
@if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::CUSTOMER))
    @foreach(\App\Enum\SubscriptionTypeEnum::getCustomerTypes() as $key=>$value)
        <li>
            <a href="{{ route('dashboard.subscriptions.index',['type'=>\App\Enum\SubscriptionTypeEnum::PLAN,'subscription_for'=>$key]) }}">
                {!! $value !!}
            </a>
        </li>
    @endforeach
@endif

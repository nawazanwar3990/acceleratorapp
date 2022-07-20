<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">Action
    </button>
    <ul class="dropdown-menu">
        @if(!$customer->already_subscription($customer->id,\App\Enum\SubscriptionTypeEnum::PLAN))
            <li>
                <a class="dropdown-item text-black-50"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$customer->id,'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}">
                    {{__('general.apply_subscription')}}
                </a>
            </li>
        @endif
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.customers.edit',$customer->id) }}">
                {{__('general.edit')}}
            </a>
        </li>
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.customers.show',$customer->id) }}">
                {{__('general.show')}}
            </a>
        </li>
    </ul>
</div>

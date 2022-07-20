<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">Action
    </button>
    <ul class="dropdown-menu">
        @if(!$ba->already_subscription($ba->id,\App\Enum\SubscriptionTypeEnum::PACKAGE))
            <li>
                <a class="dropdown-item text-black-50"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$ba->id,'type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE]) }}">
                    {{__('general.apply_subscription')}}
                </a>
            </li>
        @else
            <li>
                <a class="dropdown-item text-black-50" href="{{ route('dashboard.ba.show',$ba->id) }}">
                    {{__('general.subscriptions')}}
                </a>
            </li>
        @endif
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.ba.edit',$ba->id) }}">
                {{__('general.edit')}}
            </a>
        </li>
    </ul>
</div>

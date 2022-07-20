<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">Action
    </button>
    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.ba.edit',$ba->id) }}">
                {{__('general.edit')}}
            </a>
        </li>
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.ba.show',$ba->id) }}">
                {{__('general.show')}}
            </a>
        </li>
        @if(!$ba->already_subscription($ba->id,\App\Enum\SubscriptionTypeEnum::PACKAGE))
            <li>
                <a class="dropdown-item text-black-50"
                   href="{{ route('dashboard.subscriptions.create',['id'=>$ba->id,'type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE]) }}">
                    {{__('general.apply_subscription')}} <i class="bx bx-plus-circle"></i>
                </a>
            </li>
        @else
            <li>
                <a class="btn btn-sm btn-info"
                   href="{{ route('dropdown-item text-black-50',['id'=>$ba->id,'type'=>\App\Enum\SubscriptionTypeEnum::PACKAGE]) }}">
                    {{__('general.subscriptions')}} <i class="bx bx-arrow-to-right"></i>
                </a>
            </li>
        @endif
    </ul>
</div>

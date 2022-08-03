<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">Action
    </button>
    <ul class="dropdown-menu">
        @if(!$ba->user()->already_subscription($ba->id,\App\Enum\SubscriptionTypeEnum::PACKAGE))
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
            <a class="dropdown-item text-black-50" href="{{ route('website.ba.create',[$ba->type=\App\Enum\AcceleratorTypeEnum::COMPANY?\App\Enum\StepEnum::STEP1:\App\Enum\StepEnum::STEP2,$ba->id]) }}">
                {{__('general.edit')}}
            </a>
        </li>
    </ul>
</div>

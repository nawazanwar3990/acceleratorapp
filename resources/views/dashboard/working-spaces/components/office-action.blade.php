<div class="btn-group">
    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false" aria-haspopup="true">Action
    </button>
    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.offices.edit',$office->id) }}">
                {{__('general.edit')}}
            </a>
        </li>
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.offices.show',$office->id) }}">
                {{__('general.show')}}
            </a>
        </li>
        <li>
            <a class="dropdown-item text-black-50" href="{{ route('dashboard.office-plans.index',[$office->id]) }}">
                {{ __('general.plans') }}({{ count($office->plans) }})
            </a>
        </li>
        @if(\App\Services\OfficeService::already_subscribed($office->id))
            <li>
                <a href="{{ route('dashboard.subscriptions.index',['id'=>\App\Services\OfficeService::get_subscribed_id($office->id),'type'=>\App\Enum\SubscriptionTypeEnum::PLAN]) }}"
                   class="dropdown-item text-black-50">
                    {{ trans('general.view_subscription') }}
                </a>
            </li>
        @else
            @if(count($office->plans)>0)
                <li>
                    <a class="dropdown-item text-black-50"
                       onclick="apply_subscription('{{ $office->plans}}','{{$office->id}}','{{ $office->sitting_capacity }}');">
                        {{ trans('general.subscription') }} <i class="bx bx-plus-circle"></i>
                    </a>
                </li>
            @endif
        @endif

    </ul>
</div>

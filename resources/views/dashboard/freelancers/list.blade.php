
@forelse($records as $freelancer)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $freelancer->user->email }}</td>
        <td>{{ $freelancer->user->getFullName() }}</td>
        <td>
            {{ \App\Enum\AcceleratorTypeEnum::getTranslationKeyBy($freelancer->type)  }}
        </td>
        <td class="text-center">
            @if($freelancer->user->subscription)
                @if($freelancer->user->subscription->status==\App\Enum\SubscriptionStatusEnum::APPROVED)
                    {{ $freelancer->user->subscription->status}}
                @else
                    <a class="btn btn-sm btn-success"
                       href="{{ route('website.freelancer-pending-subscription',['subscribed_id'=>$freelancer->user->id]) }}">
                        {{ trans('general.view') }}
                    </a>
                @endif
            @else
                <a class="btn btn-sm btn-success"
                   href="{{ route('website.freelancer.create',[\App\Enum\StepEnum::STEP4,$freelancer->id]) }}">
                    {{ trans('general.apply_subscription') }}
                </a>
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                 'edit' => route('website.freelancer.create',[$freelancer->type==\App\Enum\AcceleratorTypeEnum::COMPANY?\App\Enum\StepEnum::STEP1:\App\Enum\StepEnum::STEP2,$freelancera->id]),
                 'delete' => route('dashboard.events.destroy', $freelancer->id),
             ])
        </td>
    </tr>
@empty
@endforelse


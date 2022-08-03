@forelse($records as $ba)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $ba->user->email }}</td>
        <td>{{ $ba->user->getFullName() }}</td>
        <td>
            {{ \App\Enum\AcceleratorTypeEnum::getTranslationKeyBy($ba->type)  }}
        </td>
        <td class="text-center">
            @if($ba->user->subscription)
                @if($ba->user->subscription->status==\App\Enum\SubscriptionStatusEnum::APPROVED)
                    $ba->user->subscription->status
                @else
                    <a class="btn btn-sm btn-success"
                       href="{{ route('website.ba-pending-subscription',['subscribed_id'=>$ba->user->id]) }}">
                        {{ trans('general.view') }}
                    </a>
                @endif
            @else
                <a class="btn btn-sm btn-success"
                   href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP4,$ba->id]) }}">
                    {{ trans('general.apply_subscription') }}
                </a>
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                 'edit' => route('website.ba.create',[$ba->type==\App\Enum\AcceleratorTypeEnum::COMPANY?\App\Enum\StepEnum::STEP1:\App\Enum\StepEnum::STEP2,$ba->id]),
                 'delete' => route('dashboard.events.destroy', $ba->id),
             ])
        </td>
    </tr>
@empty
@endforelse

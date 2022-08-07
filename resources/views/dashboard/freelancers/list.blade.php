@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->user->email }}</td>
        <td>{{ $record->user->getFullName() }}</td>
        <td>
            {{ \App\Enum\AcceleratorTypeEnum::getTranslationKeyBy($record->type)  }}
        </td>
        <td class="text-center">
            @if($record->user->subscription)
                @if($record->user->subscription->status==\App\Enum\SubscriptionStatusEnum::APPROVED)
                    {{ $record->user->subscription->status}}
                @else
                    <a class="btn btn-sm btn-success"
                       href="{{ route('website.ba-pending-subscription',['subscribed_id'=>$record->user->id]) }}">
                        {{ trans('general.view') }}
                    </a>
                @endif
            @else
                <a class="btn btn-sm btn-success"
                   href="{{ route('website.ba.create',[\App\Enum\StepEnum::PACKAGES,$record->id]) }}">
                    {{ trans('general.apply_subscription') }}
                </a>
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                 'edit' => route('website.freelancers.create',[$record->type,$record->payment_process,\App\Enum\StepEnum::USER_INFO,$record->id]),
                 'delete' => route('dashboard.events.destroy', $record->id),
             ])
        </td>
    </tr>
@empty

@endforelse

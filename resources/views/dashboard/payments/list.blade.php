@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            @isset($record->subscribed)
                {{ $record->subscribed->email }}
            @else
                --
            @endisset
        </td>
        <td>
            @if($record->subscription->subscription_type==\App\Enum\SubscriptionTypeEnum::PLAN)
                @isset($record->subscription)
                    {{ $record->subscription->plan->name??null }}
                @else
                    --
                @endisset
            @else
                @isset($record->subscription)
                    {{ $record->subscription->package->name??null }}
                @else
                    --
                @endisset
            @endif
        </td>
        <td>{{ $record->payment_type }}</td>
        <td>
            {{ $record->transaction_id }}
        </td>
        <td>
            {{ $record->price }} {{ \App\Services\GeneralService::get_default_currency() }}
        </td>
        <td>
            {{ $record->created_at }}
        </td>
        <td class="text-center">

        </td>
    </tr>
@empty

@endforelse

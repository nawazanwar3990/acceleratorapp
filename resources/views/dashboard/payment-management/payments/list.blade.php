@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            @isset($record->subscribed)
                {{ $record->subscribed->getFullName() }}
            @else
                --
            @endisset
        </td>
        <td>
            @isset($record->subscription)
                {{ $record->subscription->price }}
            @else
                --
            @endisset
        </td>
        <td>
            @isset($record->package)
                {{ $record->package->name }}
            @else
                --
            @endisset
        </td>
        <td>{{ $record->payment_type }}</td>
        <td>{{ $record->transaction_id }}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.payments.edit', $record->id),
                'delete' => route('dashboard.payments.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

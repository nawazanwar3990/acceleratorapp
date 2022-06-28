@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->months }}</td>
        <td>{{ \App\Services\GeneralService::getInstallmentDurationForDropdown( $record->installment_duration ) }}</td>
        <td>{{ $record->total_installments }}</td>
        <td>
            @if($record->down_payment_type == 1)
                {{ \App\Services\GeneralService::number_format( $record->down_payment_value ) }}
            @else
                {{ $record->down_payment_value }}%
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.modules.edit', $record->id),
                'delete' => route('dashboard.modules.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

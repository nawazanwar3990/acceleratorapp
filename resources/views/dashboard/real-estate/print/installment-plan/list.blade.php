@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->years }}</td>
        <td>{{ \App\Services\GeneralService::getInstallmentDurationForDropdown( $record->installment_duration ) }}</td>
        <td>{{ $record->total_installments }}</td>
        <td class="text-center">
            @include('components.General.print-btn', [
                'print' => route('dashboard.installment-plans.show', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

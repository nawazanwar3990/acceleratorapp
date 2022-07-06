@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>
            {{ \App\Enum\PlanForEnum::getTranslationKeyBy($record->plan_for) }}
            <br>
            @if($record->plan_for==\App\Enum\PlanForEnum::BUILDING)

                @elseif($record->plan_for==\App\Enum\PlanForEnum::FLOOR)

            @elseif($record->plan_for==\App\Enum\PlanForEnum::FLAT)

            @endif
        </td>
        <td>{{ $record->months }}</td>
        <td>{{ \App\Services\GeneralService::getInstallmentDurationForDropdown($record->installment_duration) }}</td>
        <td>{{ $record->total_installments }}</td>
        <td>
            @if($record->down_payment_type == 1)
                {{ \App\Services\GeneralService::number_format($record->down_payment_value) }}
            @else
                {{ $record->down_payment_value }}%
            @endif
        </td>
        <td>{{ $record->total_installments }}</td>
        <td>{{ $record->reminder_days }}</td>
        <td>{{ \App\Services\GeneralService::getDiscountTypesForDropdown($record->down_payment_type) }}</td>
        <td>{{ $record->down_payment_value }}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.plans.edit', $record->id),
                'delete' => route('dashboard.plans.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>
            {{ \App\Enum\PlanForEnum::getTranslationKeyBy($record->plan_for) }}
            <br>
            <label>
                <ul class="list-group list-group-flush bg-transparent">
                    @if($record->plan_for==\App\Enum\PlanForEnum::BUILDING)
                        @isset($record->buildings)
                            @foreach($record->buildings as $building)
                                <li class="list-group-item py-0 border-0  bg-transparent px-0"><i
                                        class="bx bx-check text-success"></i> {{ $building->name }}</li>
                            @endforeach
                        @endisset
                    @elseif($record->plan_for==\App\Enum\PlanForEnum::FLOOR)
                        @isset($record->floors)
                            @foreach($record->floors as $floor)
                                <li class="list-group-item py-0 border-0  bg-transparent px-0"><i
                                        class="bx bx-check text-success"></i> {{ $floor->name }}
                                    of {{ $floor->building->name }}</li>
                            @endforeach
                        @endisset
                    @elseif($record->plan_for==\App\Enum\PlanForEnum::FLAT)
                        @isset($record->flats)
                            @foreach($record->flats as $flat)
                                <li class="list-group-item py-0 border-0  bg-transparent px-0"><i
                                        class="bx bx-check text-success"></i> {{ $flat->name }}
                                    of {{ $flat->floor->name }} for {{ $flat->floor->building->name }}</li>
                            @endforeach
                        @endisset
                    @endif
                </ul>
            </label>
        </td>
        <td>{{ $record->months }}</td>
        <td>{{ \App\Services\GeneralService::getInstallmentDurationForDropdown($record->installment_duration) }}</td>
        <td>{{ $record->total_installments }}</td>
        <td>{{ $record->reminder_days }}</td>
        <td>
            {{ \App\Services\GeneralService::getDiscountTypesForDropdown($record->down_payment_type) }}
        </td>
        <td>
            @if($record->down_payment_type == 1)
                {{ \App\Services\GeneralService::number_format($record->down_payment_value) }}
            @else
                {{ $record->down_payment_value }}%
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.plans.edit', $record->id),
                'delete' => route('dashboard.plans.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

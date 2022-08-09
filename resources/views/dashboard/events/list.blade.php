@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            {{ $record->event_name}} <br>
            @include('components.view-images-model',['model_id'=>$record->id,'images'=>$record->images])
        </td>
        <td>
            @if($record->event_type)
                {{ ucwords(str_replace('-',' ',$record->event_type)) }}
            @else
                --
            @endif
        </td>
        <td>
            @if($record->event_sub_type)
                {{ ucwords(str_replace('-',' ',$record->event_sub_type)) }}
            @else
                --
            @endif
        </td>
        <td>
            {{ $record->event_start_date }}
        </td>
        <td>
            {{ $record->no_of_days }}
        </td>
        <td>
            {{ $record->event_end_date }}
        </td>
        <td>
            {{ $record->event_start_time }}
        </td>
        <td>
            {{ $record->event_end_time }}
        </td>
        <td>
            @if($record->event_organized_by)
                {{ ucwords(str_replace('-',' ',$record->event_organized_by)) }}
            @else
                --
            @endif
        </td>
        <td>
            @if($record->event_organized_for)
                {{ ucwords(str_replace('-',' ',$record->event_organized_for)) }}
            @else
                --
            @endif
        </td>
        <td>
            @if($record->is_applied_ticker=='yes')
                @if($record->ticket_type==\App\Enum\TicketTypeEnum::PAID)
                    {{ \App\Enum\TicketTypeEnum::getTranslationKeyBy($record->ticket_type) }}<br>
                    <small><strong class="text-info">{{ $record->per_person_cost }}</strong> per person cost</small>
                @else
                    {{ \App\Enum\TicketTypeEnum::getTranslationKeyBy($record->ticket_type) }}
                @endif
            @else
                No
            @endif
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.events.edit', $record->id),
                'delete' => route('dashboard.events.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

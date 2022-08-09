@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            {{ $record->meeting_name}} <br>
            @include('components.view-images-model',['model_id'=>$record->id,'images'=>$record->images])
        </td>
        <td>
            @if($record->meeting_arranged_for)
                {{ \App\Enum\MeetingArrangedForEnum::getTranslationKeyBy($record->meeting_arranged_for) }}
            @else
                --
            @endif
        </td>
        <td>
            @if($record->meeting_type)
                {{ \App\Enum\MeetingTypeEnum::getTranslationKeyBy($record->meeting_type) }}
            @else
                --
            @endif
        </td>
        <td>
            {{ $record->meeting_held_date }}
        </td>
        <td>
            {{ $record->meeting_start_time }}
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.meeting-rooms.edit', $record->id),
                'delete' => route('dashboard.meeting-rooms.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

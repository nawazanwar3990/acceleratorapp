@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            @if($record->meeting_type)
                {{ str_replace('_',' ',$record->meeting_type) }}
            @else
                --
            @endif
        </td>
        <td>
            @if($record->meeting_sub_type)
                {{ str_replace('_',' ',$record->meeting_sub_type) }}
            @else
                --
            @endif
        </td>
        <td>
            {{ $record->meeting_name}} <br>
            @include('components.view-images-model',['model_id'=>$record->id,'images'=>$record->images])
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
            <p class="fs-13 mb-0">{{ trans('general.start_time') }} : {{ $record->meeting_start_time }}</p>
            <p class="fs-13 mb-0">{{ trans('general.end_time') }} : {{ $record->meeting_end_time }}</p>
        </td>
        <td>
            <p class="fs-13 mb-0">{{ $record->meeting_mode }}</p>
            <p class="fs-13 mb-0">{{ $record->meeting_description }}</p>
        </td>
        <td></td>
        <td></td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.meeting-rooms.edit', $record->id),
                'delete' => route('dashboard.meeting-rooms.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

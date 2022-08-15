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
            {{ $record->meeting_held_date }}
        </td>
        <td>
            <p class="fs-13 mb-0"><strong>{{ trans('general.start_time') }} :</strong> {{ $record->meeting_start_time }}
            </p>
            <p class="fs-13 mb-0"><strong>{{ trans('general.end_time') }} :</strong> {{ $record->meeting_end_time }}</p>
        </td>
        <td>
            <p class="fs-13 mb-0">
                <strong>{{ trans('general.type') }} : </strong>{{ $record->meeting_mode }}
            </p>
            @if($record->meeting_mode=='physical')
                <p class="fs-13 mb-0">
                    <strong>{{ trans('general.description') }} : </strong> {{ $record->meeting_description }}
                </p>
            @else
                <p class="fs-13 mb-0">{{ $record->meeting_description }}</p>
            @endif
        </td>
        <td>
            <p class="fs-13 mb-0"><strong>{{ trans('general.client_id') }}
                    :</strong> {{ $record->meeting_organized_for }}</p>
            <p class="fs-13 mb-0"><strong>{{ trans('general.name') }}
                    :</strong> {{ $record->meeting_organized_for_name }}</p>
            <p class="fs-13 mb-0"><strong>{{ trans('general.contact') }}
                    :</strong> {{ $record->meeting_organized_for_contact }}</p>
            <p class="fs-13 mb-0"><strong>{{ trans('general.email') }}
                    :</strong> {{ $record->meeting_organized_for_email }}</p>
        </td>
        <td>
            <p class="fs-13 mb-0"><strong>{{ trans('general.room_number') }}
                    :</strong> {{ $record->office->name??null }}</p>
            <p class="fs-13 mb-0"><strong>{{ trans('general.room_type') }}
                    :</strong> {{ $record->office?$record->office->type->name:'' }}</p>
            <p class="fs-13 mb-0"><strong>{{ trans('general.sitting_capacity') }}
                    :</strong> {{ $record->office->sitting_capacity }}</p>
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

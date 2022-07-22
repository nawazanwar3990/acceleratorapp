@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name}}</td>
       <td>{{ \App\Services\EventService::eventType($record->event_type)}}</td>
       <td>{{ \Carbon\Carbon::parse($record->start_date)->format('d-M-Y')}}</td>
       <td>{{ \Carbon\Carbon::parse($record->end_date)->format('d-M-Y')}}</td>
       <td>{{ \Carbon\Carbon::parse($record->start_time)->format('g:i A')}}</td>
       <td>{{ \Carbon\Carbon::parse($record->end_time)->format('g:i A')}}</td>
       <td>{{ $record->desc}}</td>
       <td><img src='{{ asset(\App\Services\EventService::getEventImage($record->id)) }}' width="100px" alt=""></td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.events.edit', $record->id),
                'delete' => route('dashboard.events.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse

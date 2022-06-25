@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->floor_name}}</td>
        <td>{{ $record->floor_number}}</td>
        <td>{{ $record->floorType->name }}</td>
        <td>{{ $record->area }}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.floors.edit', $record->id),
                'delete' => route('dashboard.floors.destroy', $record->id),
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

@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name}}</td>
        <td>{{ $record->slug}}</td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.device-locations.edit', $record->id),
                'delete' => route('dashboard.device-locations.destroy', $record->id),
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

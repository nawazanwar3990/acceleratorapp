@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ \App\Services\RealEstate\ServiceData::getServiceTypeDropdown($record->type) }}</td>
        <td>{{ $record->name ?? '' }}</td>
        <td>
            <span class="badge bg-{{ $record->status === 1 ? "success" : "danger" }}">
                {{ $record->status === 1 ? "Active" : "Deactivate" }}
            </span>
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.service.edit', $record->id),
                'delete' => route('dashboard.service.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse

@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->first_name}}</td>
        <td>{{ $record->last_name}}</td>
        <td>{{ $record->email}}</td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.users.edit', $record->id),
                'delete' => route('dashboard.users.destroy', $record->id),
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

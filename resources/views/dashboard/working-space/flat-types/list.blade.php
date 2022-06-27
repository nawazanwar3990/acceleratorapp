@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name ?? '' }}</td>
        <td>
            <h6>
                @if ($record->status == true)
                    <span class="badge bg-success">
                        {{ __('general.active') }}
                    </span>
                @else
                    <span class="badge bg-danger">
                        {{ __('general.inactive') }}
                    </span>
                @endif
            </h6>
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.flat-types.edit', $record->id),
                'delete' => route('dashboard.flat-types.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse

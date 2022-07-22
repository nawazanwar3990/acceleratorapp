@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name ?? '' }}</td>
        <td>{{ $record->slug ?? '' }}</td>
        <td>
            <span class="badge bg-{{ $record->status === 1 ? "success" : "danger" }}">
                {{ $record->status === 1 ? "Active" : "Deactivate" }}
            </span>
        </td>
        @if(request()->query('type')==\App\Enum\ServiceTypeEnum::FREELANCER_SERVICE)
            <td>
                @isset($record->parent)
                    {{ $record->parent->name }}
                @else
                    --
                @endif
            </td>
        @endif
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.services.edit', $record->id),
                'delete' => route('dashboard.services.destroy', $record->id),
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

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
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.office-types.edit', $record->id),
                    'delete' => route('dashboard.office-types.destroy', $record->id),
                ])
            @endif
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse

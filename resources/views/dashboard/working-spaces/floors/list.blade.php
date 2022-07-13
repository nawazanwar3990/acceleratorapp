@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name}}</td>
        <td>{{ $record->number}}</td>
        <td>
            @isset($record->type)
                {{ $record->type->name }}
            @else
                --
            @endisset
        </td>
        <td>{{ $record->price }}</td>
        <td>{{ $record->area }}</td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.floors.edit', $record->id),
                    'delete' => route('dashboard.floors.destroy', $record->id),
                ])
            @endif
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse

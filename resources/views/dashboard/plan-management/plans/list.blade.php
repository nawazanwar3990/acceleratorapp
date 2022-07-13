@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->name }}</td>
        <td>
            {{ $record->duration }}
        </td>
        <td>
            {{ $record->price }}
        </td>
        <td class="text-center">
            @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                @include('dashboard.components.general.table-actions', [
                    'edit' => route('dashboard.plans.edit', $record->id),
                    'delete' => route('dashboard.plans.destroy', $record->id),
                ])
            @endif
        </td>
    </tr>
@empty

@endforelse

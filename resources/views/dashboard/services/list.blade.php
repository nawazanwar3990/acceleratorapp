@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            {{ \App\Enum\ServiceTypeEnum::getTranslationKeyBy($record->type) }}
        </td>
        <td>
            @if($type==\App\Enum\ServiceTypeEnum::MENTOR)
                @isset($record->parent)
                    {{ $record->parent->name }} >
                @endisset
            @endif
            {{ $record->name ?? '' }}
        </td>
        <td>{{ $record->slug ?? '' }}</td>
        <td>
            <span class="btn btn-xs bg-{{ $record->status === 1 ? "success" : "danger" }}">
                {{ $record->status === 1 ? "Active" : "Deactivate" }}
            </span>
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.services.edit', $record->id),
                'delete' => route('dashboard.services.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

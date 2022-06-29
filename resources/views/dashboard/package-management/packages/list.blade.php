@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ \App\Enum\PackageTypeEnum::getTranslationKeyBy($record->type) }}</td>
        <td>{{ $record->name }}</td>
        <td>{{ $record->slug }}</td>
        <td>
            @isset($record->duration_type)
                {{ $record->duration_type->name }}
            @else
                --
            @endisset
        </td>
        <td>{{ $record->duration_limit }}</td>
        <td>{{ $record->price }}</td>
        <td>{{ $record->is_expire }}</td>
        <td>{{ $record->reminder_days }}</td>
        <td style="width: 200px;">
            <UL class="list-group list-group-flush bg-transparent">
                @foreach($record->modules as $module)
                    <li class="list-group-item py-0 border-0  bg-transparent px-0">
                        <i class="bx bx-check text-success"></i> <small> <strong class="text-infogit ">{{ $module->pivot->limit }}</strong> {{ str_replace('_',' ',$module->name) }}   </small>
                    </li>
                @endforeach
            </UL>
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.packages.edit', $record->id),
                'delete' => route('dashboard.packages.destroy', $record->id),
            ])
        </td>
    </tr>
@empty

@endforelse

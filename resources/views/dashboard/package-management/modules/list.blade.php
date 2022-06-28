@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{  ucwords(str_replace('_',' ',$record->name))  }}</td>
        <td>{{ ucwords(str_replace('_',' ',$record->parent_type)) }}</td>
        <td>{{  str_replace('_',' ',$record->child_type)  }}</td>
        {{--<td class="text-center">
            @include('dashboard.components.general.table-actions', [
                'edit' => route('dashboard.modules.edit', $record->id),
                'delete' => route('dashboard.modules.destroy', $record->id),
            ])
        </td>--}}
    </tr>
@empty

@endforelse

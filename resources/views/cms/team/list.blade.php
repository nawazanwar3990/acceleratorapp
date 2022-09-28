@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>
            <img src="{{asset($record->image)}}" alt="" class="img-responsive avatar">
        </td>
        <td>{{$record->name}}</td>
        <td>{{$record->designation}}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.teams.edit', $record->id),
                  'delete' => route('cms.teams.destroy', $record->id),
              ])
        </td>
    </tr>
@empty
@endforelse

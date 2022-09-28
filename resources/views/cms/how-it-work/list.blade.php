@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>
            <img src="{{asset($record->image)}}" alt="" class="img-responsive avatar">
        </td>
        <td>{{$record->heading}}</td>
        <td>{{$record->description}}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.how-it-works.edit', $record->id),
                  'delete' => route('cms.how-it-works.destroy', $record->id),
              ])
        </td>
    </tr>
@empty
@endforelse

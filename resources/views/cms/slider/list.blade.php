@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>
            <img src="{{asset($record->front_image)}}" alt="" class="avatar">
        </td>
        <td>
            <img src="{{asset($record->back_image)}}" alt="" class="avatar">
        </td>
        <td>{{$record->description}}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.sliders.edit', $record->id),
                  'delete' => route('cms.sliders.destroy', $record->id),
              ])
        </td>
    </tr>
@empty
@endforelse

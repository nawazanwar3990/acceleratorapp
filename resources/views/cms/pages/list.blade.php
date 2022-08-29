@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>{{$record->layout->name??null}}</td>
        <td>
            {{ $record->name }}
        </td>
        <td>
            @if($record->code=='home')
                <a target="_blank" class="text-info" href="{{ route('website.index') }}">
                    {{$record->code}}
                </a>
            @else
                <a target="_blank" class="text-info" href="{{ route('website.pages.index',$record->code) }}">
                    {{$record->code}}
                </a>
            @endif
        </td>
        <td>{{$record->order}}</td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.pages.edit', $record->id),
                  'delete' => route('cms.pages.destroy', $record->id),
                  'sections' => route('cms.sections.index',['page_id'=>$record->id]),
              ])
        </td>
    </tr>
@empty
@endforelse

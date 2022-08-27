@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>{{$record->menu->name}}</td>
        <td>{{$record->page_title}}</td>
        <td>{{$record->page_description}}</td>
        <td>{{$record->page_keyword}}</td>
        <td>{{$record->extra_css}}</td>
        <td>{{$record->extra_js}}</td>
        <td>
            {!! Form::checkbox('active[]',null,$record->active,['class'=>'activeBox checkBoxStatus','id'=>'active_'.$key,'onclick'=>'activeListButton('.$record->id.',this,"'.route('cms.menus.active.update').'")']); !!}
            {!! Form::label('active_'.$key,'Active') !!}
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.pages.edit', $record->id),
                  'delete' => route('cms.pages.destroy', $record->id),
              ])
        </td>
    </tr>
@empty
@endforelse

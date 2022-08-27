@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>{{$record->name}}</td>
        <td>{{$record->menu_type}}</td>
        <td>{{$record->page_title}}</td>
        <td>{{$record->page_description}}</td>
        <td>{{$record->page_keyword}}</td>
        <td>{{$record->extra_css}}</td>
        <td>{{$record->extra_js}}</td>
        <td>{{$record->header_logo}}</td>
        <td>{{$record->footer_logo}}</td>
        <td>
            {!! Form::checkbox('active[]',null,$record->active,['class'=>'activeBox checkBoxStatus','id'=>'active_'.$key,'onclick'=>'activeListButton('.$record->id.',this,"'.route('cms.menus.active.update').'")']); !!}
            {!! Form::label('active_'.$key,'Active') !!}
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.layouts.edit', $record->id),
                  'delete' => route('cms.layouts.destroy', $record->id),
              ])
        </td>
    </tr>
@empty
@endforelse

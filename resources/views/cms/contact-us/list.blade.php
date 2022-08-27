@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>{{$record->name}}</td>
        <td>{{$record->email}}</td>
        <td>{{$record->phone}}</td>
        <td>{{$record->message}}</td>
        <td>
            {!! Form::checkbox('active[]',null,$record->active,['class'=>'activeBox checkBoxStatus','id'=>'active_'.$key,'onclick'=>'activeListButton('.$record->id.',this,"'.route('cms.menus.active.update').'")']); !!}
            {!! Form::label('active_'.$key,'Active') !!}
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.contact-us.edit', $record->id),
                  'delete' => route('cms.contact-us.destroy', $record->id),
              ])
        </td>
    </tr>
@empty
@endforelse

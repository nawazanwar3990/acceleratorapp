@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>{{$record->topic->name}}</td>
        <td>{{$record->question}}</td>
        <td>{{$record->answer}}</td>
        <td>{{$record->order}}</td>
        <td>
            {!! Form::checkbox('active[]',null,$record->active,['class'=>'activeBox checkBoxStatus','id'=>'active_'.$key,'onclick'=>'activeListButton('.$record->id.',this,"'.route('cms.menus.active.update').'")']); !!}
            {!! Form::label('active_'.$key,'Active') !!}
        </td>
        <td class="text-center">
            @include('dashboard.components.general.table-actions', [
                  'edit' => route('cms.faq-sections.edit', $record->id),
                  'delete' => route('cms.faq-sections.destroy', $record->id),
              ])
        </td>
    </tr>
@empty
@endforelse

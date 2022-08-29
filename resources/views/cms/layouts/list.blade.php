@forelse($records as $key=>$record)
    <tr>
        <td class="text-center">{{ $record->id }}</td>
        <td>{{$record->name}}</td>
        <td>{{$record->menu_type}}</td>
        <td>
            @if($record->header_logo)
                <img src="{{ asset($record->header_logo) }}" alt="{{ $record->name }}" class="img-fluid w-25">
            @else
                <img src="{{ asset('images/logo-icon.png') }}" alt="{{ $record->name }}" class="img-fluid">
            @endif
        </td>
        <td>
            @if($record->footer_logo)
                <img src="{{ asset($record->header_logo) }}" alt="{{ $record->name }}" class="img-fluid w-25">
            @else
                <img src="{{ asset('images/logo-icon.png') }}" alt="{{ $record->name }}" class="img-fluid">
            @endif
        </td>
        <td>
            @if($record->favicon_logo)
                <img src="{{ asset($record->favicon_logo) }}" alt="{{ $record->name }}" class="img-fluid w-25">
            @else
                <img src="{{ asset('images/logo-icon.png') }}" alt="{{ $record->name }}" class="img-fluid">
            @endif
        </td>
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

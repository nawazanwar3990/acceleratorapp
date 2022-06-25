@foreach($owners as $owner)
    <tr>
        <td class="col-1">
            <div class="input-group">
                {!!  Form::text('sellers[]',$owner->hr->id,['class'=>'form-control hr-id', 'required', 'readonly', 'tabindex'=>'-1']) !!}
            </div>
        </td>
        <td class="text-center col-1">
            <img src="{{ \App\Services\PersonService::getHrFirstPicture($owner->hr->id) }}" class="hr-pic" style="width:40px;" tabindex="-1"/>
        </td>
        <td class="text-center col-2">
            {!!  Form::text('hrName[]',$owner->hr->full_name,['class'=>'form-control hr-name', 'disabled', 'tabindex'=>'-1']) !!}
        </td>
        <td class="text-center col-2">
            {!!  Form::text('hrCNIC[]',$owner->hr->cnic,['class'=>'form-control hr-cnic', 'disabled', 'tabindex'=>'-1']) !!}
        </td>
        <td class="text-center col-1">
            {!!  Form::text('hrCell[]',$owner->hr->cell_1,['class'=>'form-control hr-cell', 'disabled', 'tabindex'=>'-1']) !!}
        </td>
        <td class="text-center col-1">
            {!!  Form::text('ownerShare[]',$owner->percentage,['step'=>'any','min'=>'0.1', 'max' => '100','class'=>'form-control hr-share', 'disabled', 'tabindex'=>'-1']) !!}
        </td>
    </tr>
@endforeach

@forelse ($records as $key=>$value)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            {{ $key }}
        </td>
        @foreach($value as $inner_key=>$inner_value)
            <td>
                <div class="form-check form-switch">
                    {!! Form::checkbox('permissions[]',$inner_value->id,null,['class'=>'form-check-input','id'=>'permissions',\App\Services\GeneralService::already_role_permission($role_id,$inner_value->id)?"checked":""]) !!}
                    <label class="form-check-label"></label>
                </div>
            </td>
        @endforeach
        <td></td>
    </tr>
@empty
    <tr>
        <td colspan="20" class="text-center">
            {{__('general.no_record_found')}}
        </td>
    </tr>
@endforelse

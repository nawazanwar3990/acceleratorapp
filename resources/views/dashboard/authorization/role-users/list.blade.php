@forelse ($users as $d)
    <tr>
        <td class='text-center'>
            {{ $d->id }}
        </td>
        <td>
            {{ $d->full_name }}
        </td>
        <td>
            {{ $d->email }}
        </td>
        <td class="text-center">
            <div class="form-check form-switch">
                {!! Form::checkbox('users[]',$d->id,null,['class'=>'form-check-input','id'=>'users',\App\Services\GeneralService::already_role_user($role_id,$d->id)?"checked":""]) !!}
                <label class="form-check-label"></label>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="20" class="text-center">
            {{__('school.no_record_found')}}
        </td>
    </tr>
@endforelse

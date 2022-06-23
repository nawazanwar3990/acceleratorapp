<div class="row">
    <div class="col">
        <table>
            <thead>
            <tr>
                <td>{{ __('general.hr_id') }}<i class="text-danger">*</i></td>
                <td>{{ __('general.picture') }}</td>
                <td>{{ __('general.name') }}</td>
                <td>{{ __('general.cnic') }}</td>
                <td>{{ __('general.cell') }}</td>
            </tr>
            </thead>
            <tbody>
            @if (isset($for))
{{--                @foreach($records as $owner)--}}
                    <tr>
                        <td class="col-1">
                            <div class="input-group">
                                {!!  Form::text(($fieldName),$records->id ?? null,['class'=>'form-control hr-id', 'required', 'readonly', 'tabindex'=>'-1']) !!}
                                <div class="input-group-append">
                                    <button class="btn btn-info btn-lg text-white" type="button" onclick="showHrPickerModal(this);"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </td>
                        <td class="text-center col-1">
                            <img src="{{ \App\Services\PersonService::getHrFirstPicture($records->id ?? null) }}" class="hr-pic" style="width:40px;" tabindex="-1"/>
                        </td>
                        <td class="text-center col-2">
                            {!!  Form::text('hrName[]',$records->full_name ?? null,['class'=>'form-control hr-name', 'disabled', 'tabindex'=>'-1']) !!}
                        </td>
                        <td class="text-center col-2">
                            {!!  Form::text('hrCNIC[]',$records->cnic ?? null,['class'=>'form-control hr-cnic', 'disabled', 'tabindex'=>'-1']) !!}
                        </td>
                        <td class="text-center col-1">
                            {!!  Form::text('hrCell[]',$records->cell_1 ?? null,['class'=>'form-control hr-cell', 'disabled', 'tabindex'=>'-1']) !!}
                        </td>
                    </tr>
{{--                @endforeach--}}
            @else

                <tr>
                    <td class="col-1">
                        <div class="input-group">
                            {!!  Form::text(($fieldName),null,['class'=>'form-control hr-id', 'required', 'readonly', 'tabindex'=>'-1']) !!}
                            <div class="input-group-append">
                                <button class="btn btn-info btn-lg text-white" type="button" onclick="showHrPickerModal(this);"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </td>
                    <td class="text-center col-1">
                        <img src="{{ url('theme/images/user-picture.png') }}" class="hr-pic" style="width:40px;" tabindex="-1"/>
                    </td>
                    <td class="text-center col-2">
                        {!!  Form::text('hrName[]',null,['class'=>'form-control hr-name', 'disabled', 'tabindex'=>'-1']) !!}
                    </td>
                    <td class="text-center col-2">
                        {!!  Form::text('hrCNIC[]',null,['class'=>'form-control hr-cnic', 'disabled', 'tabindex'=>'-1']) !!}
                    </td>
                    <td class="text-center col-1">
                        {!!  Form::text('hrCell[]',null,['class'=>'form-control hr-cell', 'disabled', 'tabindex'=>'-1']) !!}
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>

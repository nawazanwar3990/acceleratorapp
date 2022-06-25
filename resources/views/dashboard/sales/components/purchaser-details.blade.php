<div class="row">

    <div class="col-md-11">
        <h4 class="card-title text-purple">{{ __('general.purchaser_details') }}</h4>
    </div>
    <div class="col-md-1">
        <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.add_hr') }}">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add-hr-modal"><i class="fas fa-plus"></i></button>
        </span>
    </div>
</div>

<hr>
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
                <td>{{ __('general.share_percentage') }}<i class="text-danger">*</i></td>
                <td>{{ __('general.action') }}</td>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="col-1">
                        <div class="input-group">
                            {!!  Form::text('purchaser[]',null,['class'=>'form-control hr-id', 'required', 'readonly', 'tabindex'=>'-1']) !!}
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
                    <td class="text-center col-1">
                        {!!  Form::number('purchaserShare[]',100,['step'=>'any','min'=>'0.1','class'=>'form-control hr-share', 'required']) !!}
                    </td>
                    <td class="text-center col-1">
                        <a href="javascript:void(0);"
                           onclick="removeHrClonedRow(this);"
                           class="btn btn-sm btn-danger">
                            <i class="fas fa-times-circle"></i>
                        </a>
                        <a href="javascript:void(0);"
                           onclick="cloneHrRow(this);"
                           class="btn btn-sm btn-info">
                            <i class="fas fa-plus-circle"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('total_broker_percentage' ,__('general.total_broker_percentage').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_broker_percentage',isset($for) ? $model->total_broker_percentage : '0',['step'=>'0.1','min'=>0,'max'=>'20','id'=>'total_broker_percentage',
            'class'=>'form-control vertical-spin','placeholder'=>'0.00', 'autocomplete'=>'off',
            'data-bts-button-down-class' => 'btn btn-primary', 'data-bts-button-up-class' => 'btn btn-primary', 'required',
            'onchange' => 'applyCalculation();', 'onkeyup' => 'applyCalculation();'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('total_broker_amount' ,__('general.total_broker_amount') ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_broker_amount',null,['id'=>'total_broker_amount','class'=>'form-control text-right','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
</div>
<div class="row mb-2 broker-row">
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
                        {!!  Form::text('broker[]',null,['class'=>'form-control hr-id', 'readonly', 'tabindex'=>'-1', 'required']) !!}
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
                    {!!  Form::number('brokerShare[]','100',['step'=>'any','min'=>'0.1','class'=>'form-control hr-share']) !!}
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

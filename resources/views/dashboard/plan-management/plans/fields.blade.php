<div class="row mb-3">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('plan_for' ,__('general.plan_for').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('plan_for',\App\Enum\PlanForEnum::getTranslationKeys(),null,['id'=>'plan_for','class'=>'form-control ','placeholder'=>__('general.plan_for'),'style' => 'width:100%;']) !!}
    </div>

    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('buildings' ,__('general.buildings') ,['class'=>'form-label']))   !!}
        {!!  Form::select('buildings[]',\App\Services\BuildingService::getBuildingDropdown(),null,['buildings[]'=>'plan_for','class'=>'form-control select2','multiple','style' => 'width:100%;']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('floors' ,__('general.floors') ,['class'=>'form-label']))   !!}
        {!!  Form::select('floors[]',\App\Services\FloorService::getFloorsForDropdown(),null,['id'=>'floors[]','class'=>'form-control select2','multiple','style' => 'width:100%;']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('flats' ,__('general.flats') ,['class'=>'form-label']))   !!}
        {!!  Form::select('flat_id',\App\Services\FlatService::getFlatForDropdown(),null,['id'=>'flats[]','class'=>'form-control select2','multiple']) !!}
    </div>

    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('months' ,__('general.months').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('months', 0,['id'=>'months', 'class'=>'form-control vertical-spin', 'onchange' => 'calculateInstallments();'])  !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('installment_duration' ,__('general.installment_duration').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('installment_duration', \App\Services\GeneralService::getInstallmentDurationForDropdown(),null,['id'=>'installment_duration',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_installment_duration'), 'required',
            'onchange'=>'calculateInstallments();'])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('total_installments' ,__('general.total_installments'),['class'=>'form-label']))   !!}
        {!!  Form::text('total_installments',null,['id'=>'total_installments','class'=>'form-control ','placeholder'=>'0', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('reminder_days' ,__('general.reminder_before_days').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('reminder_days',isset($for) ? $model->reminder_days : '10',['step'=>'1','min'=>'1','id'=>'reminder_days','class'=>'form-control ','placeholder'=>'0', 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('down_payment_type' ,__('general.down_payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('down_payment_type', \App\Services\GeneralService::getDiscountTypesForDropdown() ,isset($for) ? $model->down_payment_type : null,['id'=>'down_payment_type','class'=>'form-control select2', 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('down_payment_value' ,__('general.down_payment_value').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('down_payment_value',isset($for) ? $model->down_payment_value : null,['step'=>'any','min'=>'0','id'=>'down_payment_value','class'=>'form-control ','placeholder'=>'0', 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('penalties' ,__('general.penalties') ,['class'=>'form-label-label']))   !!}
        <div class="form-check form-switch mt-3">
            {!! Form::checkbox('penalties', true, isset($for) ? $model->penalties : false,['class'=>'form-check-input', 'id' => 'penalties']) !!}
        </div>
    </div>
</div>
<div class="row mb-2 penalty-row" style="{{(isset($for) && $model->penalties == true) ? '' : 'display: none;'}}">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('first_penalty' ,__('general.first_penalty') ,['class'=>'form-label-label']))   !!}
        <div class="form-check form-switch">
            {!! Form::checkbox('first_penalty', true, isset($for) ? $model->first_penalty : false,['class'=>'form-check-input', 'id' => 'first_penalty']) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('first_penalty_days' ,__('general.penalty_after_days') ,['class'=>'form-label']))   !!}
        {!!  Form::number('first_penalty_days',null,['step'=>'1','min'=>'1','id'=>'first_penalty_days','class'=>'form-control ','placeholder'=>'0', (isset($for) && $model->first_penalty == true) ? '' : 'disabled']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('first_penalty_type' ,__('general.penalty_type') ,['class'=>'form-label']))   !!}
        {!!  Form::select('first_penalty_type', \App\Services\GeneralService::getDiscountTypesForDropdown(),null,['id'=>'first_penalty_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_penalty_type'),'style'=>'width:100%;', (isset($for) && $model->first_penalty == true) ? '' : 'disabled'])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('first_penalty_charges' ,__('general.penalty_charges') ,['class'=>'form-label']))   !!}
        {!!  Form::number('first_penalty_charges',null,['step'=>'any','min'=>'1','id'=>'first_penalty_charges','class'=>'form-control ','placeholder'=>'0', (isset($for) && $model->first_penalty == true) ? '' : 'disabled']) !!}
    </div>
</div>
<div class="row mb-2 penalty-row" style="{{(isset($for) && $model->penalties == true) ? '' : 'display: none;'}}">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('second_penalty' ,__('general.second_penalty') ,['class'=>'form-label-label']))   !!}
        <div class="form-check form-switch">
            {!! Form::checkbox('second_penalty', true, isset($for) ? $model->second_penalty : false,['class'=>'form-check-input', 'id' => 'second_penalty']) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('second_penalty_days' ,__('general.penalty_after_days') ,['class'=>'form-label']))   !!}
        {!!  Form::number('second_penalty_days',null,['step'=>'1','min'=>'1','id'=>'second_penalty_days','class'=>'form-control ','placeholder'=>'0', (isset($for) && $model->second_penalty == true) ? '' : 'disabled']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('second_penalty_type' ,__('general.penalty_type') ,['class'=>'form-label']))   !!}
        {!!  Form::select('second_penalty_type', \App\Services\GeneralService::getDiscountTypesForDropdown(),null,['id'=>'second_penalty_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_penalty_type'),'style'=>'width:100%;', (isset($for) && $model->second_penalty == true) ? '' : 'disabled'])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('second_penalty_charges' ,__('general.penalty_charges') ,['class'=>'form-label']))   !!}
        {!!  Form::number('second_penalty_charges',null,['step'=>'any','min'=>'1','id'=>'second_penalty_charges','class'=>'form-control ','placeholder'=>'0', (isset($for) && $model->second_penalty == true) ? '' : 'disabled']) !!}
    </div>
</div>
<div class="row mb-2 penalty-row" style="{{(isset($for) && $model->penalties == true) ? '' : 'display: none;'}}">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('third_penalty' ,__('general.third_penalty') ,['class'=>'form-label-label']))   !!}
        <div class="form-check form-switch">
            {!! Form::checkbox('third_penalty', true, isset($for) ? $model->third_penalty : false,['class'=>'form-check-input', 'id' => 'third_penalty']) !!}
        </div>
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('third_penalty_days' ,__('general.penalty_after_days') ,['class'=>'form-label']))   !!}
        {!!  Form::number('third_penalty_days',null,['step'=>'1','min'=>'1','id'=>'third_penalty_days','class'=>'form-control ','placeholder'=>'0', (isset($for) && $model->third_penalty == true) ? '' : 'disabled']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('third_penalty_type' ,__('general.penalty_type') ,['class'=>'form-label']))   !!}
        {!!  Form::select('third_penalty_type', \App\Services\GeneralService::getDiscountTypesForDropdown(),null,['id'=>'third_penalty_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_penalty_type'),'style'=>'width:100%;', (isset($for) && $model->third_penalty == true) ? '' : 'disabled'])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('third_penalty_charges' ,__('general.penalty_charges') ,['class'=>'form-label']))   !!}
        {!!  Form::number('third_penalty_charges',null,['step'=>'any','min'=>'1','id'=>'third_penalty_charges','class'=>'form-control ','placeholder'=>'0', (isset($for) && $model->third_penalty == true) ? '' : 'disabled']) !!}
    </div>
</div>

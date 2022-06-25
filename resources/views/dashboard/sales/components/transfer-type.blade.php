<h4 class="card-title text-purple">{{ __('general.transfer_details') }}</h4>
<hr>

<div class="row mb-2">
    <div class="col-md-2">
        {!!  Html::decode(Form::label('date' ,__('general.date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::text('date',\App\Services\GeneralService::formatDate((isset($for) ? $model->date : \Carbon\Carbon::today())),['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('transfer_no' ,__('general.transfer_no').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('transfer_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('TRANSFER'),['id'=>'transfer_fee','class'=>'form-control','readonly', 'tabindex' => '-1']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('revision_no' ,__('general.revision_no').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('revision_no', null,['id'=>'revision_no','class'=>'form-control','readonly', 'tabindex' => '-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('transfer_type' ,__('general.transfer_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('transfer_type', \App\Services\GeneralService::getTransferTypesForDropdown(),null,['id'=>'transfer_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_transfer_type'),'required','style'=>'width:100%'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('transfer_sub_type' ,__('general.transfer_sub_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('transfer_sub_type', \App\Services\GeneralService::getTransferSubTypesForDropdown(),null,['id'=>'transfer_sub_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_transfer_sub_type'),'required','style'=>'width:100%'])
        !!}
    </div>
</div>

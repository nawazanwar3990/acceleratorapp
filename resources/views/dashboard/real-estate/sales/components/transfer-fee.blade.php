<h4 class="card-title text-purple">{{ __('general.transfer_fee_details') }}</h4>
<hr>
<div class="row mb-2">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-5">
                {!!  Html::decode(Form::label('company_brokery' ,__('general.company_brokery') ,['class'=>'col-form-label']))   !!}
            </div>
            <div class="col-md-7 mt-2">
                <div class="form-check form-switch">
                    {!! Form::checkbox('company_brokery', true, false,['class'=>'form-check-input', 'id' => 'company_brokery', 'onchange' => 'updateBrokerView();']) !!}
                </div>

            </div>
        </div>

    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-8">
                <div class="row">
                    <div class="col text-right mt-2">
                        {!!  Html::decode(Form::label('transfer_fee' ,__('general.transfer_fee').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                    </div>
                    <div class="col">
                        {!!  Form::text('transfer_fee','10000.00',['step'=>'any','min'=>'1','id'=>'transfer_fee','class'=>'form-control pull-right','placeholder'=>'0.00', 'required']) !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

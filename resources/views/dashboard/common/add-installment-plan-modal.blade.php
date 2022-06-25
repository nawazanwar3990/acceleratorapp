<div id="add-installment-plan-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url' => route('dashboard.add.installment-plan-ajax'), 'method' => 'POST','files' => true,'id' =>'add-installment-plan-form']) !!}
            <x-created-by-field></x-created-by-field>
            <x-hidden-building-id></x-hidden-building-id>
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">{{ __('general.add_installment_plan') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('name' ,__('general.name') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::text('name', null,['id'=>'installment_modal_name', 'class'=>'form-control', 'required'])  !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('months' ,__('general.months') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::text('months', null,['id'=>'installment_modal_months', 'class'=>'form-control month-vertical-spin', 'required', 'onchange' => 'calculateTotalInstallments();'])  !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('installment_duration' ,__('general.installment_duration') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::select('installment_duration', \App\Services\GeneralService::getInstallmentDurationForDropdown(),null,['id'=>'installment_modal_installment_duration',
                                'class'=>'select2 form-control', 'placeholder'=>__('general.ph_installment_duration'),'required','style'=>'width:100%', 'onchange' => 'calculateTotalInstallments();'])
                            !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('reminder_days' ,__('general.reminder_before_days').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::number('reminder_days', '10',['step'=>'1','min'=>'1','id'=>'installment_modal_reminder_days','class'=>'form-control ','placeholder'=>'0', 'required']) !!}
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('total_installments' ,__('general.total_installments') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('total_installments', null,['id'=>'installment_modal_total_installments', 'class'=>'form-control', 'required', 'readonly', 'tabindex'=>'-1'])  !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.save') }}</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


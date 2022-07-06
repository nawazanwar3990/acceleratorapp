<div class="row">
    <div class="col-md-12">
        <h4 class="card-title text-purple">{{ __('general.plan_detail') }}</h4>
        <hr>
    </div>
    <div class="row mb-3">
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'form-label']))   !!}
            {!!  Form::text('name',$plan->name,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'),'readonly' ]) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('months' ,__('general.months') ,['class'=>'form-label']))   !!}
            {!!  Form::text('months', $plan->months,['id'=>'months', 'class'=>'form-control vertical-spin','readonly'])  !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('installment_duration' ,__('general.installment_duration') ,['class'=>'form-label']))   !!}
            {!!  Form::text('installment_duration',\App\Services\GeneralService::getInstallmentDurationForDropdown($plan->installment_duration),['id'=>'months', 'class'=>'form-control vertical-spin','readonly'])  !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('total_installments' ,__('general.total_installments'),['class'=>'form-label']))   !!}
            {!!  Form::text('total_installments',$plan->total_installments,['id'=>'total_installments','class'=>'form-control ','readonly']) !!}
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('reminder_days' ,__('general.reminder_before_days') ,['class'=>'form-label']))   !!}
            {!!  Form::number('reminder_days',$plan->reminder_days,['step'=>'1','min'=>'1','id'=>'reminder_days','class'=>'form-control','readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('down_payment_type' ,__('general.down_payment_type') ,['class'=>'form-label']))   !!}
            {!!  Form::text('down_payment_type',\App\Services\GeneralService::getDiscountTypesForDropdown($plan->down_payment_type),['id'=>'months', 'class'=>'form-control vertical-spin','readonly'])  !!}
        </div>
        @php
            $down_payment =0;
            if($plan->down_payment_type == 1){
                 $down_payment = \App\Services\GeneralService::number_format($plan->down_payment_value)." ".\App\Services\GeneralService::get_default_currency();
            } else {
                 $down_payment =  $plan->down_payment_value ."%";
           }
        @endphp
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('down_payment_value' ,__('general.down_payment_value') ,['class'=>'form-label']))   !!}
            {!!  Form::text('down_payment_value',$down_payment,['id'=>'down_payment_value', 'class'=>'form-control vertical-spin','readonly'])  !!}
        </div>
    </div>
</div>

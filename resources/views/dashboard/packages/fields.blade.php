<div class="row mb-3">
    {!! Form::hidden('package_type',$type,['class'=>'form-control','readonly']) !!}
    @isset($model_id)
        {!! Form::hidden('model_id',$model_id,['class'=>'form-control','readonly']) !!}
    @endisset
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('payment_process' ,__('general.payment_process'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('payment_process',\App\Enum\PaymentTypeProcessEnum::getTranslationKeys(),isset($model_id)?\App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT:\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT,['id'=>'payment_process','class'=>'form-control','placeholder'=>trans('general.select')])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.package_name').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.package_name'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('duration_type_id' ,__('general.duration_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::select('duration_type_id',\App\Services\PackageService::pluck_duration(),isset($model)?null:\App\Enum\DurationEnum::MONTHLY,['id'=>'duration_type_id','class'=>'form-control ','placeholder'=>__('general.duration_type'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('duration_limit' ,__('general.duration_limit').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::number('duration_limit',1,['id'=>'duration_limit','class'=>'form-control ','placeholder'=>__('general.duration_limit'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('price' ,__('general.price').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::number('price',null,['id'=>'price','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('reminder_days' ,__('general.reminder_days') ,['class'=>'form-label'])) !!}
        {!!  Form::number('reminder_days',null,['id'=>'reminder_days','class'=>'form-control ']) !!}
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-check form-switch">
            {!!  Html::decode(Form::label('status' ,'Enable/Disable' ,['class'=>'col-form-label pt-0']))   !!}
            {!! Form::checkbox('status', true, $for=='edit' ? $model->status : true,['class'=>'form-check-input']) !!}
        </div>
    </div>
</div>
@if($type==\App\Enum\PackageTypeEnum::MENTOR)
    <div class="row pt-4 justify-content-center">
        <div class="col-12">
            @foreach(\App\Services\ServiceData::get_mentor_services() as $parent_service)
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="card-title fw-bold mb-0">{{ $parent_service->name }} Services</h6>
                    </div>
                    <div class="card-body row">
                        @php
                           $services = \App\Services\ServiceData::get_mentor_child_services($parent_service->id);
                            if (isset($model_id) || isset($model)){
                                $model= isset($model_id)?\App\Services\GeneralService::get_model_by_type_and_id($type,$model_id):$model;
                                $existing_services = $model->services()->select('slug')->get()->toArray();
                                $services =isset($model_id)?$model->services:$services;
                            }else{
                                $existing_services = array();
                            }
                        @endphp
                        @include('dashboard.packages.components.services')
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    @php
        if (isset($model_id) || isset($model)){
            $model= isset($model_id)?\App\Services\GeneralService::get_model_by_type_and_id($type,$model_id):$model;
            $existing_services = $model->services()->select('slug')->get()->toArray();
            $services =isset($model_id)?$model->services:$services;
        }else{
            $existing_services = array();
        }
    @endphp
    @include('dashboard.packages.components.services')
@endif

<div class="row mb-3">
    {!! Form::hidden('package_type',$type,['class'=>'form-control','readonly']) !!}
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('payment_process' ,__('general.payment_process'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('payment_process',\App\Enum\PaymentTypeProcessEnum::getTranslationKeys(),null,['id'=>'payment_process','class'=>'form-control','placeholder'=>trans('general.select')])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
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
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{ trans('general.services_limit') }}</h5>
    </div>
    <div class="card-body">
        <table class="table custom-datatable">
            <thead>
            <tr>
                <th>{{ trans('general.name') }}</th>
                <th>{{ trans('general.limit') }}</th>
            </tr>
            </thead>
            @foreach($services as $service)
                <tr>
                    <th>
                        {!!  Form::hidden('services[name][]',$service->name) !!}
                        {{ ucwords(str_replace('_',' ',$service->name))}}
                    </th>
                    <td>
                        @php $old_value = (isset($model) && array_key_exists($service->name,$old_services))?$old_services[$service->name]:'0'  @endphp
                        {!!  Form::select('services[limit][]',\App\Services\ServiceData::get_package_services_range(),$old_value,['id'=>'module_limit','class'=>'select2 form-control form-select','style'=>'width:100%']) !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

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
@if(isset($model_id))
    @php
        $process_model=\App\Services\GeneralService::get_model_by_type_and_id($type,$model_id);
    @endphp
    @if($process_model->services)
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ trans('general.services') }}</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{ trans('general.name') }}</th>
                        <th>{{ trans('general.enter_limit') }}</th>
                    </tr>
                    </thead>
                    @foreach($process_model->services as $service)
                        <tr>
                            <th>
                                {!!  Form::hidden('services[id][]',$service->id) !!}
                                {{ ucwords(str_replace('_',' ',$service->name))}}
                            </th>
                            <td>
                                {!!  Form::select('services[limit][]',\App\Services\ServiceData::get_package_services_range(),0,['id'=>'module_limit','class'=>'select2 form-control form-select','style'=>'width:100%']) !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif
    {{-- @if($process_model->other_services)
         <div class="card">
             <div class="card-header">
                 <h5 class="card-title mb-0">{{ trans('general.other_services') }}</h5>
             </div>
             <div class="card-body">
                 <table class="table">
                     <thead>
                     <tr>
                         <th>{{ trans('general.name') }}</th>
                         <th>{{ trans('general.enter_limit') }}</th>
                     </tr>
                     </thead>
                     @foreach($process_model->other_services as $service)
                         <tr>
                             <th>
                                 {!!  Form::hidden('services[id][]',$service) !!}
                                 {{ ucwords(str_replace('_',' ',$service))}}
                             </th>
                             <td>
                                 {!!  Form::select('services[limit][]',\App\Services\ServiceData::get_package_services_range(),0,['id'=>'module_limit','class'=>'select2 form-control form-select','style'=>'width:100%']) !!}
                             </td>
                         </tr>
                     @endforeach
                 </table>
             </div>
         </div>
     @endif--}}
@else
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">{{ trans('general.services_limit') }}</h5>
        </div>
        <div class="card-body">
            @foreach($services as $service)
                <div class="row mb-3">
                    {!!  Form::hidden('services[id][]',$service->id) !!}
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 align-self-center">
                        {{ $service->name }}
                    </div>
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 align-self-center">
                        <div class="row">
                            @if($service->slug === 'incubator')
                                <div class="col-4 align-self-center">
                                    {!!  Html::decode(Form::label('buildings' ,__('general.buildings') ,['class'=>'form-label'])) !!}
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text p-2">
                                                <div class="form-check form-switch">
                                                    {!! Form::checkbox('unlimited','∞',false,['class'=>'form-check-input','onclick'=>'change_limit_switcher(this);']) !!}
                                                    {!! Form::label('unlimited',trans('general.unlimited'),['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        {!!  Form::text('services[limit][0][building_limit]',null,['class'=>'form-control','placeholder'=>trans('general.enter_limit')]) !!}
                                    </div>
                                </div>
                                <div class="col-4 align-self-center">
                                    {!!  Html::decode(Form::label('floors' ,__('general.floors') ,['class'=>'form-label'])) !!}
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text p-2">
                                                <div class="form-check form-switch">
                                                    {!! Form::checkbox('unlimited','∞',false,['class'=>'form-check-input','onclick'=>'change_limit_switcher(this);']) !!}
                                                    {!! Form::label('unlimited',trans('general.unlimited'),['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        {!!  Form::text('services[limit][0][floor_limit]',null,['class'=>'form-control','placeholder'=>trans('general.enter_limit')]) !!}
                                    </div>
                                </div>
                                <div class="col-4 align-self-center">
                                    {!!  Html::decode(Form::label('offices' ,__('general.offices') ,['class'=>'form-label'])) !!}
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text p-2">
                                                <div class="form-check form-switch">
                                                    {!! Form::checkbox('unlimited','∞',false,['class'=>'form-check-input','onclick'=>'change_limit_switcher(this);']) !!}
                                                    {!! Form::label('unlimited',trans('general.unlimited'),['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        {!!  Form::text('services[limit][0][office_limit]',null,['class'=>'form-control','placeholder'=>trans('general.enter_limit')]) !!}
                                    </div>
                                </div>
                            @else
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text p-2">
                                                <div class="form-check form-switch">
                                                    {!! Form::checkbox('unlimited','∞',false,['class'=>'form-check-input','onclick'=>'change_limit_switcher(this);']) !!}
                                                    {!! Form::label('unlimited',trans('general.unlimited'),['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        {!!  Form::text('services[limit][]',null,['class'=>'form-control','placeholder'=>trans('general.enter_limit')]) !!}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif


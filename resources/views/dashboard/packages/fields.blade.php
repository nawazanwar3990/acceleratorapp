<div class="row mb-3">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('types' ,__('general.types'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('types[]',\App\Enum\PackageTypeEnum::getTranslationKeys(),null,['id'=>'types[]',
            'class'=>'select2 form-control form-select','multiple','style'=>'width:100%'])
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
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{ trans('general.services_limit') }}</h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>{{ trans('general.name') }}</th>
                <th>{{ trans('general.limit') }}</th>
            </tr>
            </thead>
            @if( isset($model) &&  count($model->services)>0)
                @foreach($model->services as $service)
                    <tr>
                        <th>
                            {!!  Form::hidden('services[id][]',$service->id) !!}
                            {{ ucwords(str_replace('_',' ',$service->name))}}
                        </th>
                        <td>
                            {!!  Form::select('services[limit][]',\App\Services\ServiceData::get_package_services_range(),$service->pivot->limit,['id'=>'module_limit','class'=>'select2 form-control form-select','style'=>'width:100%']) !!}
                        </td>
                    </tr>
                @endforeach
            @else
                @foreach(\App\Services\ServiceData::get_package_services() as $service)
                    <tr>
                        <th>
                            {!!  Form::hidden('services[id][]',$service->id) !!}
                            {{ ucwords(str_replace('_',' ',$service->name))}}
                        </th>
                        <td>
                            {!!  Form::select('services[limit][]',\App\Services\ServiceData::get_package_services_range(),null,['id'=>'module_limit','class'=>'select2 form-control form-select','style'=>'width:100%']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
</div>


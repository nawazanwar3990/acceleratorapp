<div class="row mb-3">
    {!!  Form::hidden('no_of_persons',1,['id'=>'no_of_persons', 'class'=>'form-control vertical-spin','required','readonly'])  !!}
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
    </div>
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('duration' ,__('general.duration')." (".__('general.months').") ".'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::text('duration',1,['id'=>'duration','class'=>'form-control ','placeholder'=>'0','required']) !!}
    </div>
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('price' ,__('general.price')." (".\App\Services\GeneralService::get_default_currency().") ".'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::text('price',null,['id'=>'price','class'=>'form-control ','placeholder'=>'0','required']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">{{trans('general.basic_service')}}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach(\App\Services\ServiceData::getBasicServices() as $service)
                        <div class="col-md-3 mb-3">
                            <div class="form-check form-switch">
                                {!! Form::checkbox('basic_services[]',$service->id,null,['class'=>'form-check-input']) !!}
                                <label class="form-check-label">{{ $service->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">{{trans('general.additional_service')}}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach(\App\Services\ServiceData::getAdditionalServices() as $service)
                        <div class="col-md-3 mb-3">
                            <div class="form-check form-switch">
                                {!! Form::checkbox('additional_services[]',$service->id,null,['class'=>'form-check-input']) !!}
                                <label class="form-check-label">{{ $service->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@php
    $service_type = ($type=='company')?\App\Enum\ServiceTypeEnum::SERVICE_PROVIDER_COMPANY:\App\Enum\ServiceTypeEnum::FREELANCER;
    $services = \App\Models\Service::whereType($service_type)->whereStatus(true)->orderBy('name', 'ASC')->get();
    $existing_services = $model->services()->select('slug')->get()->toArray();
@endphp
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{ trans('general.services_limit') }}</h5>
    </div>
    <div class="card-body">
        @foreach($services as $key=>$service)
            @php $search_value = \App\Services\GeneralService::search_by_key_value($existing_services,'slug',$service->slug);  @endphp
            {!!  Form::hidden('services['.$service->slug.'][]',$service->id) !!}
            <div class="row mb-3 border-bottom">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 align-self-center">
                    <strong> {{ $service->name }}</strong>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 align-self-center">
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text p-2">
                                        <div class="form-check form-switch">
                                            {!! Form::checkbox('unlimited','∞',(isset($search_value[0]) && $search_value[0]['pivot']['limit']==='∞') ,['class'=>'form-check-input','onclick'=>'change_limit_switcher(this);']) !!}
                                            {!! Form::label('unlimited',trans('general.unlimited'),['class'=>'form-check-label']) !!}
                                        </div>
                                    </div>
                                </div>
                                {!!  Form::text('services[limit]['.$service->slug.']',isset($search_value[0])?$search_value[0]['pivot']['limit']:null,['class'=>'form-control','placeholder'=>trans('general.enter_limit')]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

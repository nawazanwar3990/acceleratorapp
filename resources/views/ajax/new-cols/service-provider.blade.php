<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('service_provider_name',trans('general.service_provider_name'),['class'=>'form-label']) !!}
    {!! Form::text('service_provider_name',$model->service_provider_name,['class'=>'form-control','readonly']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('service_provider_email',trans('general.service_provider_email'),['class'=>'form-label']) !!}
    {!! Form::text('service_provider_email',$model->service_provider_email,['class'=>'form-control','readonly']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('service_provider_contact_no',trans('general.service_provider_contact_no'),['class'=>'form-label']) !!}
    {!! Form::text('service_provider_contact_no',$model->service_provider_contact_no,['class'=>'form-control','readonly']) !!}
</div>

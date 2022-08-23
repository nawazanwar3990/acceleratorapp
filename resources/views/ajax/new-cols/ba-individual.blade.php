<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('accelerator_name',trans('general.accelerator_name'),['class'=>'form-label']) !!}
    {!! Form::text('accelerator_name',$model->user->getFullName(),['class'=>'form-control','readonly']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('accelerator_email',trans('general.accelerator_email'),['class'=>'form-label']) !!}
    {!! Form::text('accelerator_email',$model->user->email,['class'=>'form-control','readonly']) !!}
</div>

<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('company_name',trans('general.company_name'),['class'=>'form-label']) !!}
    {!! Form::text('company_name',$model->company_nmae,['class'=>'form-control','readonly']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('company_email',trans('general.company_email'),['class'=>'form-label']) !!}
    {!! Form::text('company_email',$model->company_email,['class'=>'form-control','readonly']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('company_contact_no',trans('general.company_contact_no'),['class'=>'form-label']) !!}
    {!! Form::text('company_contact_no',$model->company_contact_no,['class'=>'form-control','readonly']) !!}
</div>

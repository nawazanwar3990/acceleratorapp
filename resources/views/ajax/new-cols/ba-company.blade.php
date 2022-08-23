<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
    {!! Form::label('',trans('general.id',['class'=>'form-label'])) !!}
    {!! Form::text('',$model->id,['class'=>'form-control']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
    {!! Form::label('',trans('general.company_name',['class'=>'form-label'])) !!}
    {!! Form::text('',$model->company_name,['class'=>'form-control']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
    {!! Form::label('',trans('general.company_contact_no',['class'=>'form-label'])) !!}
    {!! Form::text('',$model->company_contact_no,['class'=>'form-control']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
    {!! Form::label('',trans('general.company_email',['class'=>'form-label'])) !!}
    {!! Form::text('',$model->company_email,['class'=>'form-control']) !!}
</div>

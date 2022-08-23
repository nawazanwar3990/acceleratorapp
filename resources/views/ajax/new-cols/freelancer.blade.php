<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
    {!! Form::label('',trans('general.id',['class'=>'form-label'])) !!}
    {!! Form::text('',$model->id,['class'=>'form-control']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
    {!! Form::label('',trans('general.name',['class'=>'form-label'])) !!}
    {!! Form::text('',$model->name,['class'=>'form-control']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
    {!! Form::label('',trans('general.email',['class'=>'form-label'])) !!}
    {!! Form::text('',$model->email,['class'=>'form-control']) !!}
</div>

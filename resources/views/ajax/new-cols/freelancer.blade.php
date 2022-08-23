<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('freelancer_name',trans('general.freelancer_name'),['class'=>'form-label']) !!}
    {!! Form::text('freelancer_name',$model->user->getFullName(),['class'=>'form-control','readonly']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('freelancer_email',trans('general.freelancer_email'),['class'=>'form-label']) !!}
    {!! Form::text('freelancer_email',$model->user->email,['class'=>'form-control','readonly']) !!}
</div>

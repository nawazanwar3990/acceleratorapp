<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('mentor_name',trans('general.mentor_name'),['class'=>'form-label']) !!}
    {!! Form::text('mentor_name',$model->user->getFullName(),['class'=>'form-control','readonly']) !!}
</div>
<div class="col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-12 mb-3 extra_info_field">
    {!! Form::label('mentor_email',trans('general.mentor_email'),['class'=>'form-label']) !!}
    {!! Form::text('mentor_email',$model->user->email,['class'=>'form-control','readonly']) !!}
</div>

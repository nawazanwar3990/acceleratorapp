<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('fp_name' ,__('general.name'),['class'=>'form-label']))   !!}
        {!!  Form::text('fp_name',isset($model)?$model->fp_name:null,['id'=>'fp_name','class'=>'form-control']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('fp_designation' ,__('general.designation'),['class'=>'form-label']))   !!}
        {!!  Form::text('fp_designation',isset($model)?$model->fp_designation:null,['id'=>'fp_designation','class'=>'form-control']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('fp_type' ,__('general.Employment_type'),['class'=>'form-label']))   !!}
        {!!  Form::select('fp_type',\App\Enum\EmploymentTypeEnum::getTranslationKeys(),isset($model)?$model->fp_type:null,['id'=>'fp_type','class'=>'form-control']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('fp_contact' ,__('general.contact'),['class'=>'form-label']))   !!}
        {!!  Form::number('fp_contact',isset($model)?$model->fp_contact:null,['id'=>'fp_contact','class'=>'form-control']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('fp_email' ,__('general.email'),['class'=>'form-label']))   !!}
        {!!  Form::email('fp_email',isset($model)?$model->fp_email:null,['id'=>'fp_email','class'=>'form-control']) !!}
    </div>

</div>

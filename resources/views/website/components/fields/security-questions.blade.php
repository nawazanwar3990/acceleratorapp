<div class="col-9">
    <div class="row">
        <div class="col-md-6 mb-3">
            {!!  Html::decode(Form::label('security_question_name' ,__('general.secret_question').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
            {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),isset($model->user)?$model->user->security_question_name:null,['id'=>'security_question_name','class'=>'input','placeholder'=>__('general.select'), 'required']) !!}
        </div>
        <div class="col-md-6 mb-3">
            {!!  Html::decode(Form::label('security_question_value' ,__('general.answer').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
            {!!  Form::text('security_question_value',isset($model->user)?$model->user->security_question_value:null,['id'=>'security_question_value','class'=>'input','required']) !!}
        </div>
        <div class="col-md-12    mb-3">
            {!!  Html::decode(Form::label('know_about_us' ,__('general.how_did_you_hear_about_us').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
            {!!  Form::select('know_about_us',\App\Enum\KnowAboutUsEnum::getTranslationKeys(),isset($model->user)?$model->user->know_about_us:null,['id'=>'know_about_us','class'=>'input','placeholder'=>__('general.select'), 'required']) !!}
        </div>
    </div>
</div>

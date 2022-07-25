<div class="row">
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('email' ,__('general.user_name'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('email',null,['id'=>'email','class'=>'form-control','required','placeholder'=>'abc@gmail.com']) !!}
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('password' ,__('general.password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>__('general.password'), 'required']) !!}
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('confirm_password' ,__('general.confirm_password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::password('password_confirmation',['id'=>'confirm_password','class'=>'form-control mobile-mask','placeholder'=>__('general.confirm_password'), 'required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('security_question_name' ,__('general.security_question_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),null,['id'=>'security_question_name','class'=>'form-control','placeholder'=>__('general.select'), 'required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('security_question_value' ,__('general.security_question_value'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('security_question_value',null,['id'=>'security_question_value','class'=>'form-control','required']) !!}
    </div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('know_about_us' ,__('general.know_about_us').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('know_about_us',\App\Enum\KnowAboutUsEnum::getTranslationKeys(),null,['id'=>'know_about_us','class'=>'form-control','placeholder'=>__('general.select'), 'required']) !!}
    </div>
</div>

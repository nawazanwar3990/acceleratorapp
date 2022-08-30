<div class="row">
    <div class="col-9">
        <div class="row">
            <div class="col-md-12 mb-3">
                {!!  Html::decode(Form::label('email' ,__('general.user_name').'(Email)'.'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
                {!!  Form::email('email',$model->user->email??null,['id'=>'email','class'=>'input','required','placeholder'=>'abc@gmail.com']) !!}
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mb-2">
                {!!  Html::decode(Form::label('first_name' ,__('general.first_name'),['class'=>'form-label']))   !!}
                {!!  Form::text('first_name',$model->user->first_name??null,['id'=>'first_name','class'=>'input']) !!}
            </div>
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('last_name' ,__('general.last_name'),['class'=>'form-label']))   !!}
                {!!  Form::text('last_name',$model->user->last_name??null,['id'=>'first_name','class'=>'input']) !!}
            </div>
        </div>
    </div>
    <div class="col-3">
        {!! Form::file('logo',['class'=>'dropify', 'data-height' => '150', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>(isset($model->logo) && count($model->logo))?asset($model->logo[0]->filename):'']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('password' ,__('general.password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        @if(isset($model->user))
            <input type="password" name="password" value="{{$model->user->normal_password}}"
                   class="input"/>
        @else
            {!!  Form::password('password',['id'=>'password','class'=>'input', 'required']) !!}
        @endif
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('confirm_password' ,__('general.confirm_password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        @if(isset($model->user))
            <input type="password" name="password_confirmation" class="input"
                   value="{{$model->user->normal_password}}"/>
        @else
            {!!  Form::password('password_confirmation',['id'=>'confirm_password','class'=>'input','required']) !!}
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('security_question_name' ,__('general.secret_question').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),isset($model->user)?$model->user->security_question_name:null,['id'=>'security_question_name','class'=>'input','placeholder'=>__('general.select'), 'required']) !!}
    </div>
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('security_question_value' ,__('general.answer').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::text('security_question_value',isset($model->user)?$model->user->security_question_value:null,['id'=>'security_question_value','class'=>'input','required']) !!}
    </div>
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('know_about_us' ,__('general.how_did_you_hear_about_us').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('know_about_us',\App\Enum\KnowAboutUsEnum::getTranslationKeys(),isset($model->user)?$model->user->know_about_us:null,['id'=>'know_about_us','class'=>'input','placeholder'=>__('general.select'), 'required']) !!}
    </div>
</div>

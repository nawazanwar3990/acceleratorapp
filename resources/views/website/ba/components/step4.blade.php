<div class="row">
    @if(isset($model->user))
        {!! Form::hidden('user_id',$model->user->id??'') !!}
    @endif
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('email' ,__('general.user_name').'(Email)'.'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::email('email',isset($model->user)?$model->user->email:null,['id'=>'email','class'=>'form-control','required','placeholder'=>'abc@gmail.com']) !!}
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('first_name' ,__('general.first_name'),['class'=>'form-label']))   !!}
        {!!  Form::text('first_name',isset($model->user)?$model->user->first_name:null,['id'=>'first_name','class'=>'form-control']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('last_name' ,__('general.last_name'),['class'=>'form-label']))   !!}
        {!!  Form::text('last_name',isset($model->user)?$model->user->last_name:null,['id'=>'first_name','class'=>'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('password' ,__('general.password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        @if(isset($model->user))
            <input type="password" name="password" value="{{$model->user->normal_password}}"/>
        @else
            {!!  Form::password('password',['id'=>'password','class'=>'form-control', 'required']) !!}
        @endif
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('confirm_password' ,__('general.confirm_password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        @if(isset($model->user))
            <input type="password" name="password_confirmation" value="{{$model->user->normal_password}}"/>
        @else
            {!!  Form::password('password_confirmation',['id'=>'confirm_password','class'=>'form-control','required']) !!}
        @endif
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('security_question_name' ,__('general.security_question_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),isset($model->user)?$model->user->security_question_name:null,['id'=>'security_question_name','class'=>'form-control','placeholder'=>__('general.select'), 'required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('security_question_value' ,__('general.security_question_value'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('security_question_value',isset($model->user)?$model->user->security_question_value:null,['id'=>'security_question_value','class'=>'form-control','required']) !!}
    </div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('know_about_us' ,__('general.know_about_us').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('know_about_us',\App\Enum\KnowAboutUsEnum::getTranslationKeys(),isset($model->user)?$model->user->know_about_us:null,['id'=>'know_about_us','class'=>'form-control','placeholder'=>__('general.select'), 'required']) !!}
    </div>
</div>

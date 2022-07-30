@if(isset($model) AND $model->type== \App\Enum\AcceleratorTypeEnum::INDIVIDUAL)
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#basic_info" role="tab" aria-selected="true">
                <span class="hidden-xs-down">{{ trans('general.basic_info') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#qualifications" role="tab" aria-selected="true">
                <span class="hidden-xs-down">{{ trans('general.qualifications') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#experiences" role="tab" aria-selected="true">
                <span class="hidden-xs-down">{{ trans('general.experiences') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#certifications" role="tab" aria-selected="true">
                <span class="hidden-xs-down">{{ trans('general.certifications') }}</span></a>
        </li>
    </ul>
@endif
<div class="tab-content tabcontent-border p-3">
    <div class="tab-pane active" id="basic_info" role="tabpanel">
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
            @if($model->type ==\App\Enum\AcceleratorTypeEnum::INDIVIDUAL)
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('ba_father_name' ,__('general.father_name'),['class'=>'form-label']))   !!}
                    {!!  Form::text('ba_father_name',$model->ba_father_name??null,['id'=>'ba_father_name','class'=>'form-control']) !!}
                </div>
            @endif
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('password' ,__('general.password').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                @if(isset($model->user))
                    <input type="password" name="password" value="{{$model->user->normal_password}}"
                           class="form-control"/>
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
                    <input type="password" name="password_confirmation" class="form-control"
                           value="{{$model->user->normal_password}}"/>
                @else
                    {!!  Form::password('password_confirmation',['id'=>'confirm_password','class'=>'form-control','required']) !!}
                @endif
            </div>
            @if($model->type ==\App\Enum\AcceleratorTypeEnum::INDIVIDUAL)
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('ba_contact' ,__('general.contact_number'),['class'=>'form-label']))   !!}
                    {!!  Form::text('ba_contact',$model->ba_contact??null,['id'=>'ba_contact','class'=>'form-control']) !!}
                </div>
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('ba_emergency_contact' ,__('general.emergency_contact_number'),['class'=>'form-label']))   !!}
                    {!!  Form::text('ba_emergency_contact',$model->ba_emergency_contact??null,['id'=>'ba_emergency_contact','class'=>'form-control']) !!}
                </div>
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('ba_postal_code' ,__('general.postal_code'),['class'=>'form-label']))   !!}
                    {!!  Form::text('ba_postal_code',$model->ba_postal_code??null,['id'=>'ba_postal_code','class'=>'form-control']) !!}
                </div>
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('ba_already_emp' ,__('general.already_employee'),['class'=>'form-label']))   !!}
                    {!!  Form::select('ba_already_emp',['yes'=>'Yes','no'=>'No'],$model->ba_already_emp??null,['id'=>'ba_already_emp','class'=>'form-control','placeholder'=>'select']) !!}
                </div>
            @endif
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('security_question_name' ,__('general.secret_question').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('security_question_name',\App\Enum\SecurityQuestionEnum::getTranslationKeys(),isset($model->user)?$model->user->security_question_name:null,['id'=>'security_question_name','class'=>'form-control','placeholder'=>__('general.select'), 'required']) !!}
            </div>
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('security_question_value' ,__('general.answer'),['class'=>'col-form-label']))   !!}
                {!!  Form::text('security_question_value',isset($model->user)?$model->user->security_question_value:null,['id'=>'security_question_value','class'=>'form-control','required']) !!}
            </div>
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('know_about_us' ,__('general.how_did_you_hear_about_us').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('know_about_us',\App\Enum\KnowAboutUsEnum::getTranslationKeys(),isset($model->user)?$model->user->know_about_us:null,['id'=>'know_about_us','class'=>'form-control','placeholder'=>__('general.select'), 'required']) !!}
            </div>
        </div>
    </div>
    <div class="tab-pane" id="qualifications" role="tabpanel">
        <div class="row">
            <div class="col-12">
                @include('website.components.fields.qualification')
            </div>
        </div>
    </div>
    <div class="tab-pane" id="experiences" role="tabpanel">
        <div class="row">
            <div class="col-12">
                @include('website.components.fields.experience')
            </div>
        </div>
    </div>
    <div class="tab-pane" id="certifications" role="tabpanel">
        <div class="row">
            <div class="col-12">
                @include('website.components.fields.certifications')
            </div>
        </div>
    </div>
</div>




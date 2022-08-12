<div class="row">
    @if(isset($model->user))
        {!! Form::hidden('user_id',$model->user->id??'') !!}
    @endif
    <div class="col-9">
        <div class="row">
            <div class="col-md-12 mb-3">
                {!!  Html::decode(Form::label('email' ,__('general.user_name').'(Email)'.'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
                {!!  Form::email('email',$model->user->email??null,['id'=>'email','class'=>'form-control','required','placeholder'=>'abc@gmail.com']) !!}
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mb-2">
                {!!  Html::decode(Form::label('first_name' ,__('general.first_name'),['class'=>'form-label']))   !!}
                {!!  Form::text('first_name',$model->user->first_name??null,['id'=>'first_name','class'=>'form-control']) !!}
            </div>
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('last_name' ,__('general.last_name'),['class'=>'form-label']))   !!}
                {!!  Form::text('last_name',$model->user->last_name??null,['id'=>'first_name','class'=>'form-control']) !!}
            </div>
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
        </div>
    </div>
    <div class="col-3">
        {!! Form::file('logo',['class'=>'dropify', 'data-height' => '150', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>(isset($model->logo) && count($model->logo))?asset($model->logo[0]->filename):'']) !!}
    </div>
</div>
<div class="row">
    @if($type =='individual')
        <div class="col-md-4 mb-3">
            {!!  Html::decode(Form::label('ba_father_name' ,__('general.father_name'),['class'=>'form-label']))   !!}
            {!!  Form::text('ba_father_name',$model->ba_father_name??null,['id'=>'ba_father_name','class'=>'form-control']) !!}
        </div>
    @endif
    @if($type =='individual')
        <div class="col-md-4 mb-3">
            {!!  Html::decode(Form::label('ba_contact' ,__('general.contact_number'),['class'=>'form-label']))   !!}
            {!!  Form::text('ba_contact',$model->ba_contact??null,['id'=>'ba_contact','class'=>'form-control']) !!}
        </div>
        <div class="col-md-4 mb-3">
            {!!  Html::decode(Form::label('ba_emergency_contact' ,__('general.emergency_contact_number'),['class'=>'form-label']))   !!}
            {!!  Form::text('ba_emergency_contact',$model->ba_emergency_contact??null,['id'=>'ba_emergency_contact','class'=>'form-control']) !!}
        </div>
        <div class="col-md-4 mb-3">
            {!!  Html::decode(Form::label('ba_postal_code' ,__('general.postal_code'),['class'=>'form-label']))   !!}
            {!!  Form::text('ba_postal_code',$model->ba_postal_code??null,['id'=>'ba_postal_code','class'=>'form-control']) !!}
        </div>
        <div class="col-4 mb-3">
            {!!  Html::decode(Form::label('ba_already_emp' ,__('general.already_employee'),['class'=>'form-label']))   !!}
            {!!  Form::select('ba_already_emp',['yes'=>'Yes','no'=>'No'],$model->ba_already_emp??'no',['id'=>'ba_already_emp','class'=>'form-control','placeholder'=>'select','onchange'=>'already_employee(this);']) !!}
        </div>
        @include('website.components.fields.employee-detail-holder')
    @endif
    @include('website.components.fields.security-questions')
</div>
<div style="margin-top: 4rem!important;">
    @if($type=='individual')
        @include('website.components.fields.extra-user-fields',['extra_field_for'=>'individual'])
    @endif
</div>

@include('website.components.fields.user-tabs')
<div class="tab-content tabcontent-border p-3">
    <div class="tab-pane active" id="basic_info" role="tabpanel">
        <div class="row">
            @if(isset($model->user))
                {!! Form::hidden('user_id',$model->user->id??'') !!}
            @endif
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('email' ,__('general.user_name').'(Email)'.'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
                {!!  Form::email('email',$model->user->email??null,['id'=>'email','class'=>'form-control','required','placeholder'=>'abc@gmail.com']) !!}
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('first_name' ,__('general.first_name'),['class'=>'form-label']))   !!}
                {!!  Form::text('first_name',$model->user->first_name??null,['id'=>'first_name','class'=>'form-control']) !!}
            </div>
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('last_name' ,__('general.last_name'),['class'=>'form-label']))   !!}
                {!!  Form::text('last_name',$model->user->last_name??null,['id'=>'first_name','class'=>'form-control']) !!}
            </div>
            @if($model->type ==\App\Enum\FreelancerTypeEnum::INDIVIDUAL)
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('f_father_name' ,__('general.father_name'),['class'=>'form-label']))   !!}
                    {!!  Form::text('f_father_name',$model->f_father_name??null,['id'=>'f_father_name','class'=>'form-control']) !!}
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
            @if($model->type ==\App\Enum\FreelancerTypeEnum::INDIVIDUAL)
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('f_contact' ,__('general.contact_number'),['class'=>'form-label']))   !!}
                    {!!  Form::text('f_contact',$model->f_contact??null,['id'=>'f_contact','class'=>'form-control']) !!}
                </div>
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('f_emergency_contact' ,__('general.emergency_contact_number'),['class'=>'form-label']))   !!}
                    {!!  Form::text('f_emergency_contact',$model->f_emergency_contact??null,['id'=>'f_emergency_contact','class'=>'form-control']) !!}
                </div>
                <div class="col-md-6 mb-3">
                    {!!  Html::decode(Form::label('f_postal_code' ,__('general.postal_code'),['class'=>'form-label']))   !!}
                    {!!  Form::text('f_postal_code',$model->f_postal_code??null,['id'=>'f_postal_code','class'=>'form-control']) !!}
                </div>
                <div class="col-12 mb-3">
                    {!!  Html::decode(Form::label('f_already_emp' ,__('general.already_employee'),['class'=>'form-label']))   !!}
                    {!!  Form::select('f_already_emp',['yes'=>'Yes','no'=>'No'],$model->f_already_emp??'no',['id'=>'f_already_emp','class'=>'form-control','placeholder'=>'select','onchange'=>'already_employee(this);']) !!}
                </div>
            @endif
        </div>
        @if($model->type ==\App\Enum\FreelancerTypeEnum::INDIVIDUAL)
            @include('website.components.fields.employee-detail-holder')
        @endif
        @include('website.components.fields.security-questions')
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
    <div class="tab-pane" id="media_tab" role="tabpanel">
        <div class="row">
            <div class="col-12">
                @include('website.components.fields.media')
            </div>
        </div>
    </div>
</div>




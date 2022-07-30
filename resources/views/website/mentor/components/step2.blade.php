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
        <a class="nav-link" data-bs-toggle="tab" href="#projects" role="tab" aria-selected="true">
            <span class="hidden-xs-down">{{ trans('general.projects') }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#certifications" role="tab" aria-selected="true">
            <span class="hidden-xs-down">{{ trans('general.certifications') }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#media_tab" role="tab" aria-selected="true">
            <span class="hidden-xs-down">{{ trans('general.media') }}</span></a>
    </li>
</ul>

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
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('m_father_name' ,__('general.father_name'),['class'=>'form-label']))   !!}
                {!!  Form::text('m_father_name',$model->m_father_name??null,['id'=>'m_father_name','class'=>'form-control']) !!}
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
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('m_contact' ,__('general.contact_number'),['class'=>'form-label']))   !!}
                {!!  Form::text('m_contact',$model->m_contact??null,['id'=>'m_contact','class'=>'form-control']) !!}
            </div>
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('m_emergency_contact' ,__('general.emergency_contact_number'),['class'=>'form-label']))   !!}
                {!!  Form::text('m_emergency_contact',$model->m_emergency_contact??null,['id'=>'m_emergency_contact','class'=>'form-control']) !!}
            </div>
            <div class="col-md-6 mb-3">
                {!!  Html::decode(Form::label('m_postal_code' ,__('general.postal_code'),['class'=>'form-label']))   !!}
                {!!  Form::text('m_postal_code',$model->m_postal_code??null,['id'=>'m_postal_code','class'=>'form-control']) !!}
            </div>
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('m_already_emp' ,__('general.already_employee'),['class'=>'form-label']))   !!}
                {!!  Form::select('m_already_emp',['yes'=>'Yes','no'=>'No'],$model->m_already_emp??'no',['id'=>'m_already_emp','class'=>'form-control','placeholder'=>'select','onchange'=>'already_employee(this);']) !!}
            </div>
        </div>
        @include('website.components.fields.security-questions')
    </div>
    <div class="tab-pane" id="qualifications" role="tabpanel">
        <div class="row">
            <div class="col-12">
                @include('website.components.fields.qualification')
            </div>
        </div>
    </div>
    <div class="tab-pane" id="projects" role="tabpanel">
        <div class="row">
            <div class="col-12">
                @include('website.components.fields.projects')
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




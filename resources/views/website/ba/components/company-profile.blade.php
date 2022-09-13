<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_name' ,__('general.company_name').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::text('company_name',isset($model)?$model->company_name:null,['id'=>'company_name','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('is_register_company' ,__('general.is_register_company'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('is_register_company',\App\Services\GeneralService::yesOrNoForDropdown(),isset($model)?$model->is_register_company:null,['id'=>'is_register_company','class'=>'form-control','required','placeholder'=>trans('general.select')]) !!}
    </div>
</div>
<div class="row @if(isset($model) AND $model->is_register_company=='yes') d-block @else d-none @endif"
     id="institute_holder">
    @include('website.components.fields.affiliation')
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_no_of_emp' ,__('general.company_no_of_emp').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::number('company_no_of_emp',isset($model)?$model->company_no_of_emp:null,['id'=>'company_no_of_emp','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_date_of_initiation' ,__('general.company_date_of_initiation').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::text('company_date_of_initiation',isset($model)?\Carbon\Carbon::parse($model->company_date_of_initiation)->format('Y-m-d'):null,['id'=>'company_date_of_initiation','class'=>'input datepicker','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_contact_no' ,__('general.company_contact_no').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::text('company_contact_no',isset($model)?$model->company_contact_no:null,['id'=>'company_contact_no','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_email' ,__('general.company_email').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::email('company_email',isset($model)?$model->company_email:null,['id'=>'company_email','class'=>'form-control','required']) !!}
    </div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('company_address' ,__('general.company_address').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::textarea('company_address',isset($model)?$model->company_address:null,['id'=>'company_address','class'=>'form-control','required','rows'=>3]) !!}
    </div>
    @include('website.components.fields.document')
</div>

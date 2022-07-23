<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_name' ,__('general.company_name'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('company_name',null,['id'=>'company_name','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('is_register_company' ,__('general.is_register_company'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('is_register_company',\App\Services\GeneralService::yesOrNoForDropdown(),null,['id'=>'is_register_company','class'=>'form-control','required','placeholder'=>trans('general.select')]) !!}
    </div>
</div>
<div class="row d-none" id="institute_holder">
    <div class="col-12 mb-3">
        <table class="table table-bordered table-hover table-sm">
            <thead class="thead-light">
            <tr>
                <th class="text-center">{{ __('general.institute_name') }}</th>
                <th class="text-center">{{ __('general.add_remove') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    {!!  Form::text('company_institutes[]',null,['id'=>'company_institutes[]','class'=>'form-control form-control-sm','autocomplete'=>'off', 'required']) !!}
                </td>
                <td class="text-center">
                    <a href="javascript:void(0);"
                       onclick="cloneRow(this);"
                       class="btn btn-xs btn-info">
                        <i class="bx bx-plus"></i>
                    </a>
                    <a href="javascript:void(0);" tabindex="18"
                       onclick="removeClonedRow(this);"
                       class="btn btn-xs btn-danger">
                        <i class="bx bx-minus"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_no_of_emp' ,__('general.company_no_of_emp'),['class'=>'col-form-label']))   !!}
        {!!  Form::number('company_no_of_emp',null,['id'=>'company_no_of_emp','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_rate_of_initiation' ,__('general.company_rate_of_initiation'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('company_rate_of_initiation',null,['id'=>'company_rate_of_initiation','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_contact_no' ,__('general.company_contact_no'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('company_contact_no',null,['id'=>'company_contact_no','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('company_email' ,__('general.company_email'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('company_email',null,['id'=>'company_email','class'=>'form-control','required']) !!}
    </div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('company_address' ,__('general.company_address'),['class'=>'col-form-label']))   !!}
        {!!  Form::textarea('company_address',null,['id'=>'company_address','class'=>'form-control','required','rows'=>3]) !!}
    </div>
</div>

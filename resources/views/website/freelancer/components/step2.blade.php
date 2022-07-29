<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('sp_name' ,__('general.sp_name').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::text('sp_name',isset($model)?$model->sp_name:null,['id'=>'sp_name','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('is_register_sp' ,__('general.is_register_sp'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('is_register_sp',\App\Services\GeneralService::yesOrNoForDropdown(),isset($model)?$model->is_register_sp:null,['id'=>'is_register_company','class'=>'form-control','required','placeholder'=>trans('general.select')]) !!}
    </div>
</div>
<div class="row @if(isset($model) AND $model->is_register_sp=='yes') d-block @else d-none @endif"
     id="institute_holder">
    <div class="col-12 mb-3">
        <table class="table table-bordered table-hover table-sm">
            <thead class="thead-light">
            <tr>
                <th class="text-center">{{ __('general.affiliate_with') }}</th>
                <th class="text-center">{{ __('general.add_remove') }}</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($model) AND $model->is_register_sp=='yes' AND count($model->sp_institutes)>0)
                @foreach($model->sp_institutes as $sp_institute)
                    <tr>
                        <td>
                            {!!  Form::text('sp_institutes[]',$sp_institute,['id'=>'sp_institutes[]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
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
                @endforeach
            @else
                <tr>
                    <td>
                        {!!  Form::text('sp_institutes[]',null,['id'=>'sp_institutes[]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
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
            @endif
            </tbody>
        </table>

    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('sp_no_of_emp' ,__('general.sp_no_of_emp').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::number('sp_no_of_emp',isset($model)?$model->sp_no_of_emp:null,['id'=>'sp_no_of_emp','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('sp_date_of_initiation' ,__('general.sp_date_of_initiation').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::date('sp_date_of_initiation',isset($model)?$model->sp_date_of_initiation:null,['id'=>'sp_date_of_initiation','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('sp_contact_no' ,__('general.sp_contact_no').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::text('sp_contact_no',isset($model)?$model->sp_contact_no:null,['id'=>'sp_contact_no','class'=>'form-control','required']) !!}
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('sp_email' ,__('general.sp_email').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::email('sp_email',isset($model)?$model->sp_email:null,['id'=>'sp_email','class'=>'form-control','required']) !!}
    </div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('sp_address' ,__('general.sp_address').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::textarea('sp_address',isset($model)?$model->sp_address:null,['id'=>'sp_address','class'=>'form-control','required','rows'=>3]) !!}
    </div>
</div>

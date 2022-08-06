<table class="table table-bordered">
    @if(isset($model) AND count($model->focal_persons)>0)
        @foreach($model->focal_persons as $person)
            <tbody>
            <tr>
                <td>
                    {!!  Html::decode(Form::label('fp_name[]' ,__('general.name'),['class'=>'form-label']))   !!}
                    {!!  Form::text('fp_name[]',$person->fp_name,['id'=>'focal[fp_name]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!!  Html::decode(Form::label('fp_designation[]' ,__('general.designation'),['class'=>'form-label']))   !!}
                    {!!  Form::text('fp_designation[]',$person->fp_designation,['id'=>'fp_designation[]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!!  Html::decode(Form::label('fp_emp_type[]' ,__('general.employment_type'),['class'=>'form-label']))   !!}
                    {!!  Form::select('fp_emp_type[]',\App\Enum\EmploymentTypeEnum::getTranslationKeys(),$person->fp_emp_type,['id'=>'fp_emp_type[]','class'=>'form-control','placeholder'=>'Select']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!!  Html::decode(Form::label('fp_contact[]' ,__('general.contact'),['class'=>'form-label']))   !!}
                    {!!  Form::text('fp_contact[]',$person->fp_contact,['id'=>'fp_contact[]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!!  Html::decode(Form::label('fp_email[]' ,__('general.email'),['class'=>'form-label']))   !!}
                    {!!  Form::text('fp_email[]',$person->fp_email,['id'=>'fp_email[]','class'=>'form-control']) !!}
                </td>
                <td style="text-align: center;padding-top: 42px;">
                    <a href="javascript:void(0);"
                       onclick="clone_table_body(this);"
                       class="btn btn-xs btn-info">
                        <i class="bx bx-plus"></i>
                    </a>
                    <a href="javascript:void(0);" tabindex="18"
                       onclick="remove_table_body(this);"
                       class="btn btn-xs btn-danger">
                        <i class="bx bx-minus"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        @endforeach
    @else
        <tbody>
        <tr>
            <td>
                {!!  Html::decode(Form::label('fp_name[]' ,__('general.name'),['class'=>'form-label']))   !!}
                {!!  Form::text('fp_name[]',null,['id'=>'focal[fp_name]','class'=>'form-control']) !!}
            </td>
            <td>
                {!!  Html::decode(Form::label('fp_designation[]' ,__('general.designation'),['class'=>'form-label']))   !!}
                {!!  Form::text('fp_designation[]',null,['id'=>'fp_designation[]','class'=>'form-control']) !!}
            </td>
            <td>
                {!!  Html::decode(Form::label('fp_emp_type[]' ,__('general.employment_type'),['class'=>'form-label']))   !!}
                {!!  Form::select('fp_emp_type[]',\App\Enum\EmploymentTypeEnum::getTranslationKeys(),null,['id'=>'fp_emp_type[]','class'=>'form-control','placeholder'=>'Select']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!!  Html::decode(Form::label('fp_contact[]' ,__('general.contact'),['class'=>'form-label']))   !!}
                {!!  Form::text('fp_contact[]',null,['id'=>'fp_contact[]','class'=>'form-control']) !!}
            </td>
            <td>
                {!!  Html::decode(Form::label('fp_email[]' ,__('general.email'),['class'=>'form-label']))   !!}
                {!!  Form::text('fp_email[]',null,['id'=>'fp_email[]','class'=>'form-control']) !!}
            </td>
            <td style="text-align: center;padding-top: 42px;">
                <a href="javascript:void(0);"
                   onclick="clone_table_body(this);"
                   class="btn btn-xs btn-info">
                    <i class="bx bx-plus"></i>
                </a>
                <a href="javascript:void(0);" tabindex="18"
                   onclick="remove_table_body(this);"
                   class="btn btn-xs btn-danger">
                    <i class="bx bx-minus"></i>
                </a>
            </td>
        </tr>
        </tbody>
    @endif
</table>

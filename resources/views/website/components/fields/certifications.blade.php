<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">{{ trans('general.certifications') }}</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-sm">
            <tbody>
            <tr>
                <td>
                    {!! Form::label('certifications[certificate_name][]',__('general.certificate_name'),['class'=>'form-label']) !!}
                    {!!  Form::text('certifications[certificate_name][]',null,['id'=>'certifications[certificate_name][]','class'=>'form-control','autocomplete'=>'off']) !!}
                </td>
                <td>
                    {!! Form::label('certifications[institute][]',__('general.institute'),['class'=>'form-label']) !!}
                    {!!  Form::text('certifications[institute][]',null,['id'=>'certifications[institute][]','class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('certifications[year][]',__('general.year'),['class'=>'form-label']) !!}
                    {!!  Form::text('certifications[year][]',null,['id'=>'certifications[year][]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('certifications[any_distinction][]',__('general.any_distinction'),['class'=>'form-label']) !!}
                    {!!  Form::text('certifications[any_distinction][]',null,['id'=>'certifications[any_distinction][]','class'=>'form-control']) !!}
                </td>
            </tr>
            <td colspan="2" class="text-center">
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
        </table>
    </div>
</div>

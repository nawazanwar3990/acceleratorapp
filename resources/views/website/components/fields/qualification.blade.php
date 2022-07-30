<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">{{ trans('general.qualifications') }}</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-sm">
            <tbody>
            <tr>
                <td>
                    {!! Form::label('qualifications[degree][]',__('general.degree'),['class'=>'form-label']) !!}
                    {!!  Form::text('qualifications[degree][]',null,['id'=>'qualifications[degree][]','class'=>'form-control','autocomplete'=>'off', 'required']) !!}
                </td>
                <td>
                    {!! Form::label('qualifications[institute][]',__('general.institute'),['class'=>'form-label']) !!}
                    {!!  Form::text('qualifications[institute][]',null,['id'=>'qualifications[institute][]','class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('qualifications[year_of_passing][]',__('general.year_of_passing'),['class'=>'form-label']) !!}
                    {!!  Form::text('qualifications[year_of_passing][]',null,['id'=>'qualifications[year_of_passing][]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('qualifications[grade][]',__('general.grade'),['class'=>'form-label']) !!}
                    {!!  Form::text('qualifications[grade][]',null,['id'=>'qualifications[grade][]','class'=>'form-control']) !!}
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

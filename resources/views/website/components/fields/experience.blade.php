<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">{{ trans('general.experiences') }}</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-sm">
            <tbody>
            <tr>
                <td>
                    {!! Form::label('experiences[company_name][]',__('general.company_name'),['class'=>'form-label']) !!}
                    {!!  Form::text('experiences[company_name][]',null,['id'=>'experiences[company_name][]','class'=>'form-control','autocomplete'=>'off', 'required']) !!}
                </td>
                <td>
                    {!! Form::label('experiences[designation][]',__('general.designation'),['class'=>'form-label']) !!}
                    {!!  Form::text('experiences[designation][]',null,['id'=>'experiences[designation][]','class'=>'form-control datepicker']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('experiences[duration][]',__('general.duration'),['class'=>'form-label']) !!}
                    {!!  Form::text('experiences[duration][]',null,['id'=>'experiences[duration][]','class'=>'form-control datepicker']) !!}
                </td>
                <td>
                    {!! Form::label('experiences[any_achievement][]',__('general.any_achievement'),['class'=>'form-label']) !!}
                    {!!  Form::text('experiences[any_achievement][]',null,['id'=>'experiences[any_achievement][]','class'=>'form-control']) !!}
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

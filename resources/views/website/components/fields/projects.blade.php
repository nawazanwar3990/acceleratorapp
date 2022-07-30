<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">{{ trans('general.projects') }}</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-sm">
            <tbody>
            <tr>
                <td>
                    {!! Form::label('projects[project_title][]',__('general.project_title'),['class'=>'form-label']) !!}
                    {!!  Form::text('projects[project_title][]',null,['id'=>'projects[project_title][]','class'=>'form-control','autocomplete'=>'off']) !!}
                </td>
                <td>
                    {!! Form::label('projects[starting_date][]',__('general.starting_date'),['class'=>'form-label']) !!}
                    {!!  Form::text('projects[starting_date][]',null,['id'=>'projects[starting_date][]','class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('projects[ending_date][]',__('general.ending_date'),['class'=>'form-label']) !!}
                    {!!  Form::text('projects[ending_date][]',null,['id'=>'projects[ending_date][]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('projects[type][]',__('general.project_type'),['class'=>'form-label']) !!}
                    {!!  Form::select('projects[type][]',\App\Enum\ProjectTypeEnum::getTranslationKeys(),['id'=>'projects[type][]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('projects[further_remarks][]',__('general.further_remarks'),['class'=>'form-label']) !!}
                    {!!  Form::textarea('projects[further_remarks][]',null,['id'=>'projects[further_remarks][]','class'=>'form-control']) !!}
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

<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">{{ trans('general.qualifications') }}</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-sm">
            @if(isset($model->qualifications) AND count($model->qualifications)>0)
                @foreach($model->qualifications  as $qualification)
                    <tbody>
                    <tr>
                        <td>
                            {!! Form::label('qualifications[degree][]',__('general.degree'),['class'=>'form-label fs-13']) !!}
                            {!!  Form::text('qualifications[degree][]',$qualification->degree,['id'=>'qualifications[degree][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                        </td>
                        <td>
                            {!! Form::label('qualifications[institute][]',__('general.institute'),['class'=>'form-label fs-13']) !!}
                            {!!  Form::text('qualifications[institute][]',$qualification->institute,['id'=>'qualifications[institute][]','class'=>'form-control form-control-sm']) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! Form::label('qualifications[year_of_passing][]',__('general.year_of_passing'),['class'=>'form-label fs-13']) !!}
                            {!!  Form::text('qualifications[year_of_passing][]',$qualification->year_of_passing,['id'=>'qualifications[year_of_passing][]','class'=>'form-control form-control-sm']) !!}
                        </td>
                        <td>
                            {!! Form::label('qualifications[grade][]',__('general.grade'),['class'=>'form-label fs-13']) !!}
                            {!!  Form::text('qualifications[grade][]',$qualification->grade,['id'=>'qualifications[grade][]','class'=>'form-control form-control-sm']) !!}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            @if($loop->last)
                                <a href="javascript:void(0);"
                                   onclick="clone_table_body(this);"
                                   class="btn btn-xs btn-info">
                                    <i class="bx bx-plus"></i>
                                </a>
                            @endif
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
                        {!! Form::label('qualifications[degree][]',__('general.degree'),['class'=>'form-label fs-13']) !!}
                        {!!  Form::text('qualifications[degree][]',null,['id'=>'qualifications[degree][]','class'=>'form-control form-control-sm','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::label('qualifications[institute][]',__('general.institute'),['class'=>'form-label fs-13']) !!}
                        {!!  Form::text('qualifications[institute][]',null,['id'=>'qualifications[institute][]','class'=>'form-control form-control-sm']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                        {!! Form::label('qualifications[year_of_passing][]',__('general.year_of_passing'),['class'=>'form-label fs-13']) !!}
                        {!!  Form::text('qualifications[year_of_passing][]',null,['id'=>'qualifications[year_of_passing][]','class'=>'form-control form-control-sm']) !!}
                    </td>
                    <td>
                        {!! Form::label('qualifications[grade][]',__('general.grade'),['class'=>'form-label fs-13']) !!}
                        {!!  Form::text('qualifications[grade][]',null,['id'=>'qualifications[grade][]','class'=>'form-control form-control-sm']) !!}
                    </td>
                </tr>
                <tr>
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
            @endif
        </table>
    </div>
</div>

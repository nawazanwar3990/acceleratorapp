<table class="table table-bordered table-sm">
    @if(isset($model->experiences) AND count($model->experiences)>0)
        @foreach($model->experiences  as $experience)
            <tbody>
            <tr>
                <td>
                    {!! Form::label('experiences[company_name][]',__('general.company_name'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('experiences[company_name][]',$experience->company_name,['id'=>'experiences[company_name][]','class'=>'input input-sm','autocomplete'=>'off']) !!}
                </td>
                <td>
                    {!! Form::label('experiences[designation][]',__('general.designation'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('experiences[designation][]',$experience->designation,['id'=>'experiences[designation][]','class'=>'input input-sm']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('experiences[duration][]',__('general.duration'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('experiences[duration][]',$experience->duration,['id'=>'experiences[duration][]','class'=>'input input-sm']) !!}
                </td>
                <td>
                    {!! Form::label('experiences[any_achievement][]',__('general.any_achievement'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('experiences[any_achievement][]',$experience->any_achievement,['id'=>'experiences[any_achievement][]','class'=>'input input-sm']) !!}
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
                {!! Form::label('experiences[company_name][]',__('general.company_name'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('experiences[company_name][]',null,['id'=>'experiences[company_name][]','class'=>'input input-sm','autocomplete'=>'off']) !!}
            </td>
            <td>
                {!! Form::label('experiences[designation][]',__('general.designation'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('experiences[designation][]',null,['id'=>'experiences[designation][]','class'=>'input input-sm']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('experiences[duration][]',__('general.duration'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('experiences[duration][]',null,['id'=>'experiences[duration][]','class'=>'input input-sm']) !!}
            </td>
            <td>
                {!! Form::label('experiences[any_achievement][]',__('general.any_achievement'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('experiences[any_achievement][]',null,['id'=>'experiences[any_achievement][]','class'=>'input input-sm']) !!}
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

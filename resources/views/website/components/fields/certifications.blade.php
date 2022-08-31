<table class="table table-bordered table-sm">
    @if(isset($model->certifications) AND count($model->certifications)>0)
        @foreach($model->certifications  as $certification)
            <tbody>
            <tr>
                <td>
                    {!! Form::label('certifications[certificate_name][]',__('general.certificate_name'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('certifications[certificate_name][]',$certification->certificate_name,['id'=>'certifications[certificate_name][]','class'=>'input input-sm','autocomplete'=>'off']) !!}
                </td>
                <td>
                    {!! Form::label('certifications[institute][]',__('general.institute'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('certifications[institute][]',$certification->institute,['id'=>'certifications[institute][]','class'=>'input']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('certifications[year][]',__('general.year'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('certifications[year][]',$certification->year,['id'=>'certifications[year][]','class'=>'input']) !!}
                </td>
                <td>
                    {!! Form::label('certifications[any_distinction][]',__('general.any_distinction'),['class'=>'form-label fs-13']) !!}
                    {!!  Form::text('certifications[any_distinction][]',$certification->any_distinction,['id'=>'certifications[any_distinction][]','class'=>'input']) !!}
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    @if($loop->last)
                        <a href="javascript:void(0);"
                           onclick="clone_table_body(this);"
                           class="button primary-btn btn-sm">
                            <i class="bx bx-plus"></i>
                        </a>
                    @endif
                    <a href="javascript:void(0);" tabindex="18"
                       onclick="remove_table_body(this);"
                       class="button primary-btn btn-sm">
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
                {!! Form::label('certifications[certificate_name][]',__('general.certificate_name'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('certifications[certificate_name][]',null,['id'=>'certifications[certificate_name][]','class'=>'input','autocomplete'=>'off']) !!}
            </td>
            <td>
                {!! Form::label('certifications[institute][]',__('general.institute'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('certifications[institute][]',null,['id'=>'certifications[institute][]','class'=>'input']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('certifications[year][]',__('general.year'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('certifications[year][]',null,['id'=>'certifications[year][]','class'=>'input']) !!}
            </td>
            <td>
                {!! Form::label('certifications[any_distinction][]',__('general.any_distinction'),['class'=>'form-label fs-13']) !!}
                {!!  Form::text('certifications[any_distinction][]',null,['id'=>'certifications[any_distinction][]','class'=>'input']) !!}
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">
                <a href="javascript:void(0);"
                   onclick="clone_table_body(this);"
                   class="button primary-btn btn-sm">
                    <i class="bx bx-plus"></i>
                </a>
                <a href="javascript:void(0);" tabindex="18"
                   onclick="remove_table_body(this);"
                   class="button primary-btn btn-sm">
                    <i class="bx bx-minus"></i>
                </a>
            </td>
        </tr>
        </tbody>
    @endif
</table>

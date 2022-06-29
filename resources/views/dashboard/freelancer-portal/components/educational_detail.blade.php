<table class="table table-bordered table-hover">
    <thead class="thead-light">
    <tr>
        <th class="text-center">{{ __('general.degree') }}</th>
        <th class="text-center">{{ __('general.institute') }}</th>
        <th class="text-center">{{ __('general.session') }}</th>
        <th class="text-center">{{ __('general.add_remove') }}</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($for))
        @if(count($model->purchaseDetails))
            @foreach($model->purchaseDetails as $purchaseDetail)
                <tr>
                    <td>
                        {!!  Form::text('freelanceEducation[degree][]',null,['id'=>'freelanceEducation[degree][]','class'=>'form-control','autocomplete'=>'off', 'required']) !!}
                    </td>
                    <td>
                        {!!  Form::text('freelanceEducation[institute][]',null,['id'=>'freelanceEducation[institute][]','class'=>'form-control']) !!}
                    </td>
                    <td>
                        {!!  Form::text('freelanceEducation[session][]',null,['id'=>'freelanceEducation[session][]','class'=>'form-control']) !!}
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0);"
                           onclick="cloneRow(this);"
                           class="btn btn-xs btn-info">
                            <i class="bx bx-plus-circle"></i>
                        </a>
                        <a href="javascript:void(0);" tabindex = "18"
                           onclick="removeClonedRow(this);"
                           class="btn btn-xs btn-danger">
                            <i class="bx bx-minus-circle"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>
                    {!!  Form::text('freelanceEducation[degree][]',null,['id'=>'freelanceEducation[degree][]','class'=>'form-control','autocomplete'=>'off', 'required']) !!}
                </td>
                <td>
                    {!!  Form::text('freelanceEducation[institute][]',null,['id'=>'freelanceEducation[institute][]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!!  Form::text('freelanceEducation[session][]',null,['id'=>'freelanceEducation[session][]','class'=>'form-control']) !!}
                </td>
                <td class="text-center">
                    <a href="javascript:void(0);"
                       onclick="cloneRow(this);"
                       class="btn btn-xs btn-info">
                        <i class="bx bx-plus-circle"></i>
                    </a>
                    <a href="javascript:void(0);" tabindex = "18"
                       onclick="removeClonedRow(this);"
                       class="btn btn-xs btn-danger">
                        <i class="bx bx-minus-circle"></i>
                    </a>
                </td>
            </tr>
        @endif
    @else
        <tr>
            <td>
                {!!  Form::text('freelanceEducation[degree][]',null,['id'=>'freelanceEducation[degree][]','class'=>'form-control','autocomplete'=>'off', 'required']) !!}
            </td>
            <td>
                {!!  Form::text('freelanceEducation[institute][]',null,['id'=>'freelanceEducation[institute][]','class'=>'form-control']) !!}
            </td>
            <td>
                {!!  Form::text('freelanceEducation[session][]',null,['id'=>'freelanceEducation[session][]','class'=>'form-control']) !!}
            </td>
            <td class="text-center">
                <a href="javascript:void(0);"
                   onclick="cloneRow(this);"
                   class="btn btn-xs btn-info">
                    <i class="bx bx-plus-circle"></i>
                </a>
                <a href="javascript:void(0);" tabindex = "18"
                   onclick="removeClonedRow(this);"
                   class="btn btn-xs btn-danger">
                    <i class="bx bx-minus-circle"></i>
                </a>
            </td>
        </tr>
    @endif
    </tbody>
</table>

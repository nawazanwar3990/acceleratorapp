<table class="table table-bordered table-hover">
    <thead class="thead-light">
    <tr>
        <th class="text-center">{{ __('general.degree') }}</th>
        <th class="text-center">{{ __('general.institute') }}</th>
        <th class="text-center">{{ __('general.session_start') }}</th>
        <th class="text-center">{{ __('general.session_end') }}</th>
        <th class="text-center">{{ __('general.add_remove') }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            {!!  Form::text('education[degree][]',null,['id'=>'education[degree][]','class'=>'form-control','autocomplete'=>'off', 'required']) !!}
        </td>
        <td>
            {!!  Form::text('education[institute][]',null,['id'=>'education[institute][]','class'=>'form-control']) !!}
        </td>
        <td>
            {!!  Form::text('education[session_start][]',null,['id'=>'education[session_start][]','class'=>'form-control']) !!}
        </td>
        <td>
            {!!  Form::text('education[session_end][]',null,['id'=>'education[session_end][]','class'=>'form-control']) !!}
        </td>
        <td class="text-center">
            <a href="javascript:void(0);"
               onclick="cloneRow(this);"
               class="btn btn-xs btn-info">
                <i class="bx bx-plus-circle"></i>
            </a>
            <a href="javascript:void(0);" tabindex="18"
               onclick="removeClonedRow(this);"
               class="btn btn-xs btn-danger">
                <i class="bx bx-minus-circle"></i>
            </a>
        </td>
    </tr>
    </tbody>
</table>

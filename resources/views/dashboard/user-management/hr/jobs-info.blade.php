<table class="table table-bordered table-hover">
    <thead class="thead-light">
    <tr>
        <th class="text-center">{{ __('general.last_designation') }}</th>
        <th class="text-center">{{ __('general.from') }}</th>
        <th class="text-center">{{ __('general.till') }}</th>
        <th class="text-center">{{ __('general.expertise') }}</th>
        <th class="text-center">{{ __('general.add_remove') }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            {!!  Form::text('jobs[designation][]',null,['id'=>'jobs[designation][]','class'=>'form-control','autocomplete'=>'off', 'required']) !!}
        </td>
        <td>
            {!!  Form::text('jobs[from][]',null,['id'=>'jobs[from][]','class'=>'form-control datepicker']) !!}
        </td>
        <td>
            {!!  Form::text('jobs[till][]',null,['id'=>'jobs[till][]','class'=>'form-control datepicker']) !!}
        </td>
        <td>
            {!!  Form::text('jobs[expertise][]',null,['id'=>'jobs[expertise][]','class'=>'form-control']) !!}
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
    </tbody>
</table>

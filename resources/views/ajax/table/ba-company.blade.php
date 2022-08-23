<table class="table">
    <thead>
    <tr>
        <th>{{trans('general.id')}}</th>
        <th>{{trans('general.company_name')}}</th>
        <th>{{trans('general.company_contact_no')}}</th>
        <th>{{trans('general.company_email')}}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            {{ $model->id }}
        </td>
        <td>
            {{ $model->company_name }}
        </td>
        <td>
            {{ $model->company_contact_no }}
        </td>
        <td>
            {{ $model->company_email }}
        </td>
    </tr>
    </tbody>
</table>

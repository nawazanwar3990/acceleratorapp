
<div class="card border">
    <div class="card-header ">
        <h6 class="mb-0">Detail of <strong>{{ strtoupper($model->company_name)  }}</strong></h6>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ trans('general.company_name') }}</th>
                <th>{{ trans('general.company_email') }}</th>
                <th>{{ trans('general.company_contact_no') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $model->company_name }}</td>
                <td>{{ $model->company_email }}</td>
                <td>{{ $model->company_contact_no }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

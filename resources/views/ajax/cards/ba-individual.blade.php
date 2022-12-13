{!! Form::hidden('mentors[]',$model->id) !!}
<div class="card border">
    <div class="card-header">
        <h6 class="mb-0">Detail of <strong>{{ strtoupper($model->user->getFullName())  }}</strong></h6>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ trans('general.accelerator_name') }}</th>
                <th>{{ trans('general.accelerator_email') }}</th>
                <th>{{ trans('general.contact') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $model->user->getFullName() }}</td>
                <td>{{ $model->user->email }}</td>
                <td>{{ $model->ba_contact }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

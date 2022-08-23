<table class="table">
    <thead>
    <tr>
        <th>{{trans('general.id')}}</th>
        <th>{{trans('general.name')}}</th>
        <th>{{trans('general.email')}}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            {{ $model->id }}
        </td>
        <td>
            {{ $model->user->getFullName() }}
        </td>
        <td>
            {{ $model->user->email }}
        </td>
    </tr>
    </tbody>

</table>

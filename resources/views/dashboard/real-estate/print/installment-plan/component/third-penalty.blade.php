<div class="col-4">
    <table class="table table-bordered">
        <thead class="bg-secondary">
        <tr>
            <td colspan="100%" class="text-center">{{ __('general.third_penalty') }}</td>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row">{{ __('general.third_penalty') }}</th>
            <td>{{ $records->third_penalty }}</td>
        </tr>

        <tr>
            <th scope="row">{{ __('general.third_penalty_days') }}</th>
            <td>{{ $records->third_penalty_days }}</td>
        </tr>

        <tr>
            <th scope="row">{{ __('general.third_penalty_type') }}</th>
            <td>{{ $records->third_penalty_type }}</td>
        </tr>

        <tr>
            <th scope="row">{{ __('general.third_penalty_charges') }}</th>
            <td>{{ $records->third_penalty_charges }}</td>
        </tr>

        </tbody>
    </table>
</div>

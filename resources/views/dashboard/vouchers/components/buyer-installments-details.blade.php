<div class="row">
    <div class="col">
        <table class="table bordered table-compact table-striped" id="installment-table">
            <thead>
                <tr>
                    <td class="fw-bold">{{ __('general.sr') }}</td>
                    <td class="fw-bold">{{ __('general.description') }}</td>
                    <td class="fw-bold">{{ __('general.last_date_of_payment') }}</td>
                    <td class="fw-bold">{{ __('general.amount') }}</td>
                    <td class="fw-bold">{{ __('general.status') }}</td>
                    <td class="fw-bold">{{ __('general.paid_on') }}</td>
                </tr>
            </thead>
            <tbody>
                @foreach($installmentRecords as $record)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $record->installment_no }}</td>
                        <td>{{ \App\Services\GeneralService::formatDate( $record->installment_date ) }}</td>
                        <td>{{ \App\Services\GeneralService::number_format( $record->installment_amount ) }}</td>
                        <td>{{ \Illuminate\Support\Str::ucfirst( $record->status ) }}</td>
                        <td>{{ is_null($record->paid_date) ? '' : \App\Services\GeneralService::formatDate( $record->paid_date ) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

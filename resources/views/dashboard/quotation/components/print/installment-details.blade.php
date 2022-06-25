<div class="row">
    <div class="col-12 mb-2">
        <div class="input-group">
            <div style="font-weight: bold;"><b>{{ __('general.installments_details') }}</b></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table bordered table-super-compact table-striped">
            <thead>
            <tr>
                <td style="font-size: 12px; font-weight: bold;">{{ __('general.sr') }}</td>
                <td style="font-size: 12px; font-weight: bold;">{{ __('general.description') }}</td>
                <td style="font-size: 12px; font-weight: bold;">{{ __('general.amount') }}</td>
            </tr>
            </thead>
            <tbody>
                @foreach($model->installments as $installment)
                    <tr>
                        <td style="font-size: 12px;">{{ $loop->iteration }}</td>
                        <td style="font-size: 12px;">{{ $installment->installment_no }}</td>
                        <td style="font-size: 12px;">{{ \App\Services\GeneralService::number_format( $installment->installment_amount ) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

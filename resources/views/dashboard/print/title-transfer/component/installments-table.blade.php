<div class="page-break"></div>
@if(session()->get('printHeader') !== null)
    @include(session()->get('printHeader') ,['title' => __('general.print_title_transfer_form') ])
    <br>
@endif
    <div class="section-5 mt-2">
        <div class="row">
            <div class="col-12 mb-2">
                <div class="input-group">
                    <h5 class="fw-bold text-purple">{{ __('general.installments') }}</h5>
                </div>
            </div>

            <div class="col-12 mb-0 py-2">
                <table class="table bordered table-compact table-striped" id="installment-table">
                    <thead>
                    <tr>
                        <td class="fw-bold">{{ __('general.sr') }}</td>
                        <td class="fw-bold">{{ __('general.description') }}</td>
                        <td class="fw-bold">{{ __('general.last_date_of_payment') }}</td>
                        <td class="fw-bold">{{ __('general.amount') }}</td>
                        <td class="fw-bold">{{ __('general.status') }}</td>
                        <td class="fw-bold">{{ __('general.payment_date') }}</td>
                    </tr>
                    </thead>
                    <tbody id="installment-body">
                    @foreach($records->installments as $installment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $installment->installment_no }}</td>
                            <td>{{ \App\Services\GeneralService::formatDate( $installment->installment_date ) }}</td>
                            <td>{{ \App\Services\GeneralService::number_format( $installment->installment_amount ) }}</td>
                            <td>{{ $installment->status }}</td>
                            <td>{{ is_null($installment->paid_date) ? '' : \App\Services\GeneralService::formatDate( $installment->paid_date ) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@if(session()->get('printFooter') !== null)
    <br>
    @include(session()->get('printFooter'))
@endif

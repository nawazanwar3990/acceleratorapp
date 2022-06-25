<div id="installment-table-row" class="row mt-2" style="display: none;">
    <h4 class="card-title text-center bg-dark text-white py-2">{{ __('general.installments') }}</h4>
    <div class="col">
        <table class="table bordered table-compact table-striped" id="installment-table">
            <thead>
                <tr>
                    <td class="fw-bold">{{ __('general.sr') }}</td>
                    <td class="fw-bold">{{ __('general.description') }}</td>
                    <td class="fw-bold">{{ __('general.last_date_of_payment') }}</td>
                    <td class="fw-bold">{{ __('general.amount') }}</td>
                </tr>
            </thead>
            <tbody id="installment-body">

            </tbody>
        </table>
    </div>
</div>

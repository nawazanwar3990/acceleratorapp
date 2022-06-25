<div class="section-2 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <div style="font-weight: bold;"><b>{{ __('general.payment_details') }}</b></div>
            </div>
        </div>

        <div class="col-12 shadow-none mb-0 py-2">

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.payment_method') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ \App\Services\GeneralService::getPaymentTypesForDropdown( $model->payment_method ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.payment_sub_method') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ \App\Services\GeneralService::getPaymentSubTypesForDropdown( $model->payment_sub_method ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.installment_plan') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->installmentPlan->name }}
                </div>

            </div>

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.total_number_installment') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->installmentPlan->total_installments }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.installment_duration') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->installmentPlan->installment_duration }} {{ __('general.month') }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.per_installment_amount') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ \App\Services\GeneralService::number_format( $model->installment_amount ) }}
                </div>

            </div>
            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.total_amount') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ \App\Services\GeneralService::number_format( $model->total_amount ) }}
                </div>
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.down_payment') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    @if ($model->payment_type == '1')
                        {{ \App\Services\GeneralService::number_format( $model->payment_amount ) }}
                    @else
                        {{ '(' . $model->payment_value . '%)' }} {{ \App\Services\GeneralService::number_format( $model->payment_amount ) }}
                    @endif
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">&nbsp;</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    &nbsp;
                </div>

            </div>

        </div>

    </div>
</div>
<hr class="mt-1">

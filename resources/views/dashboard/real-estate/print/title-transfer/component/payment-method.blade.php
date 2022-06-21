<div class="section-2 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <div style="font-weight: bold;"><b>{{ __('general.payment_details') }}</b></div>
            </div>
        </div>

        <div class="col-12 shadow-none mb-0 py-2" style="border: 1px solid rgba(94,91,91,0.5)">

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.payment_method') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ \App\Services\GeneralService::getPaymentTypesForDropdown( $records->payment_method ) }}
                </div>

                <div class="col-3 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.payment_sub_method') }}:</label>
                </div>
                <div class="col-1 border-bottom" style="font-size: 10px">
                    {{ \App\Services\GeneralService::getPaymentSubTypesForDropdown( $records->payment_sub_method ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.total_amount') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold" style="font-size: 10px">
                    {{ \App\Services\GeneralService::number_format( $records->total_amount ) }}
                </div>

            </div>
            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.discount') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    @if ($records->discount == '1')
                        {{ \App\Services\GeneralService::number_format( $records->discount_amount ) }}
                    @elseif (!is_null($records->discount))
                        {{ '( ' . $records->discount_value . '% )' }} {{ \App\Services\GeneralService::number_format( $records->discount_amount ) }}
                    @endif
                </div>
                <div class="col-3 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.after_discount_amount') }}:</label>
                </div>
                <div class="col-1 border-bottom fw-bold" style="font-size: 10px">
                    {{ \App\Services\GeneralService::number_format( $records->after_discount_amount ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.down_payment') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold" style="font-size: 10px">
                    {{ \App\Services\GeneralService::number_format( $records->down_payment ) }}
                </div>

            </div>
            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.remaining_balance') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold" style="font-size: 10px">
                    {{ \App\Services\GeneralService::number_format( $records->balance ) }}
                </div>

                <div class="col-3 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.transfer_fee_details') }}:</label>
                </div>
                <div class="col-1 border-bottom fw-bold" style="font-size: 10px">
                    {{ \App\Services\GeneralService::number_format( $records->transfer_fee ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.total_broker_amount') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold" style="font-size: 10px">
                    {{ '(' . $records->total_broker_percentage . '%) ' }}{{ \App\Services\GeneralService::number_format( $records->total_broker_amount ) }}
                </div>

            </div>
            @if ($records->installments()->exists())
                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.total_number_installment') }}:</label>
                    </div>
                    <div class="col-2 border-bottom fw-bold" style="font-size: 10px">
                        {{ $records->installmentPlan->total_installments }}
                    </div>

                    <div class="col-3 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.installment_duration') }}:</label>
                    </div>
                    <div class="col-1 border-bottom fw-bold" style="font-size: 10px">
                        {{ $records->installmentPlan->installment_duration }} {{ __('general.month') }}
                    </div>

                    <div class="col-2 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.installment_amount') }}:</label>
                    </div>
                    <div class="col-2 border-bottom fw-bold" style="font-size: 10px">
                        {{ \App\Services\GeneralService::number_format( $records->installments[1]->installment_amount ) }}
                    </div>

                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.installment_plan') }}:</label>
                    </div>
                    <div class="col-6 border-bottom fw-bold" style="font-size: 10px">
                        {{ $records->installmentPlan->name }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@if ($records->company_broker == true)
    @if(session()->get('printFooter') !== null)
        <br>
        @include(session()->get('printFooter'))
    @endif
@endif

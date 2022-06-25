<div class="section-1 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <h5 class="fw-bold text-purple">{{ __('general.property_details') }}</h5>
            </div>
        </div>

        <div class="col-12 shadow-none mb-0 py-2">
            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.property_creation_date') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ \App\Services\GeneralService::formatDate( $salesRecord->flat->creation_date ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.building_name') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ $salesRecord->Building->name }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" >{{ __('general.floor_number') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ $salesRecord->floor->floor_number }}
                </div>
            </div>

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.floor_name') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ $salesRecord->floor->floor_name }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.flat_number') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold">
                    {{ $salesRecord->flat->flat_number }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.flat_name') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold">
                    {{ $salesRecord->flat->flat_name }}
                </div>
            </div>

            <div class="row">
                <div class="col-12 my-1">
                    <h5 class="fw-bold text-purple">{{ __('general.flat_parameter') }}</h5>
                </div>
                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.length') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ $salesRecord->flat->length }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.width') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ $salesRecord->flat->width }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.total_area') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ $salesRecord->flat->area }}
                </div>

            </div>

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.general_services') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    @foreach($salesRecord->flat->general_services as $key => $value)
                        {{ \App\Services\GeneralService::getServiceName( $value ) ?? null }},
                    @endforeach
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.security_services') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    @foreach($salesRecord->flat->security_services as $key => $value)
                        {{ \App\Services\GeneralService::getServiceName( $value ) ?? null }},
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
<div class="section-2 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <h5 class="fw-bold text-purple">{{ __('general.purchase_information') }}</h5>
            </div>
        </div>
        @foreach ($purchasers as $purchaser)
            <div class="col-12 shadow-none mb-0 py-2">

                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.hr_id') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ $purchaser->Hr->hr_no }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0">{{ __('general.hr_name') }}:</label>
                    </div>
                    <div class="col-3 border-bottom">
                        {{ $purchaser->Hr->full_name }}
                    </div>

                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.father_name') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ $purchaser->Hr->relation_full_name }}
                    </div>

                </div>

                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.cnic') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ $purchaser->Hr->cnic }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0">{{ __('general.contact') }}:</label>
                    </div>
                    <div class="col-3 border-bottom">
                        {{ $purchaser->Hr->cell_1 }}
                    </div>

                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.gender') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ \App\Services\PersonService::genderForDropdown( $purchaser->Hr->gender ) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.ownership_percentage') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ $purchaser->percentage }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0">{{ __('general.nationality') }}:</label>
                    </div>
                    <div class="col-3 border-bottom">
                        {{ $purchaser->Hr->nationality->name }}
                    </div>

                </div>

            </div>
        @endforeach
    </div>
</div>
<div class="section-3 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <h5 class="fw-bold text-purple">{{ __('general.seller_information') }}</h5>
            </div>
        </div>
        @foreach($owners as $owner)
            <div class="col-12 shadow-none mb-0 py-2">

                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.hr_id') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" >
                        {{ $owner->Hr->hr_no }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0">{{ __('general.hr_name') }}:</label>
                    </div>
                    <div class="col-3 border-bottom">
                        {{ $owner->Hr->full_name }}
                    </div>

                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.father_name') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ $owner->Hr->relation_full_name }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.cnic') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ $owner->Hr->cnic }}
                    </div>
                    <div class="col-1 text-right">
                        <label class="mb-0">{{ __('general.contact') }}:</label>
                    </div>
                    <div class="col-3 border-bottom">
                        {{ $owner->Hr->cell_1 }}
                    </div>

                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.gender') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ \App\Services\PersonService::genderForDropdown( $owner->Hr->gender ) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.ownership_percentage') }}:</label>
                    </div>
                    <div class="col-2 border-bottom">
                        {{ $owner->percentage }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0">{{ __('general.nationality') }}:</label>
                    </div>
                    <div class="col-3 border-bottom">
                        {{ $owner->Hr->nationality->name}}
                    </div>

                </div>
            </div>

        @endforeach
    </div>
</div>
<div class="section-4 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <h5 class="fw-bold text-purple">{{ __('general.payment_details') }}</h5>
            </div>
        </div>

        <div class="col-12 shadow-none mb-0 py-2">

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.payment_method') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ \App\Services\GeneralService::getPaymentTypesForDropdown( $salesRecord->payment_method ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.payment_sub_method') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    {{ \App\Services\GeneralService::getPaymentSubTypesForDropdown( $salesRecord->payment_sub_method ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.total_amount') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold">
                    {{ \App\Services\GeneralService::number_format( $salesRecord->total_amount ) }}
                </div>
            </div>
            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.discount') }}:</label>
                </div>
                <div class="col-2 border-bottom">
                    @if ($salesRecord->discount == '1')
                        {{ \App\Services\GeneralService::number_format( $salesRecord->discount_amount ) }}
                    @elseif (!is_null($salesRecord->discount))
                        {{ '( ' . $salesRecord->discount_value . '% )' }} {{ \App\Services\GeneralService::number_format( $salesRecord->discount_amount ) }}
                    @endif
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.after_discount_amount') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold">
                    {{ \App\Services\GeneralService::number_format( $salesRecord->after_discount_amount ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0">{{ __('general.down_payment') }}:</label>
                </div>
                <div class="col-2 border-bottom fw-bold">
                    {{ \App\Services\GeneralService::number_format( $salesRecord->down_payment ) }}
                </div>

            </div>

            @if ($salesRecord->installments()->exists())
                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.total_number_installment') }}:</label>
                    </div>
                    <div class="col-2 border-bottom fw-bold">
                        {{ $salesRecord->installmentPlan->total_installments }}
                    </div>

                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.installment_duration') }}:</label>
                    </div>
                    <div class="col-2 border-bottom fw-bold">
                        {{ $salesRecord->installmentPlan->installment_duration }} {{ __('general.month') }}
                    </div>

                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.installment_amount') }}:</label>
                    </div>
                    <div class="col-2 border-bottom fw-bold">
                        {{ \App\Services\GeneralService::number_format( $salesRecord->installments[1]->installment_amount ) }}
                    </div>

                </div>
                <div class="row">
                    <div class="col-2 text-right">
                        <label class="mb-0">{{ __('general.installment_plan') }}:</label>
                    </div>
                    <div class="col-6 border-bottom fw-bold">
                        {{ $salesRecord->installmentPlan->name }}
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>
@if ($salesRecord->installments()->exists())
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
                    @foreach($salesRecord->installments as $installment)
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
@endif
<div class="section-5 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <h5 class="fw-bold text-purple">{{ __('general.transactions') }}</h5>
            </div>
        </div>
        <div class="col-12 mb-0 py-2">
            <table class="table table-bordered table-compact table-striped" id="installment-table">
                <thead>
                    <tr>
                        <td class="fw-bold">{{ __('general.sr') }}</td>
                        <td class="fw-bold">{{ __('general.date') }}</td>
                        <td class="fw-bold">{{ __('general.description') }}</td>
                        <td class="fw-bold">{{ __('general.voucher_no') }}</td>
                        <td class="fw-bold">{{ __('general.amount') }}</td>
                    </tr>
                </thead>
                <tbody>
                @php $totalPayment = 0; @endphp
                @foreach(\App\Services\SalesService::salesTransactions($salesRecord->id) as $transaction)
                    @php
                        $totalPayment += $transaction->Credit;
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ \App\Services\GeneralService::formatDate( $transaction->vDate ) }}</td>
                        <td>{!! $transaction->Narration !!}</td>
                        <td>{{ $transaction->vNo }}</td>
                        <td>{{ \App\Services\GeneralService::number_format( $transaction->Credit) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td class="fw-bold text-right" colspan="4">{{ __('general.total_received') }}</td>
                    <td class="fw-bold">{{ \App\Services\GeneralService::number_format( $totalPayment ) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="section-1 px-2 pt-2">
    <div class="row col-12 align-self-center justify-content-center">
        <div class="col-2 text-right">
            <label class="mb-0" style="font-size: 10px;">{{ __('general.date') }}:</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ \App\Services\GeneralService::formatDate( $model->date ) }}
        </div>
        <div class="col-2 text-right">
            <label class="mb-0" style="font-size: 10px">{{ __('general.quotation_no') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ $model->quot_no }}
        </div>
        <div class="col-2 text-right">
            <label class="mb-0" style="font-size: 10px">{{ __('general.system_user_id') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ $model->created_by }} - {{ $model->createdBy->first_name }} {{ $model->createdBy->last_name }}
        </div>
    </div>
</div>
<div class="section-2 px-2 pt-2">
    <div class="row col-12 align-self-center justify-content-center">
        <div class="col-2 text-right">
            <label class="mb-0" style="font-size: 10px;">{{ __('general.customer_name') }}:</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ $model->customer_name }}
        </div>
        <div class="col-2 text-right">
            <label class="mb-0" style="font-size: 10px">{{ __('general.customer_contact') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ $model->customer_contact }}
        </div>
        <div class="col-2 text-right">
            <label class="mb-0" style="font-size: 10px">&nbsp;</label>
        </div>
        <div class="col-2 fs-13" style="font-size: 10px">
            &nbsp;
        </div>
    </div>
</div>
<hr class="mt-1">

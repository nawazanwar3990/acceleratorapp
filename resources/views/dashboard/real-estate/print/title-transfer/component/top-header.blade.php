<div class="section-1 px-2 pt-2">
    <div class="row col-12 align-self-center justify-content-center">
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px;">{{ __('general.date_of_transfer') }}:</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ \App\Services\GeneralService::formatDate( $records->date ) }}
        </div>
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">{{ __('general.transfer_no') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ $records->transfer_no }}
        </div>
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">{{ __('general.revision_no') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ $records->revision_no }}
        </div>

    </div>

    <div class="row col-12 align-self-center justify-content-center">
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">{{ __('general.transfer_type') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ \App\Services\GeneralService::getTransferTypesForDropdown($records->transfer_type) }}
        </div>

        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">{{ __('general.transfer_sub_type') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ \App\Services\GeneralService::getTransferSubTypesForDropdown($records->transfer_sub_type) }}
        </div>

        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">{{ __('general.system_user_id') }}</label>
        </div>
        <div class="col-2 border-bottom fs-13" style="font-size: 10px">
            {{ $records->created_by }} - {{ $records->createdBy->first_name }}&nbsp;{{ $records->createdBy->last_name }}
        </div>
    </div>
</div>


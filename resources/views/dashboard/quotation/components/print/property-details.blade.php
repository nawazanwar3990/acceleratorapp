<div class="section-2 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <div style="font-weight: bold;"><b>{{ __('general.property_details') }}</b></div>
            </div>
        </div>

        <div class="col-12 shadow-none mb-0 py-2">
            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.property_creation_date') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ \App\Services\GeneralService::formatDate( $model->flat->creation_date ) }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.building_name') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->Building->name }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.floor_number') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->floor->floor_number }}
                </div>
            </div>

            <div class="row">


                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.floor_name') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->floor->floor_name }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.flat_number') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->flat->flat_number }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.flat_name') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->flat->flat_name }}
                </div>
            </div>

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.length') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->flat->length }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.width') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->flat->width }}
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.total_area') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    {{ $model->flat->area }}
                </div>

            </div>

            <div class="row">
                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.general_services') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    @foreach($model->flat->general_services as $key => $value)
                        {{ \App\Services\GeneralService::getServiceName( $value ) ?? null }},
                    @endforeach
                </div>

                <div class="col-2 text-right">
                    <label class="mb-0" style="font-size: 10px">{{ __('general.security_services') }}:</label>
                </div>
                <div class="col-2 border-bottom" style="font-size: 10px">
                    @foreach($model->flat->security_services as $key => $value)
                        {{ \App\Services\GeneralService::getServiceName( $value ) ?? null }},
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>
<hr class="mt-1">

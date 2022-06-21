<div class="input-group  mt-1 px-2 py-2">
    <div class="row col-12">
        <div class="input-group border-bottom col-12 font-weight-bold">
            <div class="input-group">
                <div>
                    <h4><b>{{ __('general.flat_information') }}</b></h4>
                </div>
            </div>
        </div>
        <div class="input-group shadow-none mb-0">
            <div class="row mt-1">
                <div class="row ml-1 col-4">
                    <div class="col-4 fs-13 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.name') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->flat_name }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.flat_number') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->flat_number }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.creation_date') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ \Carbon\Carbon::parse($records->flat->creation_date)->format('d-M-Y') }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.facing') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->facing }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.view') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->view }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.accommodation') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->accommodation }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.furnished') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->furnished }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.furnished_details') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->furnished_details }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.length') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->length }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.width') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->width }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.area') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->area }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.height') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->height }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.rate_type') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->rate_type }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.rate_square_feet') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->rate_square_feet }}
                    </div>
                </div>
                <div class="row ml-1 col-4">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.total_amount') }}:</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $records->flat->total_amount }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

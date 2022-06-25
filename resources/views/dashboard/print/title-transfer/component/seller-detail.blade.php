<div class="section-2 mt-2">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="input-group">
                <div style="font-weight: bold;"><b>{{ __('general.seller_information') }}</b></div>
            </div>
        </div>
        @foreach($owners as $owner)
            <div class="col-10 shadow-none mb-0 py-2" style="border: 1px solid rgba(94,91,91,0.5); width: 88%;">

                <div class="row">
                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.hr_id') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ $owner->Hr->hr_no }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.hr_name') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ $owner->Hr->full_name }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.father_name') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ $owner->Hr->relation_full_name ?? '' }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.cnic') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ $owner->Hr->cnic }}
                    </div>

                </div>

                <div class="row">
                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.contact') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ $owner->Hr->cell_1 }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.gender') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ \App\Services\PersonService::genderForDropdown( $owner->Hr->gender ) }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.ownership_percentage') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ $owner->percentage }}
                    </div>

                    <div class="col-1 text-right">
                        <label class="mb-0" style="font-size: 10px">{{ __('general.nationality') }}:</label>
                    </div>
                    <div class="col-2 border-bottom" style="font-size: 10px">
                        {{ $owner->Hr->nationality->name ?? '' }}
                    </div>

                </div>
            </div>

            <div class="col-2 text-right" style="width: 12px">
                <img alt="hr-logo" height="80" width="75px"
                     src="{{ asset('theme/images/user-picture.png') }}">
            </div>
        @endforeach
    </div>
</div>

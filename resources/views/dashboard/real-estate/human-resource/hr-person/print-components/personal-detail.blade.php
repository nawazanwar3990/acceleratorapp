<div class="input-group  mt-1 px-2 py-2">
    <div class="row col-12">
        <div class="input-group border-bottom col-12 font-weight-bold">
            <div class="input-group">
                <div style="font-weight: bold;"><b>Personal Detail</b></div>
            </div>
        </div>
            <div class="input-group shadow-none mb-0">
                <div class="row mt-1">
                    <div class="row ml-1 col-4">
                        <div class="col-4 fs-13 text-right">
                            <label class="mb-0" style="font-size: 10px">Name:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{  $model->full_name }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">{{ $model->relation->name ?? null }}:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->relation_full_name }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Gender:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ \App\Services\RealEstate\HrService::genderForDropdown($model->gender) }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Birth Date:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ \Carbon\Carbon::parse($model->date_of_birth)->format('d-M-Y') }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">CNIC:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->cnic }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Cast:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->cast->name ?? null }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Nationality:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->nationality->name }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Passport:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->passport_number }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Stay In:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->countryStayIn->name ?? null }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Cell 1:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->cell_1 }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Cell 2:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->cell_2 }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Land Line:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->landline }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">WhatsApp:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->cell_whats_app }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Facebook:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->facebook }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">E-Mail:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->email }}
                        </div>
                    </div>
                    <div class="row ml-1 col-4">
                            <div class="col-4 text-right">
                                <label class="mb-0" style="font-size: 10px">RFID:</label>
                            </div>
                            <div class="col-8 border-bottom fs-13" style="font-size: 10px">
                                {{ $model->rfid}}
                            </div>
                    </div>
                    @if($model->date_of_death)
                        <div class="row ml-1 col-4">
                            <div class="col-4 text-right">
                                <label class="mb-0" style="font-size: 10px">Death Date:</label>
                            </div>
                            <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                                {{ \Carbon\Carbon::parse($model->date_of_death)->format('d-M-Y') }}
                            </div>
                        </div>
                    @endif
                    <div class="row ml-1 col-4">
                        <div class="col-4 text-right">
                            <label class="mb-0" style="font-size: 10px">Remarks:</label>
                        </div>
                        <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                            {{ $model->remarks }}
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

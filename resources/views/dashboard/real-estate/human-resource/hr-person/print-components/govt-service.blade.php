<div class="input-group  px-2 py-2 ">
    <div class="input-group border-bottom font-weight-bold">
        <div style="font-weight: bold;"><b>Govt. Services</b></div>
    </div>
    <div class="input-group media_holder print_holder">
        <div class="row mt-1">
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Federal/Prvn:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->federalProvincial->name)
                        {{ $model->federalProvincial->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Ministry:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->ministry->name)
                        {{ $model->ministry->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Organization:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->govtOrganization->name)
                        {{ $model->govtOrganization->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Department:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->govtDepartment->name)
                        {{ $model->govtDepartment->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Grade:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $model->govt_grade_id }}
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Last Served:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    {{ $model->govt_current_last_served }}
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Profession:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->govtProfession->name)
                        {{ $model->govtProfession->name  }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Status:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->govt_serving_retired)
                    {{ App\Services\RealEstate\HrService::serviceOrRetiredForDropdown($model->govt_serving_retired) }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Joined on:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    {{  \Carbon\Carbon::parse($model->govt_date_of_joining)->format('d-M-Y') }}
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Retired on:</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    {{ \Carbon\Carbon::parse($model->govt_date_of_retirement)->format('d-M-Y') }}
                </div>
            </div>
        </div>
    </div>
</div>

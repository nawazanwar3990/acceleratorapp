<div class="input-group  px-2 py-2 ">
    <div class="input-group border-bottom font-weight-bold">
        <div style="font-weight: bold;"><b>Private Job</b></div>
    </div>
    <div class="input-group media_holder print_holder">
        <div class="row mt-1">
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Organization:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    @isset($model->privateOrganization->name)
                    {{ $model->privateOrganization->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Department:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    @isset($model->privateDepartment->name)
                    {{ $model->privateDepartment->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Last Served:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    {{ $model->private_current_last_served }}
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Grade:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    {{  $model->private_grade_id }}
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Profession:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    @isset($model->privateProfession->name)
                    {{ $model->privateProfession->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Status:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    @isset($model->private_serving_retired)
                    {{ \App\Services\PersonService::serviceOrRetiredForDropdown($model->private_serving_retired) }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Joined on:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    {{ \Carbon\Carbon::parse($model->private_date_of_joining)->format('d-M-Y') }}
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Retired on:</label>
                </div>
                <div class="col-7 text-left border-bottom fs-13" style="font-size: 10px">
                    {{ \Carbon\Carbon::parse($model->private_date_of_retirement)->format('d-M-Y') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="input-group px-2">
    <div class="row col-12">
        <div class="input-group border-bottom col-12 font-weight-bold">
            <div class="input-group">
                <div style="font-weight: bold;"><b>Employment</b></div>
            </div>
        </div>
            <div class="input-group shadow-none mb-0">
                <div class="row input-group">
                    <div class="row col-4">
                        <div class="col-5 fs-13 text-right">
                            <label class="mb-0" style="font-size: 10px">Type :</label>
                        </div>
                        <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                            @isset($model->employeeType->name)
                            {{ $model->employeeType->name }}
                            @endisset
                        </div>
                    </div>
                    <div class="row col-4">
                        <div class="col-5 text-right">
                            <label class="mb-0" style="font-size: 10px">Sub Type :</label>
                        </div>
                        <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                            @isset($model->employeeSubType->name)
                            {{ $model->employeeSubType->name }}
                            @endisset
                        </div>
                    </div>
                    <div class="row col-2"></div>
                    <div class="row col-2"></div>
                </div>
            </div>

    </div>
</div>


<div class="input-group px-2">
    <div class="input-group border-bottom font-weight-bold">
        <div style="font-weight: bold;"><b>Tax Info</b></div>
    </div>
    <div class="input-group media_holder print_holder">
        <div class="row input-group">
            <div class="row col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Tax Type :</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->taxType->name)
                    {{ $model->taxType->name }}
                    @endisset
                </div>
            </div>
            <div class="row col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Tax Status :</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    @isset($model->taxStatus->name)
                    {{ $model->taxStatus->name }}
                    @endisset
                </div>
            </div>
            <div class="row col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Tax No :</label>
                </div>
                <div class="col-7 border-bottom text-left fs-13" style="font-size: 10px">
                    {{ $model->tax_no }}
                </div>
            </div>
        </div>
    </div>
</div>

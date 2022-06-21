<div class="input-group  px-2 py-2 ">
    <div class="input-group border-bottom font-weight-bold">
        <span><b>Own Business</b></span>
    </div>
    <div class="input-group media_holder print_holder">
        <div class="row mt-1">
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Own Business:</label>
                </div>
                <div class="col-7 border-bottom fs-13" style="font-size: 10px">
                    {{ $model->own_business }}
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Owner/Partner:</label>
                </div>
                <div class="col-7 border-bottom fs-13" style="font-size: 10px">
                    @isset($model->owner_partner)
                    {{ \App\Services\RealEstate\HrService::ownerOrPartnerForDropdown($model->owner_partner) }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Type:</label>
                </div>
                <div class="col-7 border-bottom fs-13" style="font-size: 10px">
                    @isset($model->ownBusiness->name)
                    {{ $model->ownBusiness->name }}
                    @endisset
                </div>
            </div>
            <div class="row  col-4">
                <div class="col-5 text-right">
                    <label class="mb-0" style="font-size: 10px">Sub Type:</label>
                </div>
                <div class="col-7 border-bottom fs-13" style="font-size: 10px">
                    @isset($model->ownSubBusiness->name)
                    {{ $model->ownSubBusiness->name }}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>

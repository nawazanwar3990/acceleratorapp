<div class="input-group  mt-1 px-2 py-2">
    <div class="row col-12">
        <div class="input-group border-bottom col-12 font-weight-bold">
            <div class="input-group">
                <div style="font-weight: bold;"><b>Secondary Person</b></div>
            </div>
        </div>
        <div class="input-group shadow-none mb-0">
            <div class="row input-group mt-1">
                <div class="row ml-1 col-4">
                    <div class="col-4 fs-13 text-right">
                        <label class="mb-0" style="font-size: 10px">Name :</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $model->sec_contact_full_name }}
                    </div>
                </div>
                <div class="row ml-1 col-4 ">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">Contact :</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        {{ $model->sec_contact }}
                    </div>
                </div>
                <div class="row ml-1 col-4 ">
                    <div class="col-4 text-right">
                        <label class="mb-0" style="font-size: 10px">Relation :</label>
                    </div>
                    <div class="col-8 border-bottom text-left fs-13" style="font-size: 10px">
                        @isset($model->secondaryContactRelation->name)
                        {{ $model->secondaryContactRelation->name }}
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


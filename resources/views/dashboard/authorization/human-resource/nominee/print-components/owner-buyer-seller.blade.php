<div class="card shadow-none mb-0 border-bottom-0" style="border-top: transparent !important;">
    <div class="card-header py-1">
        <div class="input-group font-weight-bold">
            <div class="input-group">
                <h5><b>Owner/Buyer/Seller Detail</b></h5>
            </div>
        </div>
    </div>
    <div class="card-body py-2 ">
            <div class="row py-2">
                <div class="col-1 text-center align-self-center">
                    <img src="{{ isset($model->hr->mediaFirstImage->filename)?asset($model->hr->mediaFirstImage->filename):asset('theme/images/user-picture.png') }}"
                         style="width: 80px;height: 80px;"
                         onerror="this.src='{{ asset('theme/images/user-picture.png') }}'">
                </div>
                <div class="col-11 align-self-center">
                    <div class="row">
                        <div class="row col-12 mb-2">
                        <div class="col-2 text-right">
                            <label class="mb-0" style="font-size: 12px;">HR ID:</label>
                        </div>
                        <div class="col-1 border-bottom fs-13" style="font-size: 12px;">
                            {{ $model->owner_hr_id }}
                        </div>
                        <div class="col-1 text-right">
                            <label class="mb-0" style="font-size: 12px;">Name:</label>
                        </div>
                        <div class="col-4 border-bottom fs-13" style="font-size: 12px;">
                            {{$model->hr->full_name}}
                        </div>
                        <div class="col-1 text-right">
                            <label class="mb-0" style="font-size: 12px;">CNIC:</label>
                        </div>
                        <div class="col-3 border-bottom fs-13" style="font-size: 12px;">
                            @isset($model->hr)
                                {{ $model->hr->cnic }}
                            @else
                                --
                            @endisset
                        </div>
                        </div>
                        <div class="row col-12 mb-2">
                        <div class="col-2 text-right">
                            <label class="mb-0" style="font-size: 12px;">Cell #:</label>
                        </div>
                        <div class="col-2 border-bottom fs-13" style="font-size: 12px;">
                            @isset($model->hr)
                                {{ $model->hr->cell_1 }}
                            @else
                                --
                            @endisset
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


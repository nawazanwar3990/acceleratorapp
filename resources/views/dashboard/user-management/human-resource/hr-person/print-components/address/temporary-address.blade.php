@if ($model->present_linear_address)
<div class="input-group px-2">
    <div class="row col-12">
        <div class="input-group border-bottom col-12 font-weight-bold">
            <div class="input-group">
                <span><b>Present Address</b></span>
            </div>
        </div>
        <div class="row input-group mt-1" style="font-size: 11px">
            <div class="col-1 text-right">
            </div>
            <div class="col-11 border-bottom" style="font-size: 10px">
                {{ $model->present_linear_address }}
            </div>
        </div>
    </div>
</div>
@endif
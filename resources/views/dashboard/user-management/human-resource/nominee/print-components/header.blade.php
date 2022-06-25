<div class="row" style="margin-right: 1px;">
    <div class="col-2 align-self-center">
        <h5><b>Nominee Registration Form</b></h5>
    </div>
    <div class="col-8 align-self-center pr-0">
        <div class="row">
            <div class="col-3 mb-31 text-right">
                <label class="b-0">SR:</label>
            </div>
            <div class="col-3 border-bottom fs-13">
                {{ $model->id }}
            </div>
            <div class="col-3 mb-31 text-right">
                <label class="b-0">Reg Date:</label>
            </div>
            <div class="col-3 border-bottom fs-13">
                {{ \Carbon\Carbon::parse($model->created_at)->format('d-M-Y') }}
            </div>
        </div>
    </div>
</div>


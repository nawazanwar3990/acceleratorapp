<div class="row" style="margin-right: 1px;">
    <div class="col-2 align-self-center">
        <h5>Power Of Attorney Form</h5>
    </div>
    <div class="col-7 align-self-center pr-0">
        <div class="row">
            <div class="col-3 mb-31 text-right">
                <label class="b-0">POA ID:</label>
            </div>
            <div class="col-3 border-bottom fs-13">
                {{ $model->id }}
            </div>
            <div class="col-3 mb-31 text-right">
                <label class="b-0">Member Type:</label>
            </div>
            <div class="col-3 border-bottom fs-13">
                {{ $model->member_type }}
            </div>
            <div class="col-3 mb-31 text-right">
                <label class="b-0">Reg Date:</label>
            </div>
            <div class="col-3 border-bottom fs-13">
                {{ $model->reg_date }}
            </div>
        </div>
    </div>
    <div class="col-3 text-right bg-white align-self-center">
        <img class="mr-4" width="50" height="50" src="{{ asset('default_logo.jpeg') }}">
    </div>
</div>


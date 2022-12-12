<div class="row g-3 my-3">
    <div class="col-12">
        <h6 class="fw-bold">Shareholder
            type {{ isset($model->equity_splits) && $model->equity_splits['name'][$split_key]?$split_key+1:'1' }}</h6>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="form-label" for="name">Name</label>
            <input type="text" class="form-control"
                   name="equity_splits[name][]"
                   id="name"
                   value="{{ isset($model->equity_splits) && $model->equity_splits['name'][$split_key]?$model->equity_splits['name'][$split_key]:'' }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="form-label" for="ownership">% of ownership</label>
            <input type="text"
                   class="form-control"
                   name="equity_splits[ownership][]"
                   value="{{ isset($model->equity_splits) && $model->equity_splits['ownership'][$split_key]?$model->equity_splits['ownership'][$split_key]:'' }}"
                   id="ownership">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="form-label">Role</label>
            {!! Form::select('equity_splits[role][]',
                    [
                        'founder'=>'Founder',
                        'investor'=>'Investor',
                        'employee'=>'Employee'
                    ],isset($model->equity_splits) && $model->equity_splits['role'][$split_key]?$model->equity_splits['role'][$split_key]:null,['id'=>'role','class'=>'form-control form-select','required','placeholder'=>'Select']
                    )
             !!}
        </div>
    </div>
</div>

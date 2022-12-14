<div class="row">
    <div class="col-md-12 form-group">
        <label class="form-label">Do you have a legal formation?</label>
        {!! Form::text('do_you_have_legal_formation',str_replace('_',' ',$model->do_you_have_legal_formation),['id'=>'do_you_have_legal_formation','class'=>'form-control']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="kind_of_incorporation">What kind of incorporation is it?</label>
        {!! Form::text('kind_of_incorporation',str_replace('_',' ',$model->kind_of_incorporation),['id'=>'kind_of_incorporation','class'=>'form-control']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="jurisdiction">Where is the jurisdiction?</label>
        {!! Form::text('jurisdiction',str_replace('_',' ',$model->jurisdiction),['id'=>'jurisdiction','class'=>'form-control']) !!}
    </div>
    @if(isset($model) && is_array($model->equity_splits) && count($model->equity_splits)>0)
        <div class="col-md-12">
            <h5 class="fw-bold">Describe the current equity split between the founders, shareholders, and
                employees?</h5>
            <div class="card border rounded-3 bg-secondary position-relative my-3">
                <div class="card-body px-5">
                    @foreach($model->equity_splits['name'] as $split_key=>$split_value)
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
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="col-md-12 form-group">
        <label class="form-label">Are there any pending legal disputes with the company or with any founder
            involved?</label>
        {!! Form::text('founder_involved',str_replace('_',' ',$model->founder_involved),['id'=>'founder_involved','class'=>'form-control','disabled']) !!}
    </div>
</div>

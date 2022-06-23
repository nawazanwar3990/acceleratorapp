<div class="card shadow-none mb-0 border-bottom-0">
    <div class="card-header py-1">
        <div class="row col-12">
            <div class="col-4 border-0 align-self-end">
                <h6 class="mb-0">Attested</h6>
            </div>
            <div class="col-4  align-self-end text-center">
                {!! Form::label('employee_hr_id','Status :',['class'=>'mb-0',"style"=>"padding: 4.4px;"]) !!}
                {{ $model->is_attested }}
            </div>
            <div class="col-4 border-0 text-right align-self-end">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Attested By :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ \App\Services\PersonService::getPersonFullName($model->attested_by) }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">
                    Attestation Date :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->attested_date }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">Diary Number :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                    {{ ($model->attested_dairy_number) }}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Remarks :</label>
            </div>
            <div class="col-10 border-bottom fs-13">
                {{ $model->attested_narration_remark }}
            </div>
        </div>
    </div>
</div>


<div class="card shadow-none mb-0 border-bottom-0">
    <div class="card-header py-1">
        <div class="row col-12">
            <div class="col-4 border-0 align-self-end">
                <h6 class="mb-0">Registered at Sub Registrar Ofc</h6>
            </div>
            <div class="col-4  align-self-end text-center">
                {!! Form::label('employee_hr_id','Status :',['class'=>'mb-0',"style"=>"padding: 4.4px;"]) !!}
                {{ $model->is_reg_at_sub_reg_office }}
            </div>
            <div class="col-4 border-0 text-right align-self-end">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Registration Date :</label>
            </div>
            <div class="col-4 border-bottom fs-13">
                {{ $model->rso_reg_date }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">
                    Registration No :
                </label>
            </div>
            <div class="col-4 border-bottom fs-13">
                {{ $model->rso_reg_number }}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Remarks :</label>
            </div>
            <div class="col-10 border-bottom fs-13">
                {{ $model->rso_narration_remark }}
            </div>
        </div>
    </div>
</div>


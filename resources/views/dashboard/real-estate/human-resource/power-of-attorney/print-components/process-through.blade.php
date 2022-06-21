<div class="card shadow-none mb-0 border-bottom-0">
    <div class="card-header py-1">
        <div class="row col-12">
            <div class="col-4 border-0 align-self-end">
                <h6 class="mb-0">Processed Through Embassy</h6>
            </div>
            <div class="col-4  align-self-end text-center">
                {!! Form::label('employee_hr_id','Status :',['class'=>'mb-0',"style"=>"padding: 4.4px;"]) !!}
                {{ $model->is_process_through_embassy }}
            </div>
            <div class="col-4 border-0 text-right align-self-end">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Situated In :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->pte_situated_in }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">
                    By Person :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ \App\Services\PersonService::getPersonFullName($model->pte_by_person) }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">Dairy No :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->pte_dairy_number }}
            </div>
            <div class="col-2 text-right">
                <label class="mb-0">
                    Reg Date :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->pte_reg_date }}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Witness 1 </label>
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">Name :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->pte_witness_1_name }}
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">
                    CNIC :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->pte_witness_1_cnic }}
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">Contact :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                    {{ $model->pte_witness_1_contact }}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2 text-right">
                <label class="mb-0">Witness 2 </label>
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">Name :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->pte_witness_2_name }}
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">
                    CNIC :
                </label>
            </div>
            <div class="col-2 border-bottom fs-13">
                {{ $model->pte_witness_2_cnic }}
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">Contact :</label>
            </div>
            <div class="col-2 border-bottom fs-13">
                    {{ $model->pte_witness_2_contact }}
            </div>
        </div>
    </div>
</div>


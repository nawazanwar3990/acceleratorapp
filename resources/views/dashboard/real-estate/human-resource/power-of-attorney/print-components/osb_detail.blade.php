<div class="card shadow-none mb-0 border-bottom-0">
    <div class="card-header py-1">
        <div class="row col-12">
            <div class="col-4 border-0 align-self-end">
                <h6 class="mb-0">Member(Seller) Detail</h6>
            </div>
            <div class="col-4  align-self-end text-center">
                {!! Form::label('employee_hr_id','HR-ID :',['class'=>'mb-0',"style"=>"padding: 4.4px;"]) !!}
                {{ $model->member_hr_id }}
            </div>
            <div class="col-4 border-0 text-right align-self-end">
                <img
                    src="{{ isset($model->member_hr_id)?asset(\App\Models\Person::getCardImage($model->member_hr_id)):asset('img/defaults/user-picture.png') }}"
                    id="employee_avatar"
                    style="width: 70px;height: 100px;"
                    onerror="this.src='{{ asset('img/defaults/user-picture.png') }}'">
            </div>
        </div>
    </div>
    <div class="card-body py-1">
        <div class="row mb-2">
            <div class="col-1 text-right">
                <label class="mb-0">Name :</label>
            </div>
            <div class="col-4 border-bottom fs-13">
                {{ \App\Services\PersonService::getPersonFullName($model->member_hr_id) }}
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">
                    {{ \App\Services\PersonService::getPeronRelation($model->member_hr_id) }} :
                </label>
            </div>
            <div class="col-3 border-bottom fs-13">
                {{ \App\Services\PersonService::getPeronRelationName($model->member_hr_id) }}
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">Gender :</label>
            </div>
            <div class="col-1 border-bottom fs-13">
                @isset($model->member)
                    {{ \App\Services\PersonService::getGenderName($model->member) }}
                @else
                    --
                @endisset
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-1 text-right">
                <label class="mb-0">CNIC # :</label>
            </div>
            <div class="col-4 border-bottom fs-13">
                @isset($model->member)
                    {{ $model->member->person_cnic }}
                @else
                    --
                @endisset
            </div>
            <div class="col-1 text-right">
                <label class="mb-0">Cell No :</label>
            </div>
            <div class="col-5 border-bottom fs-13">
                @isset($model->member)
                    {{ $model->member->contact_cell_1 }}
                @else
                    --
                @endisset
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-1 text-right">
                <label class="mb-0">Address :</label>
            </div>
            <div class="col-11 border-bottom fs-13">
                @if(isset($model->member))
                    {{ \App\Services\PersonService::generateLinearAddress($model->member,'per') }}
                @else
                    --
                @endif
            </div>
        </div>
    </div>
</div>


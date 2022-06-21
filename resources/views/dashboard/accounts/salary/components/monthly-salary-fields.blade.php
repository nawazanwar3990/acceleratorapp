{!! Form::open(['url' => route('dashboard.salary.store'), 'method' => 'POST','files' => true,'id' =>'auto_salary_form']) !!}
    <x-created-by-field />
    <x-hidden-building-id />
    {!! Form::hidden('autoSalary', true) !!}

    <div class="row mb-2 mt-2">
        <div class="col-md-3">
            {!! Html::decode(Form::label('salary_month' ,__('general.salary_month').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
            <div class="input-group">
                {!! Form::text('salary_month',\Carbon\Carbon::today()->format('F-Y'), ['id'=>'all_salary_month','class'=>'form-control', 'autocomplete'=>'off', 'required', 'readonly']) !!}
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            </div>
        </div>
        <div class="col-md-3">
            {!! Html::decode(Form::label('department_id' ,__('general.department') ,['class'=>'form-label'])) !!}
            {!! Form::select('department_id',\App\Services\RealEstate\HrService::departmentForDropdown(), null,
                ['id'=>'department_id','class'=>'form-control select2','placeholder'=>trans('general.ph_department'), 'style' => 'width:100%;']) !!}
        </div>
    </div>
    <div class="row mb-2 mt-2" id="generated_salaries" style="display: none;">
        <div class="col-md-6">
            <h5>{{ __('general.already_generated') }} <span class="gen_month"></span></h5>
            <table class="table table-bordered table-striped">
                <thead class="thead-light">
                <tr>
                    <th class="bg-purple">{{ __('general.employee') }}</th>
                    <th class="bg-purple">{{ __('general.generated_at') }}</th>
                </tr>
                </thead>
                <tbody id="body_already">

                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h5>{{ __('general.currently_generated') }} <span class="gen_month"></span></h5>
            <table class="table table-bordered table-striped">
                <thead class="thead-light">
                <tr>
                    <th class="bg-purple">{{ __('general.employee') }}</th>
                    <th class="bg-purple">{{ __('general.generated_at') }}</th>
                </tr>
                </thead>
                <tbody id="body_current">

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            {!! Form::submit(__('general.generate_salary'), ['class' => 'btn btn-success w-md']) !!}
            <a href="{{ route('dashboard.salary.index', ['salary_month' => \Carbon\Carbon::today()->format('F-Y')]) }}" class="btn btn-primary w-md" style="display: none;">{{ __('general.view_pay_slips') }}</a>
            <a id="view_pay_slips" href="{{ route('dashboard.salary.index', ['salary_month' => \Carbon\Carbon::today()->format('F-Y')]) }}" class="btn btn-primary w-md" style="display: none;">{{ __('general.view_pay_slips') }}</a>
        </div>
    </div>
{!! Form::close() !!}

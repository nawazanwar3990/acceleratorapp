{!! Form::open(['route' => 'dashboard.salary.pay-now', 'files' => true, 'id' => 'salary_payment_form'] ) !!}
{!! Form::hidden('salary_id',null, ['id' => 'salary_id']) !!}

<div id="received_by_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">{{ __('general.salary_payment') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('received_by' ,'Received By <i class="text-danger">*</i>' ,['class'=>' col-form-label']))   !!}
                            {!!  Form::select('received_by',\App\Services\EmployeeService::getEmployeesForDropdown('all'), null,['id'=>'received_by',
                                'class'=>'employee-select form-control', 'style' => 'width:100%', 'required', 'placeholder'=>__('general.ph_employee')])
                            !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::submit(__('general.pay_now'), ['id' => 'btn_save', 'class' => 'btn btn-primary w-md']) !!}
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

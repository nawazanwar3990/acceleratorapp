<div id="add-hr-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url' => route('dashboard.add.hr-ajax'), 'method' => 'POST','files' => true,'id' =>'add-hr-form']) !!}
            <x-created-by-field></x-created-by-field>

            {!!  Form::hidden('hr_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('HR')) !!}
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">{{ __('general.add_hr') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('first_name' ,__('general.first_name') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::text('first_name', null,['id'=>'modal_first_name', 'class'=>'form-control', 'required'])  !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('last_name' ,__('general.last_name') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::text('last_name', null,['id'=>'modal_last_name', 'class'=>'form-control', 'required'])  !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('cnic' ,__('general.cnic') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::text('cnic', null,['id'=>'modal_cnic', 'class'=>'form-control cnic-mask', 'required'])  !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('cell_1' ,__('general.cell_1') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            {!!  Form::text('cell_1', null,['id'=>'modal_cell_1', 'class'=>'form-control mobile-mask', 'required'])  !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {!!  Html::decode(Form::label('date_of_birth' ,__('general.date_of_birth') .'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                            <div class="input-group">
                                {!!  Form::text('date_of_birth', null,['id'=>'modal_date_of_birth', 'class'=>'form-control datepicker', 'required', 'autocomplete'=>'off'])  !!}
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.save') }}</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


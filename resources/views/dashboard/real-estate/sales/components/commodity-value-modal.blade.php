{!! Form::open(['route' => 'dashboard.sales.update-commodity-deal-closings', 'files' => true, 'id' => 'value_form'] ) !!}
{!! Form::hidden('sales_id',null, ['id' => 'sales_id']) !!}

<div id="value_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">{{ __('general.salary_payment') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!  Html::decode(Form::label('commodity_value' ,__('general.commodity_value') .'<i class="text-danger">*</i>' ,['class'=>' col-form-label']))   !!}
                            {!!  Form::number('commodity_value', null,['step'=>'any','min'=>'1','id'=>'commodity_value', 'class'=>'form-control', 'required'])
                            !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::submit(__('general.update'), ['id' => 'btn_save', 'class' => 'btn btn-primary w-md']) !!}
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

<div class="mb-3 row">
    <div class="col-md-12">
        <div class="mb-3">
            <textarea id="mymce" name="installment_text">{{ $model->installment_text ?? '' }}</textarea>
            <input type="hidden" name="building_id" value="{{ \App\Services\RealEstate\BuildingService::getBuildingId() }}">
        </div>
    </div>
</div>

{{--<div class="mb-3 row">--}}
{{--    <div class="col-md-3">--}}
{{--        {!!  Html::decode(Form::label('status' ,__('general.active').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}--}}
{{--    </div>--}}
{{--    <div class="col-md-5">--}}
{{--        <div class="form-check form-switch">--}}
{{--            {!! Form::checkbox('status', true, isset($for) ? $model->status : true,['class'=>'form-check-input']) !!}--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

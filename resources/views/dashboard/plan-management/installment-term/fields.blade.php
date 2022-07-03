<div class="form-group row">
    <div class="col-md-12">
        <div class="form-group">
            <textarea id="mymce" name="installment_text">{{ $model->installment_text ?? '' }}</textarea>
            <input type="hidden" name="building_id" value="{{ \App\Services\RealEstate\BuildingService::getBuildingId() }}">
        </div>
    </div>
</div>



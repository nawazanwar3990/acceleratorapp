<div class="card">
    <div class="card-header">
        <h5 class="card-title m-0">Search</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 mb-1">
                {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'col-form-label']))   !!}
                {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','required']) !!}
            </div>
            <div class="col-12 mb-1">
                {!!  Html::decode(Form::label('number' ,__('general.number') ,['class'=>'col-form-label']))   !!}
                {!!  Form::number('number',null,['id'=>'number','class'=>'form-control']) !!}
            </div>
            <div class="col-12 mb-1">
                {!!  Html::decode(Form::label('type_id' ,__('general.office_type'),['class'=>'col-form-label']))   !!}
                {!!  Form::select('type_id', \App\Services\OfficeService::office_types_dropdown(),null,['id'=>'type_id',
                    'class'=>'select2 form-control form-select', 'placeholder'=>__('general.select'),'style'=>'width:100%', 'required'])
                !!}
            </div>
            <div class="col-12 mb-1">
                {!!  Html::decode(Form::label('view' ,__('general.view_location'),['class'=>'col-form-label']))   !!}
                {!!  Form::select('view', \App\Services\OfficeService::office_views_dropdown(),null,['id'=>'view',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_view_location'),'style'=>'width:100%'])
                !!}
            </div>
            <div class="col-12 mb-1">
                {!!  Html::decode(Form::label('sitting_capacity' ,__('general.sitting_capacity'),['class'=>'col-form-label']))   !!}
                {!!  Form::select('sitting_capacity', \App\Services\OfficeService::sitting_capacity_dropdown(),null,['id'=>'accommodation',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_sitting_capacity'),'style'=>'width:100%'])
                !!}
            </div>
            <div class="col-12 mb-1">
                {!!  Html::decode(Form::label('area' ,__('general.area'),['class'=>'form-label']))   !!}
                {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>'0','readonly', 'required']) !!}
            </div>
        </div>
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-dark"><i class="bx bx-search m-r-5"></i>Search</button>
    </div>
</div>

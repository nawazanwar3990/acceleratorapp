<div class="card">
    <div class="card-header bg-transparent">
        <h5 class="card-title m-0">Search</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('length' ,__('general.length_ft') ,['class'=>'form-label']))   !!}
                {!!  Form::number('length',null,['id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
                @error('length')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('width' ,__('general.width_ft') ,['class'=>'form-label']))   !!}
                {!!  Form::number('width',null,['id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
                @error('width')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('latitude' ,__('general.latitude'),['class'=>'form-label']))   !!}
                {!!  Form::text('latitude',null,['id'=>'latitude',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.latitude'),'style'=>'width:100%'])
                !!}
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('longitude' ,__('general.longitude'),['class'=>'form-label']))   !!}
                {!!  Form::text('longitude',null,['id'=>'longitude',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.longitude'),'style'=>'width:100%'])
                !!}
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-footer text-center bg-transparent">
        <button type="submit" class="btn btn-dark"><i class="bx bx-search m-r-5"></i>Search</button>
    </div>
</div>

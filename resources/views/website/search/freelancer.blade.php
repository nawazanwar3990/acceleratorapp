<div class="card">
    <div class="card-header bg-transparent">
        <h5 class="card-title m-0">Search</h5>
    </div>
    <div class="card-body">
        <div class="col-12 mb-3">
            {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'col-form-label']))   !!}
            {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ']) !!}
        </div>
        <div class="col-12 mb-3">
            {!!  Html::decode(Form::label('email' ,__('general.email'),['class'=>'col-form-label']))   !!}
            {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ']) !!}
        </div>
        <div class="col-12 mb-3">
            {!!  Html::decode(Form::label('cnic' ,__('general.cnic'),['class'=>'col-form-label']))   !!}
            {!!  Form::text('cnic',null,['id'=>'cnic','class'=>'form-control ']) !!}
        </div>
        <div class="col-12 mb-3">
            {!!  Html::decode(Form::label('contact' ,__('general.contact') ,['class'=>'col-form-label']))   !!}
            {!!  Form::text('contact',null,['id'=>'contact','class'=>'form-control ']) !!}
        </div>
        <div class="col-12 mb-3">
            {!!  Html::decode(Form::label('longitude' ,__('general.longitude'),['class'=>'col-form-label']))   !!}
            {!!  Form::text('longitude',null,['id'=>'longitude','class'=>'form-control ']) !!}
        </div>
        <div class="col-12 mb-3">
            {!!  Html::decode(Form::label('latitude' ,__('general.latitude'),['class'=>'col-form-label']))   !!}
            {!!  Form::text('latitude',null,['id'=>'latitude','class'=>'form-control ']) !!}
        </div>
    </div>
    <div class="card-footer text-center bg-transparent">
        <button type="submit" class="btn btn-dark"><i class="bx bx-search m-r-5"></i>Search</button>
    </div>
</div>

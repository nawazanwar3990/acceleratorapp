<div class="row">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('email' ,__('general.email'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('email',null,['id'=>'email','class'=>'form-control','required']) !!}
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('first_name' ,__('general.first_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('first_name',null,['id'=>'first_name','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('middle_name' ,__('general.middle_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('middle_name',null,['id'=>'middle_name','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('last_name' ,__('general.last_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('last_name',null,['id'=>'last_name','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('cnic' ,__('general.cnic'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('cnic',null,['id'=>'cnic','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('guardian_name' ,__('general.guardian_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('guardian_name',null,['id'=>'guardian_name','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('contact_1' ,__('general.contact1') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('contact_1',null,['id'=>'contact_1','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('contact_2' ,__('general.contact2') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('contact_2',null,['id'=>'contact_2','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('web_portfolio' ,__('general.web_portfolio') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('web_portfolio',null,['id'=>'web_portfolio','class'=>'form-control ']) !!}
    </div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('remarks' ,__('general.remarks'),['class'=>'col-form-label']))   !!}
        {!!  Form::textarea('remarks',null,['id'=>'remarks','class'=>'form-control ', 'rows'=>'2']) !!}
    </div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('address' ,__('general.address'),['class'=>'col-form-label']))   !!}
        {!!  Form::textarea('address',null,['id'=>'address','class'=>'form-control', 'rows'=>'2']) !!}
    </div>
</div>

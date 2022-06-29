<div class="col-md-3">
    {!!  Html::decode(Form::label('full_name' ,__('general.full_name') ,['class'=>'col-form-label']))   !!}
    {!!  Form::text('full_name',null,['id'=>'full_name','class'=>'form-control ']) !!}
</div>
<div class="col-md-3">
    {!!  Html::decode(Form::label('guardian_name' ,__('general.guardian_name') ,['class'=>'col-form-label']))   !!}
    {!!  Form::text('guardian_name',null,['id'=>'guardian_name','class'=>'form-control ']) !!}
</div>
<div class="col-md-3">
    {!!  Html::decode(Form::label('cnic' ,__('general.cnic'),['class'=>'col-form-label']))   !!}
    {!!  Form::text('cnic',null,['id'=>'cnic','class'=>'form-control ']) !!}
</div>
<div class="col-md-3">
    {!!  Html::decode(Form::label('contact_1' ,__('general.contact1') ,['class'=>'col-form-label']))   !!}
    {!!  Form::text('contact_1',null,['id'=>'contact_1','class'=>'form-control ']) !!}
</div>
<div class="col-md-3">
    {!!  Html::decode(Form::label('contact_2' ,__('general.contact2') ,['class'=>'col-form-label']))   !!}
    {!!  Form::text('contact_2',null,['id'=>'contact_2','class'=>'form-control ']) !!}
</div>
<div class="col-md-3">
    {!!  Html::decode(Form::label('email' ,__('general.email'),['class'=>'col-form-label']))   !!}
    {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ']) !!}
</div>
<div class="col-md-3">
    {!!  Html::decode(Form::label('web_portfolio' ,__('general.web_portfolio') ,['class'=>'col-form-label']))   !!}
    {!!  Form::text('web_portfolio',null,['id'=>'web_portfolio','class'=>'form-control ']) !!}
</div>
<div class="col-md-3">
    {!!  Html::decode(Form::label('remarks' ,__('general.remarks'),['class'=>'col-form-label']))   !!}
    {!!  Form::textarea('remarks',null,['id'=>'remarks','class'=>'form-control ', 'rows'=>'2']) !!}
</div>

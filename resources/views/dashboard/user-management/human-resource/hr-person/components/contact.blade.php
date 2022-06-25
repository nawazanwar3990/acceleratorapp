<div class="my-3">
    <h4 class="card-title text-purple">{{ __('general.contact_details') }}</h4>
    <hr>
    <div class="fields">
        <div class="row mb-3">
            <div class="col-12">
                <p>Primary Contact Owner(Owner Only)</p>
            </div>
            <hr>
            <div class="col-md-2">
                {!!  Html::decode(Form::label('cell_1' ,__('general.cell_priority_1').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('cell_1',null,['id'=>'cell_1','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_priority_1'), 'required']) !!}
            </div>

            <div class="col-md-2">
                {!!  Html::decode(Form::label('cell_2' ,__('general.cell_priority_2') ,['class'=>'form-label']))   !!}
                {!!  Form::text('cell_2',null,['id'=>'cell_2','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_priority_2')]) !!}
            </div>

            <div class="col-md-2">
                {!!  Html::decode(Form::label('cell_whats_app' ,__('general.cell_whats_app') ,['class'=>'form-label']))   !!}
                {!!  Form::text('cell_whats_app',null,['id'=>'cell_whats_app','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_whats_app')]) !!}
            </div>

            <div class="col-md-2">
                {!!  Html::decode(Form::label('landline' ,__('general.landline_no') ,['class'=>'form-label']))   !!}
                {!!  Form::text('landline',null,['id'=>'landline','class'=>'form-control ','placeholder'=>__('general.landline_no')]) !!}
            </div>

            <div class="col-md-2">
                {!!  Html::decode(Form::label('email' ,__('general.email') ,['class'=>'form-label']))   !!}
                {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ','placeholder'=>__('general.email')]) !!}
            </div>

            <div class="col-md-2">
                {!!  Html::decode(Form::label('facebook' ,__('general.facebook') ,['class'=>'form-label']))   !!}
                {!!  Form::text('facebook',null,['id'=>'facebook','class'=>'form-control ','placeholder'=>__('general.facebook')]) !!}
            </div>

        </div>

        <div class="row mb-3">
            <div class="col-12">
                <p>{{ __('general.secondary_contact') }}</p>
                <hr>
            </div>

            <div class="col-md-4">
                {!!  Html::decode(Form::label('sec_contact_full_name' ,__('general.full_name') ,['class'=>'form-label']))   !!}
                {!!  Form::text('sec_contact_full_name',null,['id'=>'sec_contact_full_name','class'=>'form-control ','placeholder'=>__('general.full_name')]) !!}
            </div>

            <div class="col-md-4">
                {!!  Html::decode(Form::label('sec_contact_relation' ,__('general.relation') ,['class'=>'form-label']))   !!}
                {!!  Form::select('sec_contact_relation', \App\Services\PersonService::relationsForDropdown(),null,['id'=>'contact_relation',
                    'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_relation')])
                !!}
            </div>
            <div class="col-md-4">
                {!!  Html::decode(Form::label('sec_contact' ,__('general.contact') ,['class'=>'form-label']))   !!}
                {!!  Form::text('sec_contact',null,['id'=>'contact','class'=>'form-control ','placeholder'=>__('general.contact')]) !!}
            </div>
        </div>
    </div>
</div>





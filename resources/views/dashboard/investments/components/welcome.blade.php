<div class="row g-3 align-items-end">
    <div class="col-md-6 form-group">
        <label class="form-label" for="startup_name">Startup Name</label>
        {!! Form::text('startup_name',$model->startup_name,['id'=>'startup_name','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-6 form-group">
        <label class="form-label" for="full_name">Full Name</label>
        {!! Form::text('full_name',$model->full_name,['id'=>'startup_name','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-6 form-group">
        <label class="form-label" for="email">Email</label>
        {!! Form::text('email',$model->email,['id'=>'startup_name','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-6 form-group">
        <label class="form-label" for="mobile">Mobile</label>
        {!! Form::text('email',$model->mobile,['id'=>'mobile','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-6 form-group">
        <label class="form-label" for="city">Address</label>
        {!! Form::text('email',$model->city,['id'=>'mobile','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-6 form-group">
        <label class="form-label" for="country">Country</label>
        {!! Form::text('country',$model->country,['id'=>'country','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-6 form-group">
        <label class="form-label" for="startup_stage">What Stage is your startup in?</label>
        {!! Form::text('startup_stage',$model->startup_stage,['id'=>'startup_stage','class'=>'form-control','disabled']) !!}
    </div>
</div>

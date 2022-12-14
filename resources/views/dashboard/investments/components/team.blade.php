<div class="row">
    <div class="col-9">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="no_of_founders" class="form-label">How many founders are in the team?</label>
                {!! Form::text('no_of_founders',$model->no_of_founders,['id'=>'startup_name','class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-md-12 mb-3 form-group">
                <label for="founder_previous_startup" class="form-label">Have any of the founders been involved in a
                    previous startup?</label>
                {!! Form::text('founder_previous_startup',$model->founder_previous_startup,['id'=>'founder_previous_startup','class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="founder_time" class="form-label">Are the founders Full Time?</label>
                {!! Form::text('founder_time',$model->founder_time,['id'=>'founder_time','class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="founder_past_experience" class="form-label">What are the founders’ previous experience
                    and what were their past achievements?</label>
                {!! Form::textarea('founder_past_experience',null,['id'=>'founder_past_experience','class'=>'form-control','disabled','rows'=>'3','cols'=>'30']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="founder_knows_each_other" class="form-label">How long have the founders known each
                    other?</label>
                {!! Form::textarea('founder_knows_each_other',null,['id'=>'founder_knows_each_other','class'=>'form-control','rows'=>'3','cols'=>'30','disabled']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="how_much_capital" class="form-label">How much capital has been spent by the founders so
                    far?</label>
                {!! Form::text('how_much_capital',$model->how_much_capital,['id'=>'how_much_capital','class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="technologies_white_labelled" class="form-label">Is your technology
                    white labelled or developed Yes or outsourced?</label>
                {!! Form::text('technologies_white_labelled',$model->technologies_white_labelled,['id'=>'technologies_white_labelled','class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="immediate_hired" class="form-label">Who are your immediate hires and why?</label>
                {!! Form::textarea('immediate_hired',$model->immediate_hired,['id'=>'immediate_hired','class'=>'form-control','rows'=>'3','cols'=>'30','disabled']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="business_execution" class="form-label">Do you foresee any business or execution
                    risk?</label>
                {!! Form::text('business_execution',$model->business_execution,['id'=>'business_execution','class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-md-12 form-group" id="risk_business"
                 style="display:{{ isset($model)&& $model->business_execution=='yes'?'block':'none' }};">
                <label for="risk_you_foresee_in_business" class="form-label">What risks do you foresee within your
                    business?</label>
                {!! Form::textarea('risk_you_foresee_in_business',$model->risk_you_foresee_in_business,['id'=>'risk_you_foresee_in_business','class'=>'form-control','rows'=>'3','cols'=>'30','disabled']) !!}
            </div>
            <div class="col-md-12 form-group">
                <label for="team_role" class="form-label">Which of the following roles do you have within your tech team?</label>
                {!! Form::text('team_role',$model->team_role,['id'=>'team_role','class'=>'form-control','disabled']) !!}
            </div>
        </div>
    </div>
    <div class="col-3 text-center">
        <label for="file" class="form-label">Team Pic</label>
        <div>
            <img src="{{ isset($model) && $model->file?asset($model->file):'' }}" class="img-fluid img-thumbnail" alt="">
        </div>
    </div>
</div>

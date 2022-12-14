<div class="row g-3 align-items-end">
    <div class="col-md-12 form-group">
        <label class="form-label" for="product_tech_focused">Is the product tech-focused?</label>
        {!! Form::text('product_tech_focused',str_replace('_',' ',$model->product_tech_focused),['id'=>'product_tech_focused','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="are_you_looking_for_funding">Are you looking for Funding?</label>
        {!! Form::text('are_you_looking_for_funding',str_replace('_',' ',$model->are_you_looking_for_funding),['id'=>'are_you_looking_for_funding','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group"
         style="display:{{ isset($model)&& $model->are_you_looking_for_funding=='yes'?'block':'none' }};">
        <label class="form-label" for="how_much_funding_you_want">How Much Funding you want?</label>
        {!! Form::textarea('how_much_funding_you_want',str_replace('_',' ',$model->how_much_funding_you_want),['id'=>'how_much_funding_you_want','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="working_on_your_product">How long have you been working on your
            product?</label>
        {!! Form::text('working_on_your_product',str_replace('_',' ',$model->working_on_your_product),['id'=>'working_on_your_product','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="launch_your_startup">Did you launch your startup?</label>
        {!! Form::text('launch_your_startup',str_replace('_',' ',$model->launch_your_startup),['id'=>'launch_your_startup','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="generating_revenue">Are you generating revenue?</label>
        {!! Form::text('generating_revenue',str_replace('_',' ',$model->generating_revenue),['id'=>'generating_revenue','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group"
         style="display:{{ isset($model)&& $model->generating_revenue=='yes'?'block':'none' }};">
        <label class="form-label" for="average_month_grow">How much have you generated over the past 12 months and
            what is your average month-over-month growth?</label>
        {!! Form::textarea('average_month_grow',str_replace('_',' ',$model->average_month_grow),['id'=>'average_month_grow','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="raised_external_funding">Have you raised any external funding?</label>
        {!! Form::text('raised_external_funding',str_replace('_',' ',$model->raised_external_funding),['id'=>'raised_external_funding','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group"
         style="display:{{ isset($model)&& $model->raised_external_funding=='no'?'block':'none' }}">
        <label class="form-label" for="fund_sar">How much was the fund? (SAR)</label>
        {!! Form::text('fund_sar',str_replace('_',' ',$model->fund_sar),['id'=>'fund_sar','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="problem_your_startup_solve">What problem does your startup solve?</label>
        {!! Form::textarea('problem_your_startup_solve',str_replace('_',' ',$model->problem_your_startup_solve),['id'=>'problem_your_startup_solve','class'=>'form-control','rows'=>'3','cols'=>'30','disabled']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="current_product_development">What are the key milestones for your current product
            development?</label>
        {!! Form::textarea('current_product_development',str_replace('_',' ',$model->current_product_development),['id'=>'current_product_development','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="business_model">What is your business model?</label>
        {!! Form::text('business_model',str_replace('_',' ',$model->business_model),['id'=>'business_model','class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="your_revenue_streams">What is your revenue streams?</label>
        {!! Form::textarea('your_revenue_streams',str_replace('_',' ',$model->your_revenue_streams),['id'=>'your_revenue_streams','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="perfect_time_for_this_idea">Why is this the perfect time
            for this idea? Why hasn’t it been done 2 years ago? And why would 2 years later be
            too late?</label>
        {!! Form::textarea('perfect_time_for_this_idea',str_replace('_',' ',$model->perfect_time_for_this_idea),['id'=>'perfect_time_for_this_idea','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
    </div>
    <div class="col-md-12 form-group">
        <label class="form-label" for="product_better_the_world">Will your product better the world? If yes,
            how? </label>
        {!! Form::textarea('product_better_the_world',str_replace('_',' ',$model->product_better_the_world),['id'=>'product_better_the_world','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
    </div>
</div>

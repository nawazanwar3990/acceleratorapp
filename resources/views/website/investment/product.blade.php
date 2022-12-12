<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.investment.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    @if(!$model)
                        {!! Form::open(['url' =>route('website.investments.store'), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                    @else
                        {!! Form::model($model,['url' =>route('website.investments.store'), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                    @endif
                    @csrf
                    {!! Form::hidden('current_step',\App\Enum\InvestmentStepEnum::PRODUCT) !!}
                    <div class="row g-3 align-items-end">
                        <div class="col-12">
                            <h3 class="fw-bold">Product</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="product_tech_focused">Is the product
                                    tech-focused?</label>
                                {!! Form::select('product_tech_focused',
                                        [
                                         'yes'=>'Yes',
                                         'no'=>'No',
                                          ],null,['id'=>'product_tech_focused','class'=>'form-control form-select','placeholder'=>'Select']
                                        )
                                !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="working_on_your_product">How long have you been
                                    working on your product?</label>
                                {!! Form::select('working_on_your_product',
                                                            [
                                                                \Illuminate\Support\Str::slug("It's still an idea",'-')=>"It's still an idea",
                                                                \Illuminate\Support\Str::slug('Less than 3 months','-')=>'Less than 3 months',
                                                                \Illuminate\Support\Str::slug('3 - 6 months','-')=>'3 - 6 months',
                                                                \Illuminate\Support\Str::slug('6 -12 months','-')=>'6 -12 months',
                                                                 \Illuminate\Support\Str::slug('1 to 2 years','-')=>'1 to 2 years',
                                                                  \Illuminate\Support\Str::slug('More than 2 years','-')=>'More than 2 years',
                                                            ],null,['id'=>'working_on_your_product','class'=>'form-control form-select','placeholder'=>'Select']
                                                            ) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="launch_your_startup">Did you launch your
                                    startup?</label>
                                {!! Form::select('launch_your_startup',
                                       [
                                        'yes'=>'Yes',
                                        'no'=>'No',
                                         ],null,['id'=>'launch_your_startup','class'=>'form-control form-select','placeholder'=>'Select']
                                       )
                               !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="generating_revenue">Are you generating
                                    revenue?</label>
                                {!! Form::select('generating_revenue',
                                      [
                                       'yes'=>'Yes',
                                       'no'=>'No',
                                        ],null,['id'=>'generating_revenue','class'=>'form-control form-select','placeholder'=>'Select']
                                      )
                              !!}
                            </div>
                        </div>
                        <div class="col-md-12" id="div_avaerage_month_grow" style="display:{{ isset($model)&& $model->generating_revenue=='yes'?'block':'none' }};">
                            <div class="form-group">
                                <label class="form-label" for="average_month_grow">How much have you generated over the
                                    past 12 months and
                                    what is your average month over month growth? <i
                                        class="text-danger">*</i></label>
                                {!! Form::textarea('average_month_grow',null,['id'=>'average_month_grow','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="raised_external_funding">Have you raised any external
                                    funding?</label>
                                {!! Form::select('raised_external_funding',
                                                           [
                                                               \Illuminate\Support\Str::slug("Yes - from Friends and Family",'-')=>"Yes - from Friends and Family",
                                                               \Illuminate\Support\Str::slug('Yes - from external investors','-')=>'Yes - from external investors',
                                                               \Illuminate\Support\Str::slug('No','-')=>'No'
                                                           ],null,['id'=>'raised_external_funding','class'=>'form-control form-select','placeholder'=>'Select']
                                                           ) !!}
                            </div>
                        </div>
                        <div class="col-md-12" id="div_fund_sar" style="display:{{ isset($model)&& $model->raised_external_funding=='no'?'block':'none' }}">
                            <div class="form-group">
                                <label class="form-label" for="fund_sar">How much was the fund? (SAR) <i
                                        class="text-danger">*</i></label>
                                {!! Form::text('fund_sar',null,['id'=>'fund_sar','class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="problem_your_startup_solve">What problem does your
                                    startup solve?</label>
                                {!! Form::textarea('problem_your_startup_solve',null,['id'=>'problem_your_startup_solve','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="current_product_development">What are the key milestones
                                    for your current product development?</label>
                                {!! Form::textarea('current_product_development',null,['id'=>'current_product_development','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="business_model">What is your business model?</label>
                                {!! Form::text('business_model',null,['id'=>'business_model','class'=>'form-control']) !!}
                                <small class="fst-italic">subscription, advertisements, freemium, commission
                                    etc.</small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="your_revenue_streams">What is your revenue
                                    streams?</label>
                                {!! Form::textarea('your_revenue_streams',null,['id'=>'your_revenue_streams','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="perfect_time_for_this_idea">Why is this the perfect time
                                    for this idea? Why hasn’t it been done 2 years ago? And why would 2 years later be
                                    too late?</label>
                                {!! Form::textarea('perfect_time_for_this_idea',null,['id'=>'perfect_time_for_this_idea','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="product_better_the_world">Will your product better the
                                    world? If yes, how? </label>
                                {!! Form::textarea('product_better_the_world',null,['id'=>'product_better_the_world','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn  btn-primary site-first-btn-color">
                            Next <i class="bx bx-arrow-to-right"></i>
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </x-slot>
    @section('innerScript')
        <script>
            $('#generating_revenue').on('change', function (obj) {
                const val = $('#generating_revenue').val();
                if (val === 'yes') {
                    $('#div_avaerage_month_grow').show('slow');
                    $('#avaerage_month_grow').attr('required', true);
                } else {
                    $('#div_avaerage_month_grow').hide('slow');
                    $('#avaerage_month_grow').attr('required', false);
                }
            });
            $('#raised_external_funding').on('change', function () {
                const fund = $('#raised_external_funding').val();
                if (fund === 'no') {
                    $('#div_fund_sar').hide('slow');
                    $('#fund_sar').attr('required', false);
                } else {
                    $('#div_fund_sar').show('slow');
                    $('#fund_sar').attr('required', true);
                }
            });
        </script>
    @endsection
</x-page-layout>

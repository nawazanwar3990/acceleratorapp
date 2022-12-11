<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.investment.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    {!! Form::open(['url' =>route('website.investments.store'), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                    @csrf
                    {!! Form::hidden('current_step',\App\Enum\InvestmentStepEnum::TEAM) !!}
                        <div class="row">
                            <div class="col-9">
                                <h2 class="fw-bold mb-3">Team</h2>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="no_of_founders" class="form-label">How many founders are
                                                in the team?</label>
                                            {!! Form::select('no_of_founders',
                                                                   [
                                                                       '1'=>'1',
                                                                       '2'=>'2',
                                                                       '3'=>'3',
                                                                        '4'=>'4',
                                                                        '5-or-more'=>'5 Or More'
                                                                   ],null,['id'=>'no_of_founders','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                                   ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="founder_previous_startup" class="form-label">Have any of the
                                                founders
                                                been involved in a previous startup?</label>

                                            {!! Form::select('founder_previous_startup',
                                                                 [
                                                                     \Illuminate\Support\Str::slug('No, this is our first entrepreneurial experience','-')=>'No, this is our first entrepreneurial experience',
                                                                     \Illuminate\Support\Str::slug('Yes, involved in one previous startup','-')=>'Yes, involved in one previous startup',
                                                                     \Illuminate\Support\Str::slug('Yes, involved in more than one previous startup(i.e. one founder in multiple startups or multiple founders in
                                                    previous start-ups)','-')=>'Yes, involved in more than one previous startup
                                                    (i.e. one founder in multiple startups or multiple founders in
                                                    previous start-ups)',
                                                                     \Illuminate\Support\Str::slug('Yes, and at least one of them was sold successfully','-')=>'Yes, and at least one of them was sold successfully',
                                                                 ],null,['id'=>'founder_previous_startup','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                                 ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="founder_time" class="form-label">Are the founders full
                                                time?</label>
                                            {!! Form::select('founder_time',
                                                                 [
                                                                     \Illuminate\Support\Str::slug('Yes, and at least one of them was sold successfully','-')=>'Yes, and at least one of them was sold successfully',
                                                                     \Illuminate\Support\Str::slug('Yes, some co-founders are full time','-')=>'Yes, some co-founders are full time',
                                                                     \Illuminate\Support\Str::slug('No','-')=>'No',
                                                                    ],null,['id'=>'founder_previous_startup','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                                 ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="founder_past_experience" class="form-label">What are the
                                                founders’ previous experience and what were their past achievements?<i
                                                    class="text-danger">*</i>
                                            </label>
                                            {!! Form::textarea('founder_past_experience',null,['id'=>'founder_past_experience','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="founder_knows_each_other" class="form-label">How long have the
                                                founders known each other?</label>
                                            {!! Form::textarea('founder_knows_each_other',null,['id'=>'founder_knows_each_other','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="how_much_capital" class="form-label">How much capital has been
                                                spent by the founders so far?</label>
                                            {!! Form::select('how_much_capital',
                                                                [
                                                                \Illuminate\Support\Str::slug('Below 10,000 SR','-')=>'Below 10,000 SR',
                                                                \Illuminate\Support\Str::slug('10,000 - 49,999','-')=>'10,000 - 49,999',
                                                                \Illuminate\Support\Str::slug('50,000 - 99,999','-')=>'50,000 - 99,999',
                                                                \Illuminate\Support\Str::slug('100,000 - 249,999','-')=>'100,000 - 249,999',
                                                                \Illuminate\Support\Str::slug('250,000 - 499,999','-')=>'250,000 - 499,999'
                                                                   ],null,['id'=>'how_much_capital','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                                ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="technologies_white_labelled" class="form-label">Is your technology
                                                white labelled or developed Yes or outsourced?</label>
                                            {!! Form::select('technologies_white_labelled',
                                                               [
                                                               \Illuminate\Support\Str::slug('In-house','-')=>'In-house',
                                                               \Illuminate\Support\Str::slug('White-labelled 3rd party software used','-')=>'White-labelled 3rd party software used',
                                                               \Illuminate\Support\Str::slug('Out-sourced','-')=>'Out-sourced',
                                                               \Illuminate\Support\Str::slug('Out-sourced but we have a part-time CTO / or full time project owner','-')=>'Out-sourced but we have a part-time CTO / or full time project owner',
                                                               \Illuminate\Support\Str::slug('Out-sourced but we have a full-time CTO','-')=>'Out-sourced but we have a full-time CTO'
                                                                  ],null,['id'=>'technologies_white_labelled','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                               ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="immediate_hired" class="form-label">Who are your immediate hires
                                                and why?</label>
                                            {!! Form::textarea('immediate_hired',null,['id'=>'immediate_hired','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="business_execution" class="form-label">Do you foresee any
                                                business or execution risk?</label>
                                            {!! Form::select('business_execution',
                                                             [
                                                             'yes'=>'Yes',
                                                             'no'=>'No'
                                                             ],null,['id'=>'business_execution','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                               )
                                           !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3" id="risk_business" style="display: none;">
                                        <div class="form-group">
                                            <label for="risk_you_foresee_in_business" class="form-label">What risks do you
                                                foresee within your business?</label>
                                            {!! Form::textarea('risk_you_foresee_in_business',null,['id'=>'risk_you_foresee_in_business','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">Which of the
                                                following roles do you have within your tech team?</label>
                                            <div class="form-check mb-2">
                                                {!! Form::radio('team_role','lead',false,['id'=>'team_role_lead','class'=>'form-check-input']) !!}
                                                <label class="form-check-label" for="team_role_lead">Lead</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                {!! Form::radio('team_role','product_owner',false,['id'=>'team_role_product_owner','class'=>'form-check-input']) !!}
                                                <label class="form-check-label" for="team_role_product_owner">Product Owner</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                {!! Form::radio('team_role','cto',false,['id'=>'team_role_cto','class'=>'form-check-input']) !!}
                                                <label class="form-check-label" for="team_role_cto">CTO</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="dropify-wrapper" style="height: 162px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input class="dropify" data-height="150"
                                           data-allowed-file-extensions="jpg jpeg png bmp" data-default-file=""
                                           name="logo" type="file">
                                    <button type="button"
                                            class="dropify-clear">Remove
                                    </button>
                                    <div class="dropify-preview"><span class="dropify-render"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner">
                                                <p class="dropify-filename"><span class="file-icon"></span> <span
                                                        class="dropify-filename-inner"></span></p>
                                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 4rem!important;">
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
            $(document).ready(function () {
                $('#business_execution').change(function () {
                    if ($(this).val() === "yes") {
                        $("#risk_business").show('slow');
                    } else {
                        $("#risk_business").hide('slow');
                    }
                });
            });
        </script>
    @endsection
</x-page-layout>

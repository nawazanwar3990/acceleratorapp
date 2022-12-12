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
                    {!! Form::hidden('current_step',\App\Enum\InvestmentStepEnum::MARKET) !!}
                    <div class="row">
                        <div class="col-12">
                            <h2 class="fw-bold mb-3">Market</h2>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="industry_of_start_up" class="form-label">What is the industry
                                            of your startup?<i class="text-danger">*</i></label>

                                        {!! Form::select('industry_of_start_up',
                                                               [
                                                \Illuminate\Support\Str::slug('Health & Healthcare','-')=>'Health & Healthcare',
                                                \Illuminate\Support\Str::slug('Fintech','-')=>'Fintech',
                                                \Illuminate\Support\Str::slug('Ed tech','-')=>'Ed Tech',
                                                \Illuminate\Support\Str::slug('Consumer Products or Services','-')=>'Consumer Products or Services',
                                                \Illuminate\Support\Str::slug('Logistics & Transportation','-')=>'Logistics & Transportation',
                                                \Illuminate\Support\Str::slug('Travel Tourism & Hospitality','-')=>'Travel Tourism & Hospitality',
                                                \Illuminate\Support\Str::slug('Recruitment and HR','-')=>'Recruitment and HR',
                                                \Illuminate\Support\Str::slug('Retail','-')=>'Retail',
                                                \Illuminate\Support\Str::slug('Real Estate','-')=>'Real Estate',
                                                \Illuminate\Support\Str::slug('Cyber Security','-')=>'Cyber Security',
                                                \Illuminate\Support\Str::slug('Insurance','-')=>'Insurance',
                                                \Illuminate\Support\Str::slug('Emerging Technologies (AI, VR, 3D, iOT, smart
                                                technologies)','-')=>'Emerging Technologies (AI, VR, 3D, iOT, smart
                                                technologies)',
                                                \Illuminate\Support\Str::slug('Other','-')=>'Other',

                                                               ],null,['id'=>'industry_of_start_up','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                               )
                                                !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="founder_domain" class="form-label">Do the founders have domain
                                            expertise in the field?<i class="text-danger">*</i></label>
                                        {!! Form::select('founder_domain',['yes'=>'Yes','no'=>'No'],null,['id'=>'founder_domain','class'=>'form-select form-control','required']) !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="total_addressable_market" class="form-label">What is your Total
                                            Addressable Market? (SAR)<i class="text-danger">*</i></label>
                                        {!! Form::text('total_addressable_market',null,['id'=>'total_addressable_market','class'=>'form-control','required']) !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="three_key_competitors" class="form-label">Who are your 3 key
                                            competitors? Why would customers choose you over them?<i
                                                class="text-danger">*</i></label>
                                        {!! Form::textarea('three_key_competitors',null,['id'=>'three_key_competitors','class'=>'form-control','rows'=>'3','cols'=>'0','required']) !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="product_service" class="form-label">How do you
                                            commercialize your product or service?<i
                                                class="text-danger">*</i></label>
                                        {!! Form::select('product_service',
                                                              [
                                               \Illuminate\Support\Str::slug('B2C (business-to-consumer)','-')=>'B2C (business-to-consumer)',
                                               \Illuminate\Support\Str::slug('B2B (business-to-business)','-')=>'B2B (business-to-business)',
                                               \Illuminate\Support\Str::slug('B2G (business-to-government)','-')=>'B2G (business-to-government)',
                                               \Illuminate\Support\Str::slug('C2C (consumer-to-consumer)','-')=>'C2C (consumer-to-consumer)',
                                               \Illuminate\Support\Str::slug('C2B (consumer-to-business)','-')=>'C2B (consumer-to-business)',
                                                              ],null,['id'=>'product_service','class'=>'form-control form-select','required','placeholder'=>'Select']
                                                              )
                                               !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3" id="div_product_service"
                                     style="display:{{ isset($model)&& $model->product_service=='b2b-business-to-business' || $model->product_service=='b2g-business-to-government'?'block':'none' }}">
                                    <div class="form-group">
                                        <div class="form-check">
                                            {!! Form::radio('product_service_value','already_contract_signed',false,['id'=>'already_contract_signed','class'=>'form-check-input']) !!}
                                            <label class="form-check-label" for="already_contract_signed">
                                                Do you have contracts already signed?
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            {!! Form::radio('product_service_value','yet_to_sign',false,['id'=>'yet_to_sign','class'=>'form-check-input']) !!}
                                            <label class="form-check-label" for="yet_to_sign">
                                                Yet to sign?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="suitable_competitive_edge" class="form-label">If you have a
                                            sustainable competitive edge, do you believe you can sustain & further
                                            develop this competitive edge for the next 2 years?<i
                                                class="text-danger">*</i></label>
                                        <div class="form-check mb-2">
                                            {!! Form::radio('suitable_competitive_edge','yes',false,['id'=>'suitable_competitive_edge_yes','class'=>'form-check-input']) !!}
                                            <label class="form-check-label"
                                                   for="suitable_competitive_edge_yes">Yes</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            {!! Form::radio('suitable_competitive_edge','no',false,['id'=>'suitable_competitive_edge_no','class'=>'form-check-input']) !!}
                                            <label class="form-check-label"
                                                   for="suitable_competitive_edge_no">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3" id="div_how_so" style="display:{{ isset($model)&& $model->suitable_competitive_edge=='yes'?'block':'none' }};">
                                    <div class="form-group">
                                        <label for="security_question_name" class="form-label">How so?<i
                                                class="text-danger">*</i></label>
                                        {!! Form::textarea('competitive_how_so',null,['id'=>'competitive_how_so','class'=>'form-control','rows'=>'3','cols'=>'30']) !!}
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
                $('#product_service').change(function () {
                    if (
                        $(this).val() === "b2b-business-to-business"
                        ||
                        $(this).val() === "b2g-business-to-government") {
                        $("#div_product_service").show('slow');
                    } else {
                        $("#div_product_service").hide('slow');
                    }
                });

                $('[name=suitable_competitive_edge]').change(function () {
                    if ($(this).val() === "yes") {
                        $("#div_how_so").show('slow');
                    } else {
                        $("#div_how_so").hide('slow');
                    }
                });
            });
        </script>
    @endsection
</x-page-layout>

<x-page-layout :page="$page">
    <x-slot name="content">
        <style>
            .select2-container {
                width: 100% !important;
            }
        </style>
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.investment.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    @if(!$model)
                        {!! Form::open(['url' =>route('website.investment.store'), 'method' => 'POST','files' => true,'id' =>'market_form', 'class' => 'solid-validation']) !!}
                    @else
                        {!! Form::model($model,['url' =>route('website.investment.store'), 'method' => 'POST','files' => true,'id' =>'market_form', 'class' => 'solid-validation']) !!}
                    @endif
                    @csrf
                    {!! Form::hidden('current_step',\App\Enum\InvestmentStepEnum::MENTOR) !!}
                    <div class="row">
                        <div class="col-12">
                            <h2 class="fw-bold mb-3">Mentor</h2>
                            <div class="row">
                                <div class="col-md-12 mb-3 form-group">
                                    <label for="mentor_type" class="form-label">
                                        Select Your Mentor Type<i class="text-danger">*</i>
                                    </label>
                                    <div class="form-check mb-2">
                                        {!! Form::radio('mentor_type',\App\Enum\AcceleratorTypeEnum::INDIVIDUAL,isset($model) && $model->mentor_type==\App\Enum\AcceleratorTypeEnum::INDIVIDUAL,['id'=>'mentor_type_individual','class'=>'form-check-input','required']) !!}
                                        <label class="form-check-label" for="mentor_type_individual">BA
                                            Individual((Mentor)</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        {!! Form::radio('mentor_type',\App\Enum\AcceleratorTypeEnum::COMPANY,isset($model) && $model->mentor_type==\App\Enum\AcceleratorTypeEnum::COMPANY,['id'=>'mentor_type_company','class'=>'form-check-input','required']) !!}
                                        <label class="form-check-label" for="mentor_type_company">BA
                                            Company</label>
                                    </div>
                                </div>
                                {{--BA Individual Holder--}}
                                <div class="col-md-12 mb-3 form-group main_data_holder" id="individual_mentor_holder"
                                     style="display:@if(isset($model)  && $model->mentor_type==\App\Enum\AcceleratorTypeEnum::INDIVIDUAL) block @else none @endif" >
                                    <label for="mentor_individual_value" class="form-label">
                                        Select BA Individual Mentor<i class="text-danger">*</i>
                                    </label>
                                    <div class="data_holder my-2">
                                        @include('website.components.ba-individual')
                                    </div>
                                </div>
                                {{--BA Company Holder--}}
                                <div class="col-md-12 mb-3 form-group main_data_holder"
                                     style="display:@if(isset($model) && $model->mentor_type==\App\Enum\AcceleratorTypeEnum::COMPANY) block @else none @endif"
                                     id="company_mentor_holder">
                                    <label for="mentor_company_value" class="form-label">
                                        Select BA Company<i class="text-danger">*</i>
                                    </label>
                                    <div class="data_holder my-2">
                                        @include('website.components.ba-company')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 4rem!important;"></div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn  btn-primary site-first-btn-color">
                            Save <i class="bx bx-arrow-to-right"></i>
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @include('components.common-scripts')
    </x-slot>
    @section('innerScript')
        <script>
            $(document).ready(function () {
                $('[name=mentor_type]').change(function () {
                    let individual_mentor_holder = $("#individual_mentor_holder");
                    let company_mentor_holder = $("#company_mentor_holder");
                    individual_mentor_holder.hide();
                    company_mentor_holder.hide();
                    if ($(this).val() === "individual") {
                        individual_mentor_holder.show('slow');
                    } else {
                        company_mentor_holder.show('slow');
                    }
                });
            });
        </script>
    @endsection
</x-page-layout>

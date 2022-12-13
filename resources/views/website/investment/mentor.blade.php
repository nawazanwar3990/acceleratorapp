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
                                        {!! Form::radio('mentor_type','individual',true,['id'=>'mentor_type_individual','class'=>'form-check-input']) !!}
                                        <label class="form-check-label" for="mentor_type_individual">BA
                                            Individual((Mentor)</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        {!! Form::radio('mentor_type','company',false,['id'=>'mentor_type_company','class'=>'form-check-input']) !!}
                                        <label class="form-check-label" for="mentor_type_company">BA
                                            Company</label>
                                    </div>
                                </div>
                                {{--BA Individual Holder--}}
                                <div class="col-md-12 mb-3 form-group main_data_holder" id="individual_mentor_holder">
                                    <label for="mentor_individual_value" class="form-label">Select BA Individual
                                        Mentor<i class="text-danger">*</i></label>
                                    {!! Form::select('mentor_individual_value',\App\Services\BaService::getBADropdown(\App\Enum\AccessTypeEnum::INDIVIDUAL),null,['id'=>'mentor_individual_value','class'=>'form-control select2','data-placeholder'=>'Select','onchange'=>'loadInfo(this,"'.\App\Enum\AcceleratorTypeEnum::INDIVIDUAL.'");','multiple']); !!}
                                    <div class="data_holder my-2"></div>
                                </div>
                                {{--BA Company Holder--}}
                                <div class="col-md-12 mb-3 form-group main_data_holder" style="display: none;"
                                     id="company_mentor_holder">
                                    <label for="mentor_company_value" class="form-label">Select BA Company<i
                                            class="text-danger">*</i></label>
                                    {!! Form::select('mentor_company_value[]',\App\Services\BaService::getBADropdown(\App\Enum\AccessTypeEnum::COMPANY),null,['id'=>'mentor_company_value','class'=>'form-control select2 w-100','data-placeholder'=>'Select','onchange'=>'loadInfo(this,"'.\App\Enum\AcceleratorTypeEnum::COMPANY.'");','multiple']); !!}
                                    <div class="data_holder my-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 4rem!important;"></div>
                    <div class="text-center mt-4">
                        @include('website.investment.component.next-save-button')
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

                    individual_mentor_holder.find('.data_holder').empty();
                    company_mentor_holder.find('.data_holder').empty();

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

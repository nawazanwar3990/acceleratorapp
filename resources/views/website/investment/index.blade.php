<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.investment.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    @if(!$model)
                        {!! Form::open(['url' =>route('website.investments.store'), 'method' => 'POST','files' => true,'id' =>'welcome_form', 'class' => 'solid-validation welcome_form']) !!}
                    @else
                        {!! Form::model($model,['url' =>route('website.investments.store'), 'method' => 'POST','files' => true,'id' =>'welcome_form', 'class' => 'solid-validation welcome_form']) !!}
                    @endif
                    @csrf
                    {!! Form::hidden('current_step',\App\Enum\InvestmentStepEnum::WELCOME) !!}
                    <div class="row g-3 align-items-end">
                        <div class="col-12">
                            <h3 class="fw-bold">Welcome</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="startup_name">Startup Name <i
                                        class="text-danger">*</i></label>
                                {!! Form::text('startup_name',null,['id'=>'startup_name','class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="first_name">Name <i class="text-danger">*</i></label>
                                {!! Form::text('first_name',null,['id'=>'first_name','class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::text('last_name',null,['id'=>'last_name','class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="email">Email <i class="text-danger">*</i></label>
                                {!! Form::email('email',null,['id'=>'email','class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="mobile">Mobile <i class="text-danger">*</i></label>
                                {!! Form::text('mobile',null,['id'=>'mobile','class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="city">Address <i class="text-danger">*</i></label>
                                {!! Form::text('city',null,['id'=>'city','class'=>'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::select('country',
                                      [
                                       'pakistan'=>'Pakistan',
                                       'india'=>'India',
                                        ],null,['id'=>'country','class'=>'form-control form-select','placeholder'=>'Select','required']
                                      )
                              !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">What Stage is your startup in? <i
                                        class="text-danger">*</i></label>
                                <div class="form-check mb-3">
                                    {!! Form::radio('startup_stage','pre_seed',isset($model) && $model->startup_stage=='pre_seed',['id'=>'pre_seed','class'=>'form-check-input','required']) !!}
                                    <label class="form-check-label" for="pre_seed">Pre Seed</label>
                                </div>
                                <div class="form-check mb-3">
                                    {!! Form::radio('startup_stage','seed',isset($model) && $model->startup_stage=='seed',['id'=>'seed','class'=>'form-check-input','required']) !!}
                                    <label class="form-check-label" for="seed">Seed</label>
                                </div>
                                <div class="form-check mb-3">
                                    {!! Form::radio('startup_stage','series_a',isset($model) && $model->startup_stage=='series_a',['id'=>'series_a','class'=>'form-check-input','required']) !!}
                                    <label class="form-check-label" for="series_a">Series A</label>
                                </div>
                                <div class="form-check mb-3">
                                    {!! Form::radio('startup_stage','series_b',isset($model) && $model->startup_stage=='series_b',['id'=>'series_b','class'=>'form-check-input','required']) !!}
                                    <label class="form-check-label" for="series_b">Series B</label>
                                </div>
                                <div class="form-check mb-3">
                                    {!! Form::radio('startup_stage','series_c',isset($model) && $model->startup_stage=='series_c',['id'=>'series_c','class'=>'form-check-input','required']) !!}
                                    <label class="form-check-label" for="series_c">Series C</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        @include('website.investment.component.next-save-button')
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @include('website.investment.component.scripts')
        <script>
            $("#welcome_form").validate();
        </script>
    </x-slot>
</x-page-layout>

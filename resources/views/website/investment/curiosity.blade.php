<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.investment.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    @if(!$model)
                        {!! Form::open(['url' =>route('website.investment.store'), 'method' => 'POST','files' => true,'id' =>'curiosity_form', 'class' => 'solid-validation']) !!}
                    @else
                        {!! Form::model($model,['url' =>route('website.investment.store'), 'method' => 'POST','files' => true,'id' =>'curiosity_form', 'class' => 'solid-validation']) !!}
                    @endif
                    @csrf
                    {!! Form::hidden('current_step',\App\Enum\InvestmentStepEnum::CURIOSITY) !!}
                    <div class="row">
                        <div class="col-12">
                            <h2 class="fw-bold mb-3">Curiosity</h2>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="security_question_name" class="form-label">How did you hear about
                                            us?<i class="text-danger">*</i></label>
                                        {!! Form::text('hear_about_us',null,['id'=>'hear_about_us','class'=>'form-control','required']) !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="what_made_apply_to_falak" class="form-label">What made you apply to
                                            INCUAPP?<i class="text-danger">*</i></label>
                                        {!! Form::textarea('what_made_apply_to_falak',null,['id'=>'what_made_apply_to_falak','class'=>'form-control','required','rows'=>'3','cols'=>'30']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 4rem!important;">
                    </div>
                    @if(!request()->has('id'))
                        <div class="text-center mt-4">
                            <button type="submit" class="btn  btn-primary site-first-btn-color">
                                Save <i class="bx bx-arrow-to-right"></i>
                            </button>
                        </div>
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @include('website.investment.component.scripts')
        <script>
            $("#curiosity_form").validate();
        </script>
    </x-slot>
</x-page-layout>

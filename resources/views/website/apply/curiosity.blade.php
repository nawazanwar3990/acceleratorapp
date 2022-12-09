<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.apply.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    <form method="POST" action="http://acceleratorapp.test/ba/store/company/pre-defined-plan/user-info"
                        accept-charset="UTF-8" id="plan_form" class="solid-validation" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="ZceDkgtWkrnP0CfdmrzNiNmzXnSEegFk94WRlQ3J">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="fw-bold mb-3">Curiosity</h2>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">How did you hear about us?<i class="text-danger">*</i></label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_value" class="form-label">What made you apply to Falak?<i class="text-danger">*</i></label>
                                            <textarea name="" id="" cols="30" rows="3" class="form-control" required></textarea>
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
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>

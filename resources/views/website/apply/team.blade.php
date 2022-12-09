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
                            <div class="col-9">
                                <h2 class="fw-bold mb-3">Team</h2>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">How many founders are
                                                in the team?</label>
                                            <select id="security_question_name" class="form-select form-control"
                                                required="" name="security_question_name">
                                                <option selected="selected" value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5 or more">5 or more</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">Have any of the
                                                founders
                                                been involved in a previous startup?</label>
                                            <select id="security_question_name" class="form-select form-control"
                                                required="" name="security_question_name">
                                                <option selected="selected" value=""></option>
                                                <option value="1">No, this is our first entrepreneurial experience
                                                </option>
                                                <option value="2">Yes, involved in one previous startup</option>
                                                <option value="3">Yes, involved in more than one previous startup
                                                    (i.e. one founder in multiple startups or multiple founders in
                                                    previous start-ups)</option>
                                                <option value="4">Yes, and at least one of them was sold
                                                    successfully</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">Are the founders full
                                                time?</label>
                                            <select id="security_question_name" class="form-select form-control"
                                                required="" name="security_question_name">
                                                <option selected="selected" value=""></option>
                                                <option value="1">Yes, and at least one of them was sold
                                                    successfully</option>
                                                <option value="2">Yes, some co-founders are full time</option>
                                                <option value="3">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_value" class="form-label">What are the
                                                founders’
                                                previous experience and what were their past achievements?<i
                                                    class="text-danger">*</i></label>
                                            <textarea name="" id="" cols="30" rows="3" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_value" class="form-label">How long have the
                                                founders known each other?</label>
                                            <textarea name="" id="" cols="" rows="3" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">How much capital has
                                                been
                                                spent by the founders so far?</label>
                                            <select id="security_question_name" class="form-select form-control"
                                                required="" name="security_question_name">
                                                <option selected="selected" value=""></option>
                                                <option value="1">Below 10,000 SR</option>
                                                <option value="2">10,000 - 49,999</option>
                                                <option value="3">50,000 - 99,999</option>
                                                <option value="4">100,000 - 249,999</option>
                                                <option value="5">100,000 - 249,999</option>
                                                <option value="6">250,000 - 499,999</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">Is your technology
                                                white
                                                labelled or developed Yes or outsourced?</label>
                                            <select id="security_question_name" class="form-select form-control"
                                                required="" name="security_question_name">
                                                <option selected="selected" value=""></option>
                                                <option value="In-house">In-house</option>
                                                <option value="2">White-labelled 3rd party software used</option>
                                                <option value="3">Out-sourced</option>
                                                <option value="4">Out-sourced but we have a part-time CTO / or
                                                    full
                                                    time project owner</option>
                                                <option value="5">Out-sourced but we have a full-time CTO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_value" class="form-label">Who are your
                                                immediate
                                                hires and why?</label>
                                            <textarea name="" id="" cols="" rows="3" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="business_execution" class="form-label">Do you foresee any
                                                business or execution risk?</label>
                                            <select id="business_execution" class="form-select form-control"
                                                required="" name="business_execution">
                                                <option selected="selected" value=""></option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3" id="risk_business" style="display: none;">
                                        <div class="form-group">
                                            <label for="security_question_value" class="form-label">What risks do you
                                                foresee within your business?</label>
                                            <textarea name="" id="" cols="" rows="3" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">Which of the
                                                following roles do you have within your tech team?</label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Lead</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Product
                                                    Owner</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">CTO</label>
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
                                    </div><input class="dropify" data-height="150"
                                        data-allowed-file-extensions="jpg jpeg png bmp" data-default-file=""
                                        name="logo" type="file"><button type="button"
                                        class="dropify-clear">Remove</button>
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
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
    @section('innerScript')
        <script>
            $(document).ready(function() {
                $('#business_execution').change(function() {
                    if ($(this).val() == "Yes") {
                        $("#risk_business").show('slow');
                    } else {
                        $("#risk_business").hide('slow');
                    }
                });
            });
        </script>
    @endsection
</x-page-layout>

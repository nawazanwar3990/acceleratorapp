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
                                <h2 class="fw-bold mb-3">Market</h2>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">What is the industry
                                                of your startup?<i class="text-danger">*</i></label>
                                            <select id="security_question_name" class="form-select form-control"
                                                required="" name="security_question_name">
                                                <option selected="selected" value=""></option>
                                                <option value="1">Health & Healthcare</option>
                                                <option value="2">Fintech</option>
                                                <option value="3">Ed tech</option>
                                                <option value="4">Consumer Products or Services</option>
                                                <option value="">Logistics & Transportation</option>
                                                <option value="">Travel Tourism & Hospitality</option>
                                                <option value="">Recruitment and HR</option>
                                                <option value="">Retail</option>
                                                <option value="">Real Estate</option>
                                                <option value="">Cyber Security</option>
                                                <option value="">Insurance</option>
                                                <option value="">Emerging Technologies (AI, VR, 3D, iOT, smart
                                                    technologies)</option>
                                                <option value="">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">Do the founders have
                                                domain expertise in the field?<i class="text-danger">*</i></label>
                                            <select id="security_question_name" class="form-select form-control"
                                                required="" name="security_question_name">
                                                <option selected="selected" value=""></option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">What is your Total
                                                Addressable Market? (SAR)<i class="text-danger">*</i></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_value" class="form-label">Who are your 3 key
                                                competitors? Why would customers choose you over them?<i
                                                    class="text-danger">*</i></label>
                                            <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="product_service" class="form-label">How do you
                                                commercialize your product or service?<i
                                                    class="text-danger">*</i></label>
                                            <select id="product_service" class="form-select form-control"
                                                required="" name="product_service">
                                                <option selected="selected" value=""></option>
                                                <option value="1">B2C (business-to-consumer)</option>
                                                <option value="B2B">B2B (business-to-business)</option>
                                                <option value="B2G">B2G (business-to-government)</option>
                                                <option value="4">C2C (consumer-to-consumer)</option>
                                                <option value="5">C2B (consumer-to-business)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3" id="div_product_service" style="display: none;">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Do you have contracts already signed?
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Yet to sign?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">If you have a
                                                sustainable competitive edge, do you believe you can sustain & further
                                                develop this competitive edge for the next 2 years?<i
                                                    class="text-danger">*</i></label>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" value="Yes" id="Yes"
                                                    type="radio" name="YesEdge">
                                                <label class="form-check-label" for="Yes">Yes</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="radio" name="YesEdge"
                                                    id="">
                                                <label class="form-check-label" for="YesEdge">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3" id="div_how_so" style="display: none;">
                                        <div class="form-group">
                                            <label for="security_question_name" class="form-label">How so?<i
                                                    class="text-danger">*</i></label>
                                            <textarea name="" id="" cols="" rows="3" class="form-control"></textarea>
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
                $('#product_service').change(function() {
                    if ($(this).val() == "B2B" || $(this).val() == "B2G") {
                        $("#div_product_service").show('slow');
                    } else {
                        $("#div_product_service").hide('slow');
                    }
                });

                $('[name=YesEdge]').change(function() {
                    if ($(this).val() == "Yes") {
                        $("#div_how_so").show('slow');
                    } else {
                        $("#div_how_so").hide('slow');
                    }
                });
            });
        </script>
    @endsection
</x-page-layout>

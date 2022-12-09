<x-page-layout :page="$page">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.investment.component.progress-bar')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    <form method="POST" action="" id="apply_now" class="solid-validation"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-items-end">
                            <div class="col-12">
                                <h3 class="fw-bold">Product</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="product_tech_focused">Is the product
                                        tech-focused?</label>
                                    <select class="form-control form-select" name="product_tech_focused"
                                        id="product_tech_focused">
                                        <option value=""></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="working_on_your_product">How long have you been
                                        working on your product?</label>
                                    <select class="form-control form-select" name="working_on_your_product"
                                        id="working_on_your_product">
                                        <option value=""></option>
                                        <option value="It's still an idea">It's still an idea</option>
                                        <option value="Less than 3 months">Less than 3 months</option>
                                        <option value="3 - 6 months">3 - 6 months</option>
                                        <option value="6 -12 months">6 -12 months</option>
                                        <option value="1 to 2 years">1 to 2 years</option>
                                        <option value="More than 2 years">More than 2 years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="launch_your_startup">Did you launch your
                                        startup?</label>
                                    <select class="form-control form-select" name="launch_your_startup"
                                        id="launch_your_startup">
                                        <option value=""></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="generating_revenue">Are you generating
                                        revenue?</label>
                                    <select class="form-control form-select" name="generating_revenue"
                                        id="generating_revenue">
                                        <option value=""></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12" id="div_avaerage_month_grow" style="display: none;">
                                <div class="form-group">
                                    <label class="form-label" for="avaerage_month_grow">How much have you generated over the past 12 months and
                                        what is your average month over month growth? <i
                                            class="text-danger">*</i></label>
                                    <textarea class="form-control" name="avaerage_month_grow" id="avaerage_month_grow" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="raised_external_funding">Have you raised any external funding?</label>
                                    <select class="form-control form-select" name="raised_external_funding"
                                        id="raised_external_funding">
                                        <option value=""></option>
                                        <option value="Yes - from Friends and Family">Yes - from Friends and Family</option>
                                        <option value="Yes - from external investors">Yes - from external investors</option>
                                        <option value="No">No</option>    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12" id="div_fund_sar" style="display: none;">
                                <div class="form-group">
                                    <label class="form-label" for="fund_sar">How much was the fund? (SAR) <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" name="fund_sar" id="fund_sar">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="problem_your_startup_solve">What problem does your startup solve?</label>
                                    <textarea class="form-control" name="problem_your_startup_solve" id="problem_your_startup_solve" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="current_product_development">What are the key milestones for your current product development?</label>
                                    <textarea class="form-control" name="current_product_development" id="current_product_development" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="business_model">What is your business model?</label>
                                    <input type="text" class="form-control" name="business_model">
                                    <small class="fst-italic">subscription, advertisements, freemium, commission etc.</small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="your_revenue_streams">What is your revenue streams?</label>
                                    <textarea class="form-control" name="your_revenue_streams" id="your_revenue_streams" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="perfect_time_for_this_idea">Why is this the perfect time for this idea? Why hasn’t it been done 2 years ago? And why would 2 years later be too late?</label>
                                    <textarea class="form-control" name="perfect_time_for_this_idea" id="perfect_time_for_this_idea" cols="10" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="roduct_better_the_world">Will your product better the world? If yes, how? </label>
                                    <textarea class="form-control" name="roduct_better_the_world" id="roduct_better_the_world" cols="10" rows="3"></textarea>
                                </div>
                            </div>
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
            $('#generating_revenue').on('change', function(obj) {
                var val = $('#generating_revenue').val();
                if(val == 'Yes'){
                    $('#div_avaerage_month_grow').show('slow');
                    $('#avaerage_month_grow').attr('required', true); 
                } else {
                    $('#div_avaerage_month_grow').hide('slow');
                    $('#avaerage_month_grow').attr('required',false);
                }
            });

            $('#raised_external_funding').on('change',function(){
                var fund = $('#raised_external_funding').val();
                if(fund == 'No'){
                    $('#div_fund_sar').hide('slow');
                    $('#fund_sar').attr('required',false);
                } else {
                    $('#div_fund_sar').show('slow');
                    $('#fund_sar').attr('required',true);
                }
            });
        </script>
    @endsection
</x-page-layout>

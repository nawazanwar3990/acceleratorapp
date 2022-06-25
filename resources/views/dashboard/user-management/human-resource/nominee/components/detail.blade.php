{{--<div class="accordion-item">--}}
{{--    <h2 class="accordion-header" id="personal_detail_heading">--}}
{{--        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personal_detail"--}}
{{--                aria-expanded="true" aria-controls="collapseOne">--}}
{{--            {{ __('general.nominee_detail') }}--}}
{{--        </button>--}}
{{--    </h2>--}}

{{--    <div id="personal_detail" class="accordion-collapse collapse show bg-white" aria-labelledby="headingOne"--}}
{{--         data-bs-parent="#accordionExample">--}}
{{--        <div class="accordion-body">--}}
<h4 class="card-title text-purple">{{ __('general.nominee_detail') }}</h4>
<hr>
            <div class="fields">

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h5>{{ __('general.o_s_b_detail') }}</h5>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        @include('dashboard.common.single-hr-picker',
                            [
                                'fieldName' => 'owner_hr_id',
                                'for' => 'edit',
                                'records'=>\App\Services\PersonService::getHrById($model->owner_hr_id ?? null)
                            ])
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <h5>{{ __('general.nominee_detail') }}</h5>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        @include('dashboard.common.single-hr-picker',
                            [
                                'fieldName' => 'nominee_hr_id',
                                'for' => 'edit',
                                'records'=>\App\Services\PersonService::getHrById($model->nominee_hr_id ?? null)
                            ])
                    </div>
                </div>
            </div>
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}

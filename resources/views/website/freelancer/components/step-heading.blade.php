@if($model)
    @switch($step)
        @case(\App\Enum\StepEnum::STEP1)
            <h2 class="text-center fw-bold">
                {{ trans('general.company_profile') }}
            </h2>
            @break
        @case(\App\Enum\StepEnum::STEP2)
            <h2 class="text-center fw-bold">
                {{ trans('general.services_of_freelancers') }}
            </h2>
            @break
        @case(\App\Enum\StepEnum::STEP3)
            <h2 class="text-center fw-bold">
                {{ trans('general.focal_person_detail') }}
            </h2>
            @break
        @case(\App\Enum\StepEnum::STEP4)
            <h2 class="text-center fw-bold">
                {{ trans('general.packages') }}
            </h2>
            @break
    @endswitch
@endif

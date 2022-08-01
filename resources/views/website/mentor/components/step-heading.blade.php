@switch($step)
    @case(\App\Enum\StepEnum::STEP1)
        <h2 class="text-center fw-bold">
            {{ trans('general.mentor_services') }}
        </h2>
        @break
    @case(\App\Enum\StepEnum::STEP2)
        <h2 class="text-center fw-bold">
            {{ trans('general.mentor_detail') }}
        </h2>
        @break
    @case(\App\Enum\StepEnum::STEP3)
        <h2 class="text-center fw-bold">
            {{ trans('general.packages') }}
        </h2>
        @break
@endswitch

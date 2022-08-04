@switch($step)
    @case(\App\Enum\StepEnum::USER_INFO)
        <h2 class="text-center fw-bold">
            {{ trans('general.mentor_detail') }}
        </h2>
        @break
    @case(\App\Enum\StepEnum::SERVICES)
        <h2 class="text-center fw-bold">
            {{ trans('general.services') }}
        </h2>
        @break
    @case(\App\Enum\StepEnum::PACKAGES)
        <h2 class="text-center fw-bold">
            {{ trans('general.packages') }}
        </h2>
        @break
@endswitch

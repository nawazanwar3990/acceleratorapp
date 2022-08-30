@switch($step)
    @case(\App\Enum\StepEnum::USER_INFO)

            {{ trans('general.mentor_detail') }}

        @break
    @case(\App\Enum\StepEnum::SERVICES)

            {{ trans('general.services') }}

        @break
    @case(\App\Enum\StepEnum::PACKAGES)

            {{ trans('general.packages') }}

        @break
@endswitch

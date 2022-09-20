<x-register-layout
    :page="\App\Services\CMS\PageService::getHomePage()"
    :type="$type=='company'?\App\Enum\AccessTypeEnum::BUSINESS_ACCELERATOR:\App\Enum\AccessTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL"
    :step="$step">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row bg-white p-3">
                @include('website.ba.components.steps')
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                    {!! Form::open(['url' =>route('website.ba.store',[$type,$payment,$step,($model)?$model->id:null,$action?'action=edit':'']), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                    @include(sprintf('%s.%s', 'website.ba.components', $step))
                    <div class="text-center mt-4">
                        @if($step==\App\Enum\StepEnum::PACKAGES)
                            <a onclick="apply_ba_subscription();"
                               class="btn  btn-primary site-first-btn-color">
                                {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                            </a>
                        @else
                            @if($action)
                                <button type="submit"
                                        class="btn  btn-primary site-first-btn-color">
                                    {{ trans('general.update') }} <i class="bx bx-arrow-to-right"></i>
                                </button>
                            @else
                                <button type="submit"
                                        class="btn  btn-primary site-first-btn-color">
                                    {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                </button>
                            @endif
                        @endif
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @include('components.common-scripts')
    </x-slot>
</x-register-layout>

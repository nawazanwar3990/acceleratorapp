<x-register-layout
    :page="\App\Services\CMS\PageService::getHomePage()"
    :type="\App\Enum\AccessTypeEnum::MENTOR"
    :step="$step">
    <x-slot name="content">
        <div class="container p-4 bg-white">
            <div class="row justify-content-center">
                <div class="{{ auth()->user()?'col-12':'col-xxl-10 col-xl-10 col-lg-10 col-md-10' }}">
                    <div class="row">
                        @include('website.mentor.components.steps')
                        <div class="@if(auth()->user()) col-lg-9 col-xl-9 @else col-lg-8 col-md-8 @endif border-start">
                            {!! Form::open(['url' =>route('website.mentors.store',[$payment,$step,($model)?$model->id:null,$action?'action=edit':'']), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                            @include(sprintf('%s.%s', 'website.mentor.components', $step))
                            <div class="text-center mt-4">
                                @if($step==\App\Enum\StepEnum::PACKAGES)
                                    <a onclick="apply_mentor_subscription();"
                                       class="button button-cta is-bold btn-align primary-btn raised is-rounded">
                                        {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                    </a>
                                @else
                                    @if($action)
                                        <button type="submit" class="button button-cta is-bold btn-align primary-btn raised is-rounded">
                                            {{ trans('general.update') }} <i class="bx bx-arrow-to-right"></i>
                                        </button>
                                    @else
                                        <button type="submit" class="button button-cta is-bold btn-align primary-btn raised is-rounded">
                                            {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                        </button>
                                    @endif
                                @endif
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-register-layout>

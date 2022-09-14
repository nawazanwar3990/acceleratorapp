<x-register-layout
    :page="\App\Services\CMS\PageService::getHomePage()"
    type='customer'
    :step="$step">
    <x-slot name="content">
        <div class="container p-4">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-10">
                    {!! Form::open(['url' =>route('website.customers.store'), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                    @include('website.customers.fields')
                    <div class="text-center mt-4">
                        <button type="submit" class="btn  btn-primary site-first-btn-color">
                            {{ trans('general.save') }} <i class="bx bx-arrow-to-right"></i>
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </x-slot>
</x-register-layout>

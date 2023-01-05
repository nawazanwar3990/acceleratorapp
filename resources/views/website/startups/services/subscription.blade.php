<x-page-layout
    :page="$page">
    <x-slot name="content">
        <section class="startup-holder py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-10 m-auto">
                        <h1>{{ trans('general.subscription') }} for {{ $service->name }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="startup-holder  bg-body py-5">
            <div class="container">
                <div class="row pt-3 justify-content-center">
                    <div class="row pricing-plan">
                    </div>
                </div>
            </div>
        </section>
        @include('components.common-scripts')
    </x-slot>
</x-page-layout>

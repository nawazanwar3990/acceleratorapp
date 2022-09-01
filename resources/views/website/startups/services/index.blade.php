<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div class="container pb-5">
            <div class=" columnsservices-cards is-minimal is-vcentered is-gapless is-multiline">
                <div class="columns is-multiline">
                    @include(sprintf('website.startups.services.components.%s-%s',$startup_for,$startup_type))
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>

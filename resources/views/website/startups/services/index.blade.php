<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div id="start" class="section">
            <div class="container">
                <div class="columns is-multiline is-flex-portrait">
                    @include(sprintf('website.startups.services.components.%s-%s',$startup_for,$startup_type))
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>

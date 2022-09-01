<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div class="columns is-multiline is-flex-portrait">
            @include(sprintf('website.startups.services.components.%s-%s',$startup_for,$startup_type))
        </div>
    </x-slot>
</x-page-layout>

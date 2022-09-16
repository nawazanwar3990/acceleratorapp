<x-page-layout
    :page="$page">
    <x-slot name="content">
        @include(sprintf('website.pages.components.%s',$page->code))
    </x-slot>
</x-page-layout>

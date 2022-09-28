<x-home-layout :page="$page">
    <x-slot name="content">
        @include('website.components.home.how-we-are')
        @include('website.components.home.what-we-offer')
        @include('website.components.home.how-its-work')
        @include('website.components.home.slider')
        @include('website.components.home.startups')
        @include('website.components.home.descriptive_industries')
    </x-slot>
</x-home-layout>

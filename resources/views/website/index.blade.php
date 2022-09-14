<x-home-layout
    :page="$page">
    <x-slot name="content">
        @if(count($page->sections)>0)
            @foreach($page->sections as $section)
                {!! $section->html !!}
            @endforeach
        @endif
    </x-slot>
</x-home-layout>

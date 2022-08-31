<x-page-layout
    :page="$page">
    <x-slot name="content">
        @if(count($page->sections)>0)
            @foreach($page->sections as $section)
                @php
                    $html = $section->html;
                @endphp
                @if(str_contains($html, '%faq_data%'))
                    @php $html =  str_replace('%faq_data%',require_once(resource_path()."/views/components/faqs.blade.php"),$html) @endphp
                @endif
                @if(str_contains($html, '%contact_form_data%'))
                    @php $html =  str_replace('%contact_form_data%',include(resource_path()."/views/components/contact-form.blade.php"),$html) @endphp
                @endif

                @if(str_contains($html, '%about_us_data%'))
                    @php $html =  str_replace('%about_us_data%',require_once(resource_path()."/views/components/about-us.blade.php"),$html) @endphp
                @endif
            @endforeach
        @endif
    </x-slot>
</x-page-layout>

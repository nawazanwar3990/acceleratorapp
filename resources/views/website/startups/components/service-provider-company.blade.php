@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="column is-3">
                <div class="flex-card icon-card hover-inset">
                    <img src="assets/img/graphics/icons/invoice-core.svg"
                         data-base-url="assets/img/graphics/icons/invoice"
                         data-extension=".svg" alt="">
                    <div class="icon-card-text is-clean">{{ $record->company_name }}</div>
                </div>
            </div>
        @endforeach
    @endif
@endisset

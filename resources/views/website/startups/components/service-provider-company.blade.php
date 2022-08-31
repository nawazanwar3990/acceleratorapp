@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="column border">
                <div class="feature-card card-md hover-inset has-text-centered">
                    <div class="card-icon">
                        <i class="im im-icon-Two-Windows"></i>
                    </div>
                    <div class="card-title">
                        <h4>{{ $record->company_name }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset

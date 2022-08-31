@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="column is-3">
                <div class="feature-card card-md hover-inset has-text-centered border">
                    <div class="card-icon">
                        <i class="im im-icon-Two-Windows"></i>
                    </div>
                    <div class="card-title">
                        <h4>{{ $record->user->getFullName() }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset

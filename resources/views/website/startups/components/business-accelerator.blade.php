@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="column is-3">
                <a class="support-card">
                    <i class="im im-icon-Mail-Love"></i>
                    <h3>Email Marketing</h3>
                    <p>We answer your questions and solve your technical problems</p>
                </a>
            </div>
        @endforeach
    @endif
@endisset

@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="column">
                <div class="feature-card card-md hover-inset has-text-centered">
                    <div class="card-icon">
                        <i class="im im-icon-Two-Windows"></i>
                    </div>
                    <div class="card-title">
                        <h4>Web development</h4>
                    </div>
                    <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset

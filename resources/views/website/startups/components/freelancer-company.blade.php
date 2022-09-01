@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="column">
                <div class="feature-card card-md hover-inset has-text-centered border">
                    <div class="card-icon">
                        <i class="im im-icon-Two-Windows"></i>
                    </div>
                    <div class="card-title">
                        <h4>{{ $record->company_name }}</h4>
                    </div>
                    <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                    </div>
                    <div class="py-1">
                        <a href="{{ route('website.startups.services.index',[$startup_for,$startup_type,$record->user->id]) }}" class="button  primary-btn btn-sm rounded raised">View Services</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset

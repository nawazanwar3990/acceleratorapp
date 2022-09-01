@if(is_object($startup_services))
    @if(count($startup_services)>0)
        @foreach($startup_services as $service)
            <div class="column">
                <div class="feature-card card-md hover-inset has-text-centered border">
                    <div class="card-icon">
                        <i class="im im-icon-Two-Windows"></i>
                    </div>
                    <div class="card-title">
                        <h4>{{ $service->name }}</h4>
                    </div>
                    <div class="card-feature-description">
                            <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet
                  cu harum inermis iudicabit.</span>
                    </div>
                    <div class="py-1">
                        <a href="" class="button  primary-btn btn-sm rounded raised">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endif

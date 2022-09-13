@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="col-lg-2 col-md-2">
                <div class="card">
                    <img class="card-img-top" src="https://taqadam.kaust.edu.sa/wp-content/uploads/2021/02/LOGOS8.png" alt="Card image cap">
                    <div class="card-img-overlay">
                        <span class="badge bg-danger rounded-pill">For Rent</span>
                    </div>
                    <div class="card-body bg-white px-0">
                        <h3 class="card-title text-center">{{ $record->company_name }}</h3>
                        <a class="text-primary" href="{{ route('website.startups.services.index',[$startup_for,$startup_type,$record->user->id]) }}">
                            {{ trans('general.view_services') }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset

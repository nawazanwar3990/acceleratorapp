@if(is_object($records))
    @if(count($records))
        @foreach($records as $record)
            <div class="col-lg-2 col-md-2">
                <div class="card bg-transparent">
                    <img class="card-img-top" src="https://taqadam.kaust.edu.sa/wp-content/uploads/2021/02/LOGOS8.png" alt="Card image cap">
                    <div class="card-body bg-transparent px-0 text-center">
                        <h6 class="card-title text-center">{{ $record->user->getFullName() }}</h6>
                        <a class="learn_more" href="{{ route('website.startups.services.index',[$startup_for,$startup_type,$record->user->id]) }}">
                            {{ trans('general.view_services') }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset

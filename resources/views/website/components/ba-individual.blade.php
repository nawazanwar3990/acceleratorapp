@php
    $individual_mentor_array = isset($model) && $model->mentor_type==\App\Enum\AcceleratorTypeEnum::INDIVIDUAL?$model->mentors:array();
@endphp
<div class="row">
    @forelse(\App\Services\BaService::getBaPaginateByType(\App\Enum\AccessTypeEnum::INDIVIDUAL) as $ba)
        <div class="col-md-4">
            <div class="card mt-3 shadow rounded-3" style="5px 5px 5px 5px rgb(210 209 209 / 75%)">
                <div class="card-body">
                    <div class="col-md-12 text-center position-relative">
                        <div class="form-check form-switch position-absolute" style="right: -18px;top: -14px;">
                            <input class="form-check-input ba_individuals"
                                   type="checkbox"
                                   role="switch"
                                   @if(is_array($individual_mentor_array) && in_array($ba->id,$individual_mentor_array)) checked @endif
                                   name="ba_individuals[]"
                                   value="{{ $ba->id }}"
                                   id="ba-{{$ba->id}}"
                                   onchange='loadInfo(this,"{{ \App\Enum\AcceleratorTypeEnum::INDIVIDUAL }}");'>
                            <label class="form-check-label" for="ba-{{$ba->id}}"></label>
                        </div>
                        <img style="width: 100%; max-width: 200px;height: 115px;"
                             onerror="this.src='{{ asset('uploads/default_startup.png') }}'"
                             src="{{ asset($ba->logo[0]->filename??'uploads/default_startup.png') }}"
                             alt="{{ $ba->user->getFullName() }}">
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <h6 class="text-center fw-bold text-uppercase">
                            {{ $ba->user->getFullName() }}
                        </h6>
                        <div class="text-center">
                            <a class="read-more btn px-3 py-2 mt-3 rounded-2"
                               href="{{ route('website.startups.services.index',['ba','individual',$ba->user->id]) }}">
                                View Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($loop->last)
            <div class="col-12 text-center">
                <a class=""><i class="bx bx-chevron-left"></i></a>
                <a class=""><i class="bx bx-chevron-right"></i></a>
            </div>
        @endif
    @empty
    @endforelse
</div>

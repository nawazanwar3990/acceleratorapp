<div class="row input-group">
{{--    <div class="col-2 align-self-center">--}}
{{--        <h4><b>{{ $printTitle }}</b></h4>--}}
{{--    </div>--}}
    <div class="row col-8 align-self-center justify-content-center">
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px;">HR ID</label>
        </div>
        <div class="col-4 border-bottom fs-13" style="font-size: 10px">
            {{ $model->id }}
        </div>
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">Created At</label>
        </div>
        <div class="col-4 border-bottom fs-13" style="font-size: 10px">
            {{ \Carbon\Carbon::parse($model->created_at)->format('d-M-Y')}}
        </div>
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">Rev Date</label>
        </div>
        <div class="col-4 border-bottom fs-13" style="font-size: 10px">
            {{ \Carbon\Carbon::parse($model->updated_at)->format('d-M-Y')}}
        </div>
        <div class="col-2">
            <label class="mb-0" style="font-size: 10px">Print Date</label>
        </div>
        <div class="col-4 border-bottom fs-13" style="font-size: 10px">
            {{ \Carbon\Carbon::now()->format('d-M-Y') }}
        </div>
    </div>
    <div class="col-2 text-center align-self-center">
        @if($model->mediaFirstImage)
            <img alt="hr-logo" height="80" width="80px"
                onerror="this.src='{{ asset('theme/images/user-picture.png') }}'"
             src="{{ asset($model->mediaFirstImage->filename) }}">
        @else
             <img alt="hr-logo" height="80" width="80px"
                  src="{{ asset('theme/images/user-picture.png') }}">
        @endif
    </div>
</div>

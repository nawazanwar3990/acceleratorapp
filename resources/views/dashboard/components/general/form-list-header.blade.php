<div class="card-header border-0" style="background-color: transparent !important;">
    <div class="row d-print-none">
        <div class="col justify-content-end d-flex">
            @if(isset($is_create) AND $is_create==true)
                @php
                  $route = isset($extra)?route($url,$extra):route($url);
                @endphp
                <a href="{{ $route }}" class="btn btn-primary d-inline-flex align-items-center justify-content-center">
                    {{ __('general.create') }}&nbsp;<i class="bx bx-plus-circle"></i>
                </a>
            @endif
            &nbsp;
            @if(isset($print) AND $print==true)
                <button type="button" id="printBtn" class="d-print-none btn btn-primary btn-action d-inline-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.print') }}"><i class="fas fa-print"></i></button>
            @endif
            &nbsp;
            <div class="card-actions">
                <a class="d-print-none btn btn-primary btn-minimize btn-action d-inline-flex align-items-center justify-content-center" data-action="expand" data-bs-toggle="tooltip" title="Toggle Fullscreen" data-bs-placement="top"><i class="bx bx-expand"></i></a>
            </div>
        </div>
    </div>
</div>

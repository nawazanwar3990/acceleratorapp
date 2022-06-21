<div class="row page-titles" style="background-color: #ffffff !important;">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">{{ $pageTitle ?? '' }}</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                @if (isset($breadcrumbs))
                    @foreach ($breadcrumbs as $key => $value)
                        @if ($loop->last)
                            <li class="breadcrumb-item active">
                                {{ $key }}
                            </li>
                        @else
                            <li class="breadcrumb-item">
                                <a href="{!! empty($value) ? 'javascript:void(0);' : $value !!}">{{ $key }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ol>
        </div>
    </div>
</div>
